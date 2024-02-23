@extends('layouts.app')
@section('title')
    Fill-up Form
@endsection
@section('content')
    {{-- bidding form --}}
    <form id="bidding_form" action="{{ route('store_bidding') }}" method="POST" class="col-8 card">
        @csrf
        <div class="card-header">
            <b class="fw-bold fs-1 ms-4">ERP Bidding Form</b>
        </div>

        {{-- marketing executive information --}}
        <div class="p-4">
            <p class="fw-medium fs-3">Customer Details</p>

            <div>
                <label for="" class="form-label">Name of Marketing Executive<span
                        class="text-danger ms-1">*</span></label>
                <select name="executive_name" class="form-select mb-3" aria-label="Default select example">
                    {{-- <option selected>Executive</option> --}}
                    <option value="John Doe">John Doe</option>
                    <option value="Juan Dela Cruz">Juan Dela Cruz</option>
                    <option value="Chester Bennington">Chester Bennington</option>
                </select>
            </div>

            <div class="mb-3 required">
                <label for="" class="form-label">Procuring Entity<span class="text-danger ms-1">*</span></label>
                <input name="procuring_entity" type="text" class="form-control" id=""
                    aria-describedby="emailHelp" placeholder="Entity">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>

            <div class="mb-3 required">
                <label for="" class="form-label">Address<span class="text-danger ms-1">*</span></label>
                <input name="address" type="text" class="form-control" id="" aria-describedby="emailHelp"
                    placeholder="e.g. Wade Street">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>

            {{-- contact details grid --}}
            <div class="container">
                <div class="row gap-3">
                    <div class="mb-3 required col p-0 ">
                        <label for="" class="form-label">Mobile Number<span
                                class="text-danger ms-1">*</span></label>
                        <input name="mobile_no" type="num" class="form-control" id=""
                            aria-describedby="emailHelp" placeholder="e.g. 9381239876">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>

                    <div class="mb-3 required col p-0">
                        <label for="" class="form-label">Email<span class="text-danger ms-1">*</span></label>
                        <input name="email" type="email" class="form-control" id=""
                            aria-describedby="emailHelp" placeholder="example@gg.co">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                </div>
            </div>

            {{-- bac grid --}}
            <div class="container">
                <div class="row gap-3">
                    <div class="mb-3 required col p-0 ">
                        <label for="" class="form-label">BaC Secretariat<span
                                class="text-danger ms-1">*</span></label>
                        <input name="bac_secretariat" type="text" class="form-control" id=""
                            aria-describedby="emailHelp" placeholder="Anne Hathaway">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>

                    <div class="mb-3 required col p-0">
                        <label for="" class="form-label">BaC Chair<span class="text-danger ms-1">*</span></label>
                        <input name="bac_chair" type="text" class="form-control" id=""
                            aria-describedby="emailHelp" placeholder="John Doe">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                </div>
            </div>
        </div>

        {{-- bidding details --}}
        <div class="p-4">
            <p class="fw-medium fs-3">Bidding Details</p>

            <div class="mb-3 required">
                <label for="" class="form-label">ITB Reference No./ Solicitation No.
                    <span class="text-danger ms-1">*</span></label>
                <input name="solicitation_no" type="text" class="form-control" id=""
                    aria-describedby="emailHelp" placeholder="0123">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>

            {{-- project details grid --}}
            <div class="container">
                <div class="row gap-3">
                    <div class="mb-3 required col p-0 ">
                        <label for="" class="form-label">Project Name/Title<span
                                class="text-danger ms-1">*</span></label>
                        <input name="project_name" type="text" class="form-control" id=""
                            aria-describedby="emailHelp" placeholder="My Project Name">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>

                    <div class="mb-3 required col p-0">
                        <label for="" class="form-label">Project Reference No.<span
                                class="text-danger ms-1">*</span></label>
                        <input name="ref_no" type="text" class="form-control" id=""
                            aria-describedby="emailHelp" placeholder="1234">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                </div>
            </div>

            <div>
                <label for="" class="form-label">Mode of Bidding<span class="text-danger ms-1">*</span></label>
                <select name="bid_mode" class="form-select mb-3" aria-label="Default select example">
                    {{-- <option selected>Mode</option> --}}
                    <option value="Competitive Bidding">Competitive Bidding</option>
                    <option value="Direct Contracting">Direct Contracting</option>
                    <option value="Shopping">Shopping</option>
                    <option value="Small Value Procurement">Small Value Procurement</option>
                    <option value="Agency-to-Agency">Agency-to-Agency</option>
                    <option value="Negotiated Procurement">Negotiated Procurement</option>
                </select>
            </div>

            <div class="mb-3 required col p-0">
                <label for="" class="form-label">Date Posted on PhilGEPS<span
                        class="text-danger ms-1">*</span></label>
                <input name="date_posted" type="date" class="form-control" id=""
                    aria-describedby="emailHelp">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>

            <div class="mb-3 required col p-0">
                <label for="" class="form-label">Amount of Bid Documents<span
                        class="text-danger ms-1">*</span></label>
                <input name="bid_amount" type="number" class="form-control" id=""
                    aria-describedby="emailHelp">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>

            <div class="mb-3 required col p-0">
                <label for="" class="form-label">No. of Days Delivery<span
                        class="text-danger ms-1">*</span></label>
                <input name="day_delivery_no" type="number" class="form-control" id=""
                    aria-describedby="emailHelp">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
        </div>

        {{-- items to bid --}}
        <div class="p-4">
            <p class="fw-medium fs-3">Items to be Bid</p>

            {{-- items to bid grid --}}
            <div class="">
                <div class="mb-2 required p-0">
                    <label for="" class="form-label">Item Name<span class="text-danger ms-1">*</span></label>

                    <div class="container">
                        <div class="row gap-3">
                            <div class="required col-8 p-0">
                                <input name="items_to_bid" type="text" class="form-control" id="itemToBid"
                                    aria-describedby="emailHelp">
                            </div>

                            <div class="required col p-0">
                                <input type="button" class="btn btn-primary float-end" value="Add Item"
                                    onclick="addItem()">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3" id="selectedItemsSection" style="display: none;">
                    <p class="fw-light ms-3 mb-2"><small>Selected Items</small></p>

                    <ul id="selectedItems" class="list-group ms-3">
                        <!-- Selected items will be dynamically added here -->
                    </ul>
                </div>
            </div>

            {{-- grid --}}
            {{-- <div class="container">
                <div class="row gap-3">
                    <div class="mb-3 required col p-0 ">
                        <label for="" class="form-label">Status of Items to be Bid<span
                                class="text-danger ms-1">*</span></label>
                        <input name="item_status" type="text" class="form-control" id=""
                            aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 required col p-0">
                        <label for="" class="form-label">Books from other Companies<span
                                class="text-danger ms-1">*</span></label>
                        <input name="other_companies_book" type="text" class="form-control" id=""
                            aria-describedby="emailHelp">
                    </div>
                </div>
            </div> --}}
        </div>

        {{-- bidding timeline --}}
        <div class="p-4">
            <p class="fw-medium fs-3">Bidding Timeline</p>

            <div class="mb-3 required col p-0">
                <label for="" class="form-label">Date of Pre-Bid Conference
                    <span class="text-danger ms-1">*</span></label>
                <input name="prebid_conference_date" type="date" class="form-control" id=""
                    aria-describedby="emailHelp">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>

            <div class="mb-3 required col p-0">
                <label for="" class="form-label">Bid Bulletin No.<span class="text-danger ms-1">*</span></label>
                <input name="bid_bullet_no" type="number" class="form-control" id=""
                    aria-describedby="emailHelp">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>

            <div class="mb-3 required col p-0">
                <label for="" class="form-label">Date of Bid Opening
                    <span class="text-danger ms-1">*</span></label>
                <input name="bid_opening_date" type="date" class="form-control" id=""
                    aria-describedby="emailHelp">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>

            <div class="mb-3 required col p-0">
                <label for="" class="form-label">Notice of Award Received Date<span
                        class="text-danger ms-1">*</span></label>
                <input name="award_received_date" type="date" class="form-control" id=""
                    aria-describedby="emailHelp">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
        </div>

        {{-- contract and delivery information --}}
        <div class="p-4">
            <p class="fw-medium fs-3">Contract and Delivery Information</p>

            <div class="mb-3 required col p-0">
                <label for="" class="form-label">Type of Performance Bond<span
                        class="text-danger ms-1">*</span></label>
                <input name="performance_type" type="text" class="form-control" id=""
                    aria-describedby="emailHelp">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>

            <div class="mb-3 required col p-0">
                <label for="" class="form-label">Purchase Order No.<span
                        class="text-danger ms-1">*</span></label>
                <input name="purchase_order_no" type="number" class="form-control" id=""
                    aria-describedby="emailHelp">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>

            <div class="mb-3 required col p-0">
                <label for="" class="form-label">Date Received
                    <span class="text-danger ms-1">*</span></label>
                <input name="date_received" type="date" class="form-control" id=""
                    aria-describedby="emailHelp">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>

            <div class="mb-3 required col p-0">
                <label for="" class="form-label">Notice to Proceed Received Date<span
                        class="text-danger ms-1">*</span></label>
                <input name="proceed_receive_date" type="date" class="form-control" id=""
                    aria-describedby="emailHelp">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>

            {{-- delivery grid --}}
            <div class="container">
                <div class="row gap-3">
                    <div class="mb-3 required col p-0 ">
                        <label for="" class="form-label">Delivery Receipt No.<span
                                class="text-danger ms-1">*</span></label>
                        <input name="dr_no" type="number" class="form-control" id=""
                            aria-describedby="emailHelp">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>

                    <div class="mb-3 required col p-0">
                        <label for="" class="form-label">Date of Delivery<span
                                class="text-danger ms-1">*</span></label>
                        <input name="delivery_date" type="date" class="form-control" id=""
                            aria-describedby="emailHelp">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>

                    <div class="mb-3 required col p-0">
                        <label for="" class="form-label">Delivery Status<span
                                class="text-danger ms-1">*</span></label>
                        <select name="delivery_status" class="form-select mb-3" aria-label="Default select example">
                            {{-- <option selected>Status</option> --}}
                            <option value="Shipped">Shipped</option>
                            <option value="Delivered">Delivered</option>
                            <option value="Cancelled">Cancelled</option>
                            <option value="Pending">Pending</option>
                        </select>
                    </div>
                </div>
            </div>

            {{-- si grid --}}
            <div class="container">
                <div class="row gap-3">
                    <div class="mb-3 required col p-0 ">
                        <label for="" class="form-label">Sales Invoice No.<span
                                class="text-danger ms-1">*</span></label>
                        <input name="si_no" type="number" class="form-control" id=""
                            aria-describedby="emailHelp">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>

                    <div class="mb-3 required col p-0">
                        <label for="" class="form-label">Date of Sales Invoice<span
                                class="text-danger ms-1">*</span></label>
                        <input name="si_date" type="date" class="form-control" id=""
                            aria-describedby="emailHelp">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                </div>
            </div>
        </div>

        {{-- financial and collection details --}}
        <div class="p-4">
            <p class="fw-medium fs-3">Financial and Collection Details</p>

            <div class="mb-3 required col p-0">
                <label for="" class="form-label">Collection Status<span class="text-danger ms-1">*</span></label>
                <select id="collection_status" name="collection_status" class="form-select mb-3"
                    aria-label="Default select example" onchange="toggleCollectedRow()">
                    {{-- <option selected>Status</option> --}}
                    <option value="Pending">Pending</option>
                    <option value="Collected">Collected</option>
                </select>
            </div>

            {{-- si grid --}}
            <div class="container">
                <div class="row gap-3 collected-row">
                    <div class="mb-3 col p-0 ">
                        <label for="" class="form-label">Collection Receipts No.<span
                                class="text-danger ms-1">*</span></label>
                        <input name="cr_no" type="number" class="form-control" id=""
                            aria-describedby="emailHelp">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>

                    <div class="mb-3 col p-0">
                        <label for="" class="form-label">Date Collected<span
                                class="text-danger ms-1">*</span></label>
                        <input name="date_collected" type="date" class="form-control" id=""
                            aria-describedby="emailHelp">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                </div>

                <div class="row gap-3">
                    <div class="mb-3 required col p-0 ">
                        <label for="" class="form-label">Name of Bank<span
                                class="text-danger ms-1">*</span></label>
                        <input name="bank_name" type="text" class="form-control" id=""
                            aria-describedby="emailHelp">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>

                    <div class="mb-3 required col p-0">
                        <label for="" class="form-label">Date Deposited<span
                                class="text-danger ms-1">*</span></label>
                        <input name="deposit_date" type="date" class="form-control" id=""
                            aria-describedby="emailHelp">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                </div>
            </div>
        </div>

        {{-- hidden field for addedItems in items to bid --}}
        <input type="hidden" name="added_items" id="addedItemsInput">


        <div class="form-group m-3 d-flex justify-content-end p-4">
            <input type="submit" class="btn btn-primary float-end" value="Submit">
        </div>
    </form>

    <script>
        let addedItems = [];
        let removedItems = [];

        // hides the some field for collection details based on status
        function toggleCollectedRow() {
            var collectionStatus = document.getElementById('collection_status').value;
            var collectedRow = document.querySelector('.collected-row');

            // If the collection status is "Collected," show the collected row; otherwise, hide it
            if (collectionStatus === 'Collected') {
                collectedRow.style.display = 'flex';
            } else {
                collectedRow.style.display = 'none';
            }
        }

        function saveBiddingItems() {
            // Check if there are added items to save
            if (addedItems.length > 0) {
                // Set the value of the hidden input field with the addedItems array
                document.getElementById('addedItemsInput').value = addedItems.join(',');
            }
        }

        function addItem() {
            let newItemValue = document.getElementById('itemToBid').value.trim();

            if (newItemValue !== '') {
                let li = document.createElement('li');
                li.className = 'list-group-item d-flex justify-content-between fs-6';

                li.textContent = newItemValue;

                let removeSpan = document.createElement('span');
                removeSpan.className = 'remove-item';
                removeSpan.textContent = 'x';
                removeSpan.onclick = function() {
                    removeItem(this);
                };

                li.appendChild(removeSpan);

                document.getElementById('selectedItems').appendChild(li);

                addedItems.push(newItemValue);

                document.getElementById('itemToBid').value = '';

                document.getElementById('selectedItemsSection').style.display = 'block';
            } else {
                alert('Please enter an item before adding.');
            }

            saveBiddingItems();
            console.log('Added Items:', addedItems);
            console.log('Removed Items:', removedItems);
        }

        function removeItem(element) {
            // Get the parent <li> element
            let listItem = element.parentNode;

            // Get the text content of the removed item
            let removedItemValue = listItem.textContent.trim().slice(0, -1);

            // Remove the item from the addedItems array
            addedItems = addedItems.filter(item => item !== removedItemValue);

            // Remove the <li> from the list
            listItem.parentNode.removeChild(listItem);

            // Add the removed item to the removedItems array
            removedItems.push(removedItemValue);

            // Check if there are no items left
            if (document.getElementById('selectedItems').childElementCount === 0) {
                // Hide the "Selected Items" section
                document.getElementById('selectedItemsSection').style.display = 'none';
            }

            saveBiddingItems();
            console.log('Added Items:', addedItems);
            console.log('Removed Items:', removedItems);
        }

        // collection display the added and removed items
        function displayArrays() {
            console.log('Added Items:', addedItems);
            console.log('Removed Items:', removedItems);
        }

        // Call the function after the page has loaded
        window.onload = function() {
            toggleCollectedRow();
        };
    </script>

    <style>
        .remove-item {
            cursor: pointer;
        }
    </style>
@endsection
