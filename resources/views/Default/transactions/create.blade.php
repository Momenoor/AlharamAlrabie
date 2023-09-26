@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <h2 class="mb-5">Sales Transaction</h2>
        <form action="{{ route('transaction.store') }}" method="post">
            @csrf

            <div class="row">
                <!-- Date Field -->
                <div class="col-md-4 mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="datetime-local" class="form-control" id="date" name="date" required>
                </div>

                <!-- Account Selection -->
                <div class="col-md-4 mb-3">
                    <label for="account" class="form-label">Account</label>
                    <select class="form-select" name="account_id" id="account">
                        @foreach($accounts as $account)
                            <option value="{{ $account->id }}">{{ $account->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Category Selection -->

            </div>

            <div class="row">
                <!-- User Selection -->

                <!-- Status Input -->
                <div class="col-md-6 mb-3">
                    <label for="status" class="form-label">Status</label>
                    <input type="text" class="form-control" id="status" name="status" required>
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
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="quantity" value="1">
                </div>

                <!-- Add item to Sale Button -->
                <div class="col-md-4 mb-3 align-self-end">
                    <button type="button" class="btn btn-primary w-100" onclick="addToSale()">Add to Sale</button>
                </div>
            </div>

            <!-- Sales List Table -->
            <table class="table table-bordered table-hover mt-3" id="salesTable">
                <thead>
                <tr>
                    <th>item Name</th>
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

            <!-- Hidden form fields to store selected item IDs and quantities -->
            <input type="hidden" name="items_data" id="items_data">

            <!-- Submit Sale Button -->
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Complete Sale</button>
            </div>
        </form>
    </div>

    <!-- Include the JavaScript code here, or link to an external .js file -->

@endsection


@section('scripts')
    <script>
        let salesData = [];

        function addToSale() {
            const itemsDropdown = document.getElementById('product');
            const selectedOption = itemsDropdown.options[itemsDropdown.selectedIndex];
            const itemId = selectedOption.value;
            const itemName = selectedOption.text;
            const itemPrice = parseFloat(selectedOption.getAttribute('data-price'));
            const quantity = parseInt(document.getElementById('quantity').value);
            const total = itemPrice * quantity;

            // Check if item is already added, if so, update its quantity
            const existingitemIndex = salesData.findIndex(item => item.itemId === itemId);
            if (existingitemIndex !== -1) {
                salesData[existingitemIndex].quantity += quantity;
                salesData[existingitemIndex].total = salesData[existingitemIndex].itemPrice * salesData[existingitemIndex].quantity;
                renderSalesTable();
            } else {
                salesData.push({
                    itemId,
                    itemName,
                    itemPrice,
                    quantity,
                    total
                });
                addToSalesTable(itemName, itemPrice, quantity, total, itemId);
            }
            document.getElementById('items_data').value = JSON.stringify(salesData);
        }

        function addToSalesTable(itemName, itemPrice, quantity, total, itemId) {
            const tbody = document.getElementById('salesTable').getElementsByTagName('tbody')[0];
            const newRow = tbody.insertRow();

            newRow.setAttribute('data-item-id', itemId);
            newRow.insertCell(0).textContent = itemName;
            newRow.insertCell(1).textContent = `$${itemPrice.toFixed(2)}`;
            newRow.insertCell(2).textContent = quantity;
            newRow.insertCell(3).textContent = `$${total.toFixed(2)}`;

            const removeBtn = document.createElement('button');
            removeBtn.textContent = 'Remove';
            removeBtn.className = 'btn btn-danger btn-sm';
            removeBtn.onclick = function() { removeFromSale(itemId); };
            newRow.insertCell(4).appendChild(removeBtn);
        }

        function removeFromSale(itemId) {
            const rowIndex = salesData.findIndex(item => item.itemId === itemId);
            if (rowIndex !== -1) {
                salesData.splice(rowIndex, 1);
                const tbody = document.getElementById('salesTable').getElementsByTagName('tbody')[0];
                for (let i = 0; i < tbody.rows.length; i++) {
                    if (tbody.rows[i].getAttribute('data-item-id') === itemId) {
                        tbody.deleteRow(i);
                        break;
                    }
                }
                document.getElementById('items_data').value = JSON.stringify(salesData);
            }
        }

        function renderSalesTable() {
            const tbody = document.getElementById('salesTable').getElementsByTagName('tbody')[0];
            tbody.innerHTML = '';  // Clear existing rows
            salesData.forEach(data => {
                addToSalesTable(data.itemName, data.itemPrice, data.quantity, data.total, data.itemId);
            });
        }
    </script>

@endsection
