@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-5">Sales Transaction</h2>
        <form action="{{ route('transaction.store') }}" method="post">
            @csrf

            <div class="row">
                <!-- Date Field -->
                <div class="col-md-3 mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date"
                           value="{{old('date') ?? now()->format('Y-m-d')}}"
                           required>
                </div>
            </div>
            <div class="row">
                <div class="col-3 mb-3">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="reference" class="form-label">Reference</label>
                            <input type="text" class="form-control" id="reference" name="reference"
                                   value="{{ old('reference') }}"
                                   required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3 align-self-end">
                            <label for="service_type" class="form-label">Service Type</label>
                            <select class="form-select" id="service_type" name="service_type">
                                <option value="">-- Select Service Type --</option>
                                <option value="dine_in" {{ old('service_type') == 'dine_in' ? 'selected' : '' }}>
                                    Dine-In
                                </option>
                                <option value="delivery" {{ old('service_type') == 'delivery' ? 'selected' : '' }}>
                                    Delivery
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- Description -->
                <div class="col-md-9 mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description"
                              rows="5">{{ old('description') }}</textarea>
                </div>
            </div>
            <!-- Product Details -->
            <div class="row">
                <!-- Product Selection -->
                <div class="col-md-4 mb-3">
                    <label for="items" class="form-label">Select Product</label>
                    <select class="form-select" id="items">
                        <option value="">-- Select a product --</option>
                        @foreach($items as $item)
                            <option value="{{ $item->id }}" data-price="{{ $item->price }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- Quantity Input -->
                <div class="col-md-4 mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="quantity" value="1" min="1">
                </div>
                <!-- Add Product to Sale Button -->
                <div class="col-md-4 mb-3 align-self-end">
                    <button type="button" class="btn btn-primary w-100" onclick="addToSale()">Add Product</button>
                </div>
            </div>

            <!-- Sales Table -->
            <table class="table table-bordered table-hover mt-3" id="salesTable">
                <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Remove</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>


            <!-- Payment Details -->
            <div class="col-md-3 mb-3">
                <!-- Payment Amount -->
                <div class="mb-3">
                    <label for="payment">Payment Amount:</label>
                    <input type="number" step="0.01" class="form-control" id="payment" name="payment.amount" required
                           readonly>
                </div>
                <!-- Payment Method Dropdown -->
                <div class="mb-3">
                    <label for="paymentMethod">Payment Method:</label>
                    <select class="form-select" id="paymentMethod" name="payment.method" required
                            onchange="checkPaymentSource()">
                        <option value="" {{ old('payment.method') == '' ? 'selected' : '' }}>Select Payment Method
                        </option>
                        <option value="cash" {{ old('payment.method') == 'cash' ? 'selected' : '' }}>Cash</option>
                        <option value="credit_card" {{ old('payment.method') == 'credit_card' ? 'selected' : '' }}>
                            Credit Card
                        </option>
                        <option value="bank_transfer"
                                data-payment-source="bank" {{ old('payment.method') == 'bank_transfer' ? 'selected' : '' }}>
                            Bank Transfer
                        </option>
                        <!-- Add other methods as needed -->
                    </select>
                </div>
                <!-- Payment Reference Field (Hidden by default) -->
                <div class="mb-3" id="paymentReferenceDiv" style="display: none;">
                    <label for="paymentReference">Payment Reference:</label>
                    <input type="text" class="form-control" id="paymentReference" value="{{ old('payment.amount') }}"
                           name="payment.reference">
                </div>

                <div class="mb-3 align-self-end">
                    <div class="form-check  form-switch">
                        <input type="checkbox" class="form-check-input" id="isPaid"
                               name="isPaid" {{ old('isPaid') ? 'checked' : '' }}>
                        <label for="isPaid" class="form-check-label">Is Fully Paid?</label>
                    </div>
                </div>
            </div>

            <!-- Hidden form fields to store selected product IDs and quantities -->
            <input type="hidden" name="items_data" id="items_data" value="{{old('items_data')}}">

            <!-- Submit Sale Button -->
            <div class="mb-3 mt-3">
                <button type="submit" class="btn btn-success">Complete Sale</button>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    <script>
        let salesData = [];
        let totalAmount = 0;

        function addToSale() {
            const productSelect = document.getElementById("product");
            const productOption = productSelect.options[productSelect.selectedIndex];
            const productName = productOption.text;
            const productId = productOption.value;
            const productPrice = parseFloat(productOption.getAttribute('data-price'));
            const quantity = parseInt(document.getElementById("quantity").value);
            const total = productPrice * quantity;

            // Check if product is already in the table
            let exists = false;
            salesData.forEach(item => {
                if (item.id === productId) {
                    item.quantity += quantity;
                    item.total = item.quantity * item.price;
                    exists = true;
                }
            });

            if (!exists) {
                salesData.push({
                    id: productId,
                    name: productName,
                    price: productPrice,
                    quantity: quantity,
                    total: total
                });
            }

            document.getElementById('product').selectedIndex = 0;
            document.getElementById('quantity').value = 1;

            updateHiddenField();
            renderSalesTable();
            updatePaymentAmount();
        }

        function renderSalesTable() {
            const tableBody = document.getElementById("salesTable").getElementsByTagName("tbody")[0];
            tableBody.innerHTML = "";

            salesData.forEach(item => {
                const row = tableBody.insertRow();

                const cell1 = row.insertCell(0);
                const cell2 = row.insertCell(1);
                const cell3 = row.insertCell(2);
                const cell4 = row.insertCell(3);
                const cell5 = row.insertCell(4);

                cell1.innerHTML = item.name;
                cell2.innerHTML = item.quantity;
                cell3.innerHTML = item.price.toFixed(2);
                cell4.innerHTML = item.total.toFixed(2);

                const removeButton = document.createElement("button");
                removeButton.textContent = "Remove";
                removeButton.className = "btn btn-danger btn-sm";
                removeButton.onclick = function () {
                    removeFromSale(item.id);
                };
                cell5.appendChild(removeButton);
            });
        }

        function removeFromSale(productId) {
            salesData = salesData.filter(item => item.id !== productId);
            updateHiddenField();
            renderSalesTable();
            updatePaymentAmount();
        }

        function updateHiddenField() {
            document.getElementById('items_data').value = JSON.stringify(salesData);
        }

        function updatePaymentAmount() {
            totalAmount = salesData.reduce((sum, item) => sum + item.total, 0);
            document.getElementById("payment").value = totalAmount.toFixed(2);
        }

        function checkPaymentSource() {
            const paymentMethodSelect = document.getElementById("paymentMethod");
            const selectedOption = paymentMethodSelect.options[paymentMethodSelect.selectedIndex];
            const paymentSource = selectedOption.getAttribute('data-payment-source');
            const paymentReferenceDiv = document.getElementById("paymentReferenceDiv");

            if (paymentSource === "bank") {
                paymentReferenceDiv.style.display = "block";
            } else {
                paymentReferenceDiv.style.display = "none";
            }
        }

    </script>
@endsection

