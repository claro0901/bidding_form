<?php

namespace App\Http\Controllers;
use App\Models\Form;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\bidding_forms;
use App\Models\bidding_items;
use App\Models\bidding_timeline;
use App\Models\bidding_customer_details;
use App\Models\bidding_contract_delivery;
use Dotenv\Exception\ValidationException;
use App\Models\bidding_collection_details;

class Bidding extends Controller
{
    public function details(){
        $form = bidding_forms::all();
        return view('/details')->with('bidding_forms', $form);
    }

    public function store(Request $request){
        $request->validate([
            // 'added_items' => 'required|array',
            // 'item_status' => 'required',
            // 'other_companies_book' => 'required',
            // Add other validation rules as needed
        ]);
        
        
        // $myArray = json_decode($request->input('added_items'), true);
        // $myArray = explode(',', $request->input('added_items'));
        $addedItemsInputValue = $request->input('added_items');
        // echo 'Value before explode: ' . $addedItemsInputValue;

        $myArray = explode(',', $addedItemsInputValue);
        
        
        // dd($myArray);

        $data = $request->all();
        
        // dd($myArray);
        $forms = bidding_forms::create([
            'solicitation_no'=>$request->solicitation_no,
            'project_name'=>$request->project_name,
            'project_ref_no'=>$request->ref_no,
            'bid_mode'=>$request->bid_mode,
            'date_posted'=>$request->date_posted,
            'bid_amount'=>$request->bid_amount,
            'day_delivery_no'=>$request->day_delivery_no,
        ]);

        foreach($myArray as $item){
            // $item = trim($item, '"');
            bidding_items::create([
                'bidding_form_id' => $forms->id,
                'added_items' => strval($item),
                // 'item_status' => $request->item_status,
                // 'other_companies_book' => $request->other_companies_book,
                // Add other fields as needed
            ]);
        }

        bidding_customer_details::create([
            'bidding_form_id' => $forms->id,
            'executive_name'=>$request->executive_name,
            'procuring_entity'=>$request->procuring_entity,
            'address'=>$request->address,
            'mobile_no'=>$request->mobile_no,
            'email'=>$request->email,
            'bac_secretariat'=>$request->bac_secretariat,
            'bac_chair'=>$request->bac_chair,
        ]);

        bidding_timeline::create([
            'bidding_form_id' => $forms->id,
            'prebid_conference_date'=>$request->prebid_conference_date,
            'bid_bullet_no'=>$request->bid_bullet_no,
            'bid_opening_date'=>$request->bid_opening_date,
            'award_received_date'=>$request->award_received_date,
        ]);

        bidding_contract_delivery::create([
            'bidding_form_id' => $forms->id,
            'performance_type'=>$request->performance_type,
            'purchase_order_no'=>$request->purchase_order_no,
            'date_received'=>$request->date_received,
            'proceed_receive_date'=>$request->proceed_receive_date,
            'dr_no'=>$request->dr_no,
            'delivery_date'=>$request->delivery_date,
            'delivery_status'=>$request->delivery_status,
            'si_no'=>$request->si_no,
            'si_date'=>$request->si_date,
        ]);

        bidding_collection_details::create([
            'bidding_form_id' => $forms->id,
            'collection_status'=>$request->collection_status,
            'cr_no'=>$request->cr_no,
            'date_collected'=>$request->date_collected,
            'bank_name'=>$request->bank_name,
            'deposit_date'=>$request->deposit_date,
        ]);

        return redirect()->route('details');
    }

    public function delete(bidding_forms $form){

        $form->delete();

        return redirect('/details');

    }

    public function whole($form){
        $sample = bidding_forms::with('bidding_item')->findOrFail($form);
        return view('whole', compact('sample'));
    }

    
    public function update($id, Request $request){
        try {
            // Your update logic...
        } catch (\Exception $e) {
            // Log the error or handle it in a way that makes sense for your application
            session()->flash('error', 'An error occurred while updating the bidding form.');
            return redirect()->back();
        }

        $form = bidding_forms::findOrFail($id);
        
        // $data = request()->all();
        // dd($request->all());
        
        $form->update([
            'solicitation_no' => $request->solicitation_no,
            'project_name' => $request->project_name,
            'project_ref_no' => $request->ref_no,
            'bid_mode' => $request->bid_mode,
            'date_posted' => $request->date_posted,
            'bid_amount' => $request->bid_amount,
            'day_delivery_no' => $request->day_delivery_no,
            // Add other fields as needed
        ]);
    
        $customerDetails = $form->customer_details; // Assuming you have a relationship defined in your bidding_forms model
        $customerDetails->update([
            'executive_name' => $request->executive_name,
            'procuring_entity' => $request->procuring_entity,
            'address' => $request->address,
            'mobile_no' => $request->mobile_no,
            'email' => $request->email,
            'bac_secretariat' => $request->bac_secretariat,
            'bac_chair' => $request->bac_chair,
            // Add other fields as needed
        ]);
        
        $collectionDetails = $form->collection_details; // Assuming you have a relationship defined in your bidding_forms model
        $collectionDetails->update([
            'collection_status'=>$request->collection_status,
            'cr_no'=>$request->cr_no,
            'date_collected'=>$request->date_collected,
            'bank_name'=>$request->bank_name,
            'deposit_date'=>$request->deposit_date,
            // Add other fields as needed
        ]);

        $contractDelivery = $form->contract_delivery; // Assuming you have a relationship defined in your bidding_forms model
        $contractDelivery->update([
            'performance_type'=>$request->performance_type,
            'purchase_order_no'=>$request->purchase_order_no,
            'date_received'=>$request->date_received,
            'proceed_receive_date'=>$request->proceed_receive_date,
            'dr_no'=>$request->dr_no,
            'delivery_date'=>$request->delivery_date,
            'delivery_status'=>$request->delivery_status,
            'si_no'=>$request->si_no,
            'si_date'=>$request->si_date,
        ]);
        
        $bidding_items = bidding_items::where('bidding_form_id', $form->id)->get();
        
        foreach($bidding_items as $item){
            // $item = trim($item, '"');
            $item->delete();
        }

        if($request->input('added_items')){
            $addedItemsInputValue = $request->input('added_items');
            $myArray = explode(',', $addedItemsInputValue);  
            // dd('Deleted items', $bidding_items);

            // // After creating new items
            // dd('Created items', $myArray);
            foreach($myArray as $item){
                // $item = trim($item, '"');
                bidding_items::create([
                    'bidding_form_id' => $form->id,
                    'added_items' => $item,
                    // 'item_status' => $request->item_status,
                    // 'other_companies_book' => $request->other_companies_book,
                    // Add other fields as needed
                ]);
            }
        }

        $biddingTimeline = $form->bidding_timeline; // Assuming you have a relationship defined in your bidding_forms model
        $biddingTimeline->update([
            'prebid_conference_date'=>$request->prebid_conference_date,
            'bid_bullet_no'=>$request->bid_bullet_no,
            'bid_opening_date'=>$request->bid_opening_date,
            'award_received_date'=>$request->award_received_date,
        ]);

        session()->flash('success', 'Bidding Form updated successfully');

        return redirect('/details');
    }
}
