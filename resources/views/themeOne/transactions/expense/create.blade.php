@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <h2 class="mb-5">Item Transaction</h2>
        <form action="{{ route('transaction.store') }}" method="post">
            @csrf

            <div class="row">
                <!-- Date Field -->
                <div class="col-md-3 mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{now()->format('Y-m-d')}}"
                           required>
                </div>

                <!-- Category Selection -->

            </div>

            <div class="row">
                <!-- User Selection -->

                <!-- Status Input -->
                <div class="col-md-3 mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="">Select Transaction Status</option>
                        <option value="pending">Pending</option>
                        <option value="completed">Completed</option>
                        <option value="failed">Failed</option>
                        <option value="canceled">Canceled</option>
                        <option value="in_progress">In Progress</option>
                        <option value="on_hold">On Hold</option>
                        <option value="refunded">Refunded</option>
                        <option value="disputed">Disputed</option>
                        <option value="reversed">Reversed</option>
                        <option value="settled">Settled</option>
                        <option value="authorized">Authorized</option>
                        <option value="declined">Declined</option>
                    </select>

                </div>
            </div>

            <div class="row">
                <!-- item Selection -->
                <div class="col-md-5 mb-3">
                    <label for="items" class="form-label">Select item</label>
                    <select class="form-select" id="items">
                        <option value="">-- Select a item --</option>
                        @foreach($items as $item)
                            <option value="{{ $item->id }}" data-price="{{ $item->price }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Quantity Input -->
                <div class="col-md-3 mb-3">
                    <label for="itemPrice" class="form-label">Price</label>
                    <input type="number" class="form-control" id="itemPrice" value="0">
                </div>

                <!-- Add item to Sale Button -->
                <div class="col-md-4 mb-3 align-self-end">
                    <button type="button" class="btn btn-primary w-100" onclick="addToSale()">Add Expense</button>
                </div>
            </div>

            <!-- Product List Table -->
            <table class="table table-bordered table-hover mt-3" id="ItemTable">
                <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Remove</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>

            <!-- Payment Field -->
            <div class="col-md-4 mb-3">
                <label for="payment">Payment Amount:</label>
                <input type="number" step="0.01" class="form-control" id="payment" name="payment" required>
            </div>

            <!-- Payment Method Dropdown -->
            <div class="col-md-4 mb-3">
                <label for="paymentMethod">Payment Method:</label>
                <select class="form-select" id="paymentMethod" name="paymentMethod" required>
                    <option value="0" selected>Select Payment Method</option>
                    <option value="cash">Cash</option>
                    <option value="credit_card">Credit Card</option>
                    <option value="bank_transfer">Bank Transfer</option>
                    <!-- Add other methods as needed -->
                </select>
            </div>

            <!-- Status Dropdown -->
            <div class="col-md-4 mb-3">
                <label for="status">Transaction Status:</label>
                <select class="form-select" id="status" name="status" required>
                    <option value="0" selected>Select Status</option>
                    <option value="completed">Completed</option>
                    <option value="pending">Pending</option>
                    <option value="failed">Failed</option>
                    <!-- Add other statuses as needed -->
                </select>
            </div>

            <!-- Hidden form fields to store selected item IDs and quantities -->
            <input type="hidden" name="items_data" id="items_data">

            <!-- Submit Sale Button -->
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Complete Expense</button>
            </div>
        </form>
    </div>

    <!-- Include the JavaScript code here, or link to an external .js file -->

@endsection


@section('scripts')
    <script>
        let ItemData = [];

        function addToSale() {
            const itemsDropdown = document.getElementById('product');
            const selectedOption = itemsDropdown.options[itemsDropdown.selectedIndex];
            const itemId = selectedOption.value;
            const itemName = selectedOption.text;
            const itemPrice = parseFloat(document.getElementById('itemPrice').value);
            const quantity = 1;

            // Check if the selected index is 0, and return without doing anything
            if (itemsDropdown.selectedIndex === 0) {
                alert('Please select a valid item.');
                return;
            }

            const existingItem = ItemData.find(item => item.itemId === itemId);
            if (existingItem) {
                existingItem.totalPrice += (itemPrice * quantity);
                existingItem.quantity += quantity;
                existingItem.averagePrice = existingItem.totalPrice / existingItem.quantity;
                renderItemTable();
            } else {
                ItemData.push({
                    itemId,
                    itemName,
                    itemPrice,
                    averagePrice: itemPrice,
                    quantity,
                    totalPrice: itemPrice * quantity
                });
                addToItemTable(itemName, itemPrice, quantity, itemPrice * quantity, itemId);
            }

            document.getElementById('product').selectedIndex = 0;
            document.getElementById('itemPrice').value = '';
            document.getElementById('items_data').value = JSON.stringify(ItemData);
        }

        function addToItemTable(itemName, averagePrice, quantity, total, itemId) {
            const tbody = document.getElementById('ItemTable').getElementsByTagName('tbody')[0];
            const newRow = tbody.insertRow();

            newRow.setAttribute('data-item-id', itemId);
            newRow.insertCell(0).textContent = itemName;
            newRow.insertCell(1).textContent = `AED${averagePrice.toFixed(2)}`;
            newRow.insertCell(2).textContent = quantity;
            newRow.insertCell(3).textContent = `AED${total.toFixed(2)}`;

            const removeBtn = document.createElement('button');
            removeBtn.textContent = 'Remove';
            removeBtn.className = 'btn btn-danger btn-sm';
            removeBtn.onclick = function () {
                removeFromSale(itemId);
            };
            newRow.insertCell(4).appendChild(removeBtn);
        }

        function removeFromSale(itemId) {
            const rowIndex = ItemData.findIndex(item => item.itemId === itemId);
            if (rowIndex !== -1) {
                ItemData.splice(rowIndex, 1);
                const tbody = document.getElementById('ItemTable').getElementsByTagName('tbody')[0];
                for (let i = 0; i < tbody.rows.length; i++) {
                    if (tbody.rows[i].getAttribute('data-item-id') === itemId) {
                        tbody.deleteRow(i);
                        break;
                    }
                }
                document.getElementById('items_data').value = JSON.stringify(ItemData);
            }
        }


        function renderItemTable() {
            const tbody = document.getElementById('ItemTable').getElementsByTagName('tbody')[0];
            tbody.innerHTML = '';
            ItemData.forEach(data => {
                addToItemTable(data.itemName, data.averagePrice, data.quantity, data.averagePrice * data.quantity, data.itemId);
            });
        }

    </script>

@endsection
