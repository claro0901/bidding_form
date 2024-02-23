@extends('layouts.app')

@section('title')
    Form View
@endsection

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <b></b>
        </div>

        <form id="bidding_form" action="{{ route('whole.post', ['id' => $sample->id]) }}" method="POST" class="p-2">
            @csrf

            <div class="d-flex justify-content-between align-items-center">
                <p class="fw-bold fs-1 ms-4">ERP Bidding Details</p>

                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit edit-icon" width="44"
                    height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                    <path d="M16 5l3 3" />
                </svg>
            </div>

            {{-- marketing executive information --}}
            <div class="p-4">
                <p class="fw-medium fs-3">Customer</p>

                <div>
                    <label for="" class="form-label">Name of Marketing Executive<span
                            class="text-danger ms-1">*</span></label>

                    <select name="executive_name" class="form-select mb-3" aria-label="Default select example">
                        <option value="John Doe"
                            {{ $sample->customer_details->executive_name == 'John Doe' ? 'selected' : '' }}>John Doe
                        </option>
                        <option value="Juan Dela Cruz"
                            {{ $sample->customer_details->executive_name == 'Juan Dela Cruz' ? 'selected' : '' }}>Juan Dela
                            Cruz
                        </option>
                        <option value="Chester Bennington"
                            {{ $sample->customer_details->executive_name == 'Chester Bennington' ? 'selected' : '' }}>
                            Chester Bennington</option>
                    </select>
                </div>

                <div class="mb-3 required">
                    <label for="" class="form-label">Procuring Entity<span class="text-danger ms-1">*</span></label>
                    <input value="{{ $sample->customer_details->procuring_entity }}" name="procuring_entity" type="text"
                        class="form-control" id="" aria-describedby="emailHelp" placeholder="">
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>

                <div class="mb-3 required">
                    <label for="" class="form-label">Address<span class="text-danger ms-1">*</span></label>
                    <input value="{{ $sample->customer_details->address }}" name="address" type="text"
                        class="form-control" id="" aria-describedby="emailHelp">
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>

                {{-- contact details grid --}}
                <div class="container">
                    <div class="row gap-3">
                        <div class="mb-3 required col p-0 ">
                            <label for="" class="form-label">Mobile Number<span
                                    class="text-danger ms-1">*</span></label>
                            <input value="{{ $sample->customer_details->mobile_no }}" name="mobile_no" type="number"
                                class="form-control" id="" aria-describedby="emailHelp">
                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>

                        <div class="mb-3 required col p-0">
                            <label for="" class="form-label">Email<span class="text-danger ms-1">*</span></label>
                            <input value="{{ $sample->customer_details->email }}" name="email" type="email"
                                class="form-control" id="" aria-describedby="emailHelp">
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
                            <input value="{{ $sample->customer_details->bac_secretariat }}" name="bac_secretariat"
                                type="text" class="form-control" id="" aria-describedby="emailHelp">
                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>

                        <div class="mb-3 required col p-0">
                            <label for="" class="form-label">BaC Chair<span
                                    class="text-danger ms-1">*</span></label>
                            <input value="{{ $sample->customer_details->bac_chair }}" name="bac_chair" type="text"
                                class="form-control" id="" aria-describedby="emailHelp">
                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                    </div>
                </div>
            </div>

            {{-- bidding details --}}
            <div class="p-4">
                <p class="fw-medium fs-3">Bidding</p>

                <div class="mb-3 required">
                    <label for="" class="form-label">ITB Reference No./ Solicitation No.
                        <span class="text-danger ms-1">*</span></label>
                    <input value="{{ $sample->solicitation_no }}" name="solicitation_no" type="text"
                        class="form-control" id="" aria-describedby="emailHelp" placeholder="">
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>

                {{-- project details grid --}}
                <div class="container">
                    <div class="row gap-3">
                        <div class="mb-3 required col p-0 ">
                            <label for="" class="form-label">Project Name/Title<span
                                    class="text-danger ms-1">*</span></label>
                            <input value="{{ $sample->project_name }}" name="project_name" type="text"
                                class="form-control" id="" aria-describedby="emailHelp">
                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>

                        <div class="mb-3 required col p-0">
                            <label for="" class="form-label">Project Reference No.<span
                                    class="text-danger ms-1">*</span></label>
                            <input value="{{ $sample->project_ref_no }}" name="ref_no" type="text"
                                class="form-control" id="" aria-describedby="emailHelp">
                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                    </div>
                </div>

                <div>
                    <label for="" class="form-label">Mode of Bidding<span
                            class="text-danger ms-1">*</span></label>
                    <select name="bid_mode" class="form-select mb-3" aria-label="Default select example">
                        <option value="Competitive Bidding"
                            {{ $sample->bid_mode == 'Competitive Bidding' ? 'selected' : '' }}>Competitive Bidding
                        </option>
                        <option value="Direct Contracting"
                            {{ $sample->bid_mode == 'Direct Contracting' ? 'selected' : '' }}>Direct Contracting
                        </option>
                        <option value="Shopping" {{ $sample->bid_mode == 'Shopping' ? 'selected' : '' }}>Shopping</option>
                        <option value="Small Value Procurement"
                            {{ $sample->bid_mode == 'Small Value Procurement' ? 'selected' : '' }}>Small Value Procurement
                        </option>
                        <option value="Agency-to-Agency" {{ $sample->bid_mode == 'Agency-to-Agency' ? 'selected' : '' }}>
                            Agency-to-Agency</option>
                        <option value="Negotiated Procurement"
                            {{ $sample->bid_mode == 'Negotiated Procurement' ? 'selected' : '' }}>Negotiated Procurement
                        </option>
                    </select>
                </div>

                <div class="mb-3 required col p-0">
                    <label for="" class="form-label">Date Posted on PhilGEPS<span
                            class="text-danger ms-1">*</span></label>
                    <input value="{{ $sample->date_posted }}" name="date_posted" type="date" class="form-control"
                        id="" aria-describedby="emailHelp">
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>

                <div class="mb-3 required col p-0">
                    <label for="" class="form-label">Amount of Bid Documents<span
                            class="text-danger ms-1">*</span></label>
                    <input value="{{ $sample->bid_amount }}" name="bid_amount" type="number" class="form-control"
                        id="" aria-describedby="emailHelp">
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>

                <div class="mb-3 required col p-0">
                    <label for="" class="form-label">No. of Days Delivery<span
                            class="text-danger ms-1">*</span></label>
                    <input value="{{ $sample->day_delivery_no }}" name="day_delivery_no" type="number"
                        class="form-control" id="" aria-describedby="emailHelp">
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>
            </div>

            {{-- items to bid --}}
            <div class="p-4">
                <p class="fw-medium fs-3">Items to be Bid</p>

                {{-- items to bid grid --}}
                <div class="">
                    <div class="mb-2 required p-0 add-item-field">
                        <label for="" class="form-label">Item Name<span class="text-danger ms-1">*</span></label>

                        <div class="container">
                            <div class="row gap-3">
                                <div class="required col-8 p-0">
                                    <input name="items_to_bid" type="text" class="form-control" id="itemToBid"
                                        aria-describedby="emailHelp">
                                </div>

                                <div class="required col p-0">
                                    <input value="Add Item" type="button" class="btn btn-primary float-end"
                                        onclick="addItem()">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3" id="selectedItemsSection">
                        <p class="fw-light ms-3 mb-2"><small>Selected Items</small></p>
                        {{-- <ul id="selectedItems" class="list-group ms-3">
                            @foreach ($sample->bidding_item as $item)
                                <li id=""
                                    class="list-group-item d-flex justify-content-between fs-6 selected-item">
                                    {{ $item->added_items }}

                                    <div class="span-container" onclick="removeItem(this)" style="display: none">
                                        <span class="dynamic-span remove-item" style="cursor: pointer">x</span>
                                    </div>
                                </li>
                            @endforeach
                        </ul> --}}

                        <ul id="biddingItemsList" class="list-group">
                            <!-- Items will be dynamically added here -->
                        </ul>
                    </div>
                </div>

                {{-- grid --}}
                {{-- <div class="container">
                    <div class="row gap-3">
                        <div class="mb-3 required col p-0 ">
                            <label for="" class="form-label">Status of Items to be Bid<span
                                    class="text-danger ms-1">*</span></label>
                            <input value="{{ $sample->bidding_item->item_status }}" name="item_status" type="text"
                                class="form-control" id="" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3 required col p-0">
                            <label for="" class="form-label">Books from other Companies<span
                                    class="text-danger ms-1">*</span></label>
                            <input value="{{ $sample->bidding_item->other_companies_book }}" name="other_companies_book"
                                type="text" class="form-control" id="" aria-describedby="emailHelp">

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
                    <input value="{{ $sample->bidding_timeline->prebid_conference_date }}" name="prebid_conference_date"
                        type="date" class="form-control" id="" aria-describedby="emailHelp">
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>

                <div class="mb-3 required col p-0">
                    <label for="" class="form-label">Bid Bulletin No.<span
                            class="text-danger ms-1">*</span></label>
                    <input value="{{ $sample->bidding_timeline->bid_bullet_no }}" name="bid_bullet_no" type="number"
                        class="form-control" id="" aria-describedby="emailHelp">
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>

                <div class="mb-3 required col p-0">
                    <label for="" class="form-label">Date of Bid Opening
                        <span class="text-danger ms-1">*</span></label>
                    <input value="{{ $sample->bidding_timeline->bid_opening_date }}" name="bid_opening_date"
                        type="date" class="form-control" id="" aria-describedby="emailHelp">
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>

                <div class="mb-3 required col p-0">
                    <label for="" class="form-label">Notice of Award Received Date<span
                            class="text-danger ms-1">*</span></label>
                    <input value="{{ $sample->bidding_timeline->award_received_date }}" name="award_received_date"
                        type="date" class="form-control" id="" aria-describedby="emailHelp">
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>
            </div>

            {{-- contract and delivery information --}}
            <div class="p-4">
                <p class="fw-medium fs-3">Contract and Delivery Information</p>

                <div class="mb-3 required col p-0">
                    <label for="" class="form-label">Type of Performance Bond<span
                            class="text-danger ms-1">*</span></label>
                    <input value="{{ $sample->contract_delivery->performance_type }}" name="performance_type"
                        type="text" class="form-control" id="" aria-describedby="emailHelp">
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>

                <div class="mb-3 required col p-0">
                    <label for="" class="form-label">Purchase Order No.<span
                            class="text-danger ms-1">*</span></label>
                    <input value="{{ $sample->contract_delivery->purchase_order_no }}" name="purchase_order_no"
                        type="number" class="form-control" id="" aria-describedby="emailHelp">
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>

                <div class="mb-3 required col p-0">
                    <label for="" class="form-label">Date Received
                        <span class="text-danger ms-1">*</span></label>
                    <input value="{{ $sample->contract_delivery->date_received }}" name="date_received" type="date"
                        class="form-control" id="" aria-describedby="emailHelp">
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>

                <div class="mb-3 required col p-0">
                    <label for="" class="form-label">Notice to Proceed Received Date<span
                            class="text-danger ms-1">*</span></label>
                    <input value="{{ $sample->contract_delivery->proceed_receive_date }}" name="proceed_receive_date"
                        type="date" class="form-control" id="" aria-describedby="emailHelp">
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>

                {{-- delivery grid --}}
                <div class="container">
                    <div class="row gap-3">
                        <div class="mb-3 required col p-0 ">
                            <label for="" class="form-label">Delivery Receipt No.<span
                                    class="text-danger ms-1">*</span></label>
                            <input value="{{ $sample->contract_delivery->dr_no }}" name="dr_no" type="number"
                                class="form-control" id="" aria-describedby="emailHelp">
                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>

                        <div class="mb-3 required col p-0">
                            <label for="" class="form-label">Date of Delivery<span
                                    class="text-danger ms-1">*</span></label>
                            <input value="{{ $sample->contract_delivery->delivery_date }}" name="delivery_date"
                                type="date" class="form-control" id="" aria-describedby="emailHelp">
                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>

                        <div>
                            <label for="" class="form-label">Delivery Status<span
                                    class="text-danger ms-1">*</span></label>

                            <select name="delivery_status" class="form-select mb-3" aria-label="Default select example">
                                <option value="Shipped"
                                    {{ $sample->contract_delivery->delivery_status == 'Shipped' ? 'selected' : '' }}>One
                                </option>
                                <option value="Delivered"
                                    {{ $sample->contract_delivery->delivery_status == 'Delivered' ? 'selected' : '' }}>Two
                                </option>
                                <option value="Cancelled"
                                    {{ $sample->contract_delivery->delivery_status == 'Cancelled' ? 'selected' : '' }}>
                                    Three</option>
                                <option value="Pending"
                                    {{ $sample->contract_delivery->delivery_status == 'Pending' ? 'selected' : '' }}>
                                    Three</option>
                            </select>
                        </div>

                        {{-- <div class="mb-3 required col p-0 ">
                            <label for="" class="form-label">Status of Delivery<span
                                    class="text-danger ms-1">*</span></label>
                            <input value="{{ $sample->contract_delivery->delivery_status }}" name="delivery_status"
                                type="number" class="form-control" id="" aria-describedby="emailHelp">
                        </div> --}}
                    </div>
                </div>

                {{-- si grid --}}
                <div class="container">
                    <div class="row gap-3">
                        <div class="mb-3 required col p-0 ">
                            <label for="" class="form-label">Sales Invoice No.<span
                                    class="text-danger ms-1">*</span></label>
                            <input value="{{ $sample->contract_delivery->si_no }}" name="si_no" type="number"
                                class="form-control" id="" aria-describedby="emailHelp">
                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>

                        <div class="mb-3 required col p-0">
                            <label for="" class="form-label">Date of Sales Invoice<span
                                    class="text-danger ms-1">*</span></label>
                            <input value="{{ $sample->contract_delivery->si_date }}" name="si_date" type="date"
                                class="form-control" id="" aria-describedby="emailHelp">
                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                    </div>
                </div>
            </div>

            {{-- financial and collection details --}}
            <div class="p-4">
                <p class="fw-medium fs-3">Financial and Collection</p>
                <div class="mb-3 required col p-0">
                    <label for="" class="form-label">Collection Status<span
                            class="text-danger ms-1">*</span></label>
                    <select id="collection_status" name="collection_status" class="form-select mb-3"
                        aria-label="Default select example" onchange="toggleCollectedRow()">
                        <option value="Collected"
                            {{ $sample->collection_details->collection_status == 'Collected' ? 'selected' : '' }}>Collected
                        </option>
                        <option value="Pending"
                            {{ $sample->collection_details->collection_status == 'Pending' ? 'selected' : '' }}>Pending
                        </option>
                    </select>
                </div>

                {{-- si grid --}}
                <div class="container">
                    <div class="row gap-3 collected-row">
                        <div class="mb-3 col p-0 ">
                            <label for="" class="form-label">Collection Receipts No.<span
                                    class="text-danger ms-1">*</span></label>
                            <input value="{{ $sample->collection_details->cr_no }}" name="cr_no" type="number"
                                class="form-control" id="" aria-describedby="emailHelp">
                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>

                        <div class="mb-3 col p-0">
                            <label for="" class="form-label">Date Collected<span
                                    class="text-danger ms-1">*</span></label>
                            <input value="{{ $sample->collection_details->date_collected }}" name="date_collected"
                                type="date" class="form-control" id="" aria-describedby="emailHelp">
                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                    </div>

                    <div class="row gap-3">
                        <div class="mb-3 required col p-0 ">
                            <label for="" class="form-label">Name of Bank<span
                                    class="text-danger ms-1">*</span></label>
                            <input value="{{ $sample->collection_details->bank_name }}" name="bank_name" type="text"
                                class="form-control" id="" aria-describedby="emailHelp">
                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>

                        <div class="mb-3 required col p-0">
                            <label for="" class="form-label">Date Deposited<span
                                    class="text-danger ms-1">*</span></label>
                            <input value="{{ $sample->collection_details->deposit_date }}" name="deposit_date"
                                type="date" class="form-control" id="" aria-describedby="emailHelp">
                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                    </div>
                </div>
            </div>

            {{-- hidden field for addedItems in items to bid --}}
            <input type="hidden" name="added_items" id="addedItemsInput">


            <div class="form-group m-3 d-flex justify-content-end p-4">
                <input id="submitBtn" name="" type="submit" class="btn btn-primary float-end"
                    value="Save Changes">
            </div>
        </form>

        <script>
            let removedItems = [];
            let biddingItems = @json($sample->bidding_item->pluck('added_items')->toArray());
            // Get the container element by ID
            let biddingItemsList = document.getElementById('biddingItemsList');

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

            // Loop through the biddingItems array and create list items dynamically
            biddingItems.forEach(item => {
                let listItem = document.createElement('li');
                listItem.className = 'list-group-item d-flex justify-content-between fs-6 selected-item';
                listItem.textContent = item;

                let divContainer = document.createElement('div');
                divContainer.className = 'span-container';
                divContainer.onclick = function() {
                    removeItem(this);
                };

                let span = document.createElement('span');
                span.className = 'dynamic-span remove-item';
                span.textContent = 'x';
                span.style.cursor = 'pointer';

                divContainer.appendChild(span);
                listItem.appendChild(divContainer);
                biddingItemsList.appendChild(listItem);
            });

            // Store bidding item values in an array
            // let biddingItems = @json($sample->bidding_item->pluck('added_items')->toArray());
            console.log(biddingItems)

            function saveBiddingItems() {
                // Check if there are added items to save
                if (biddingItems.length > 0) {
                    // Set the value of the hidden input field with the addedItems array
                    document.getElementById('addedItemsInput').value = biddingItems.join(',');
                }

                console.log('Sending to backend:', biddingItems);
                // Continue with form submission
                // document.forms["bidding_form"].submit();
            }

            function addItem() {
                let newItemValue = document.getElementById('itemToBid').value.trim();

                if (newItemValue !== '') {
                    // Create a new list item
                    let listItem = document.createElement('li');
                    listItem.className = 'list-group-item d-flex justify-content-between fs-6 selected-item';
                    listItem.textContent = newItemValue;

                    // Create a remove button
                    let removeSpan = document.createElement('span');
                    removeSpan.className = 'remove-item';
                    removeSpan.textContent = 'x';
                    removeSpan.onclick = function() {
                        removeItem(this);
                    };

                    // Append the remove button to the list item
                    listItem.appendChild(removeSpan);

                    // Append the list item to the container
                    document.getElementById('biddingItemsList').appendChild(listItem);

                    // Add the new item to the biddingItems array
                    biddingItems.push(newItemValue);

                    // Clear the input field
                    document.getElementById('itemToBid').value = '';

                    // Show the "Selected Items" section
                    document.getElementById('selectedItemsSection').style.display = 'block';

                    // console.log(biddingItems);
                    saveBiddingItems();
                } else {
                    alert('Please enter an item before adding.');
                }
            }

            function removeItem(element) {
                // Get the parent <li> element
                let listItem = element.parentNode;

                // Get the text content of the removed item
                let removedItemValue = listItem.firstChild.textContent.trim();



                // Remove the item from the biddingItems array
                biddingItems = biddingItems.filter(item => item !== removedItemValue);

                // Remove the <li> from the list
                listItem.parentNode.removeChild(listItem);

                // Add the removed item to the removedItems array
                removedItems.push(removedItemValue);

                // Check if there are no items left
                if (document.getElementById('biddingItemsList').childElementCount === 0) {
                    // Hide the "Selected Items" section
                    document.getElementById('addedItemsInput').value = null
                    document.getElementById('selectedItemsSection').style.display = 'none';
                }

                // console.log('Bidding Items:', biddingItems);
                saveBiddingItems();
                // console.log('Removed Items:', removedItems);
            }


            document.addEventListener("DOMContentLoaded", function() {
                // Get all form fields and the submit button
                const formFields = document.querySelectorAll('#bidding_form input, #bidding_form select');
                const submitBtn = document.getElementById('submitBtn');

                // Initially, disable all form fields
                formFields.forEach(function(field) {
                    field.setAttribute('disabled', 'true');
                });


                // Enable form fields and show submit button when edit icon is clicked
                const editIcon = document.querySelector('.edit-icon');
                const spanContainers = document.querySelectorAll('.span-container');

                editIcon.addEventListener('click', function() {
                    formFields.forEach(function(field) {
                        field.removeAttribute('disabled');
                    });
                    submitBtn.style.display = 'block';

                    spanContainers.forEach(function(container) {
                        container.style.display = 'block'; // or 'block' depending on your styling
                    });
                });

                // Save the original values of the fields when the page loads
                const originalFieldValues = {};
                formFields.forEach(function(field) {
                    originalFieldValues[field.name] = field.value;
                });

                // Check for changes in the form fields and show submit button accordingly
                formFields.forEach(function(field) {
                    field.addEventListener('input', function() {
                        if (field.value !== originalFieldValues[field.name]) {
                            submitBtn.style.display = 'block';
                        } else {
                            submitBtn.style.display = 'none';
                        }
                    });
                });
            });

            saveBiddingItems();

            // Call the function after the page has loaded
            window.onload = function() {
                toggleCollectedRow();
            };
        </script>
    </div>
@endsection
