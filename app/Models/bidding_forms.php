<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bidding_forms extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function customer_details(){
        return $this->hasOne(bidding_customer_details::class, 'bidding_form_id', 'id');
    }
    public function collection_details(){
        return $this->hasOne(bidding_collection_details::class, 'bidding_form_id', 'id');
    }
    public function contract_delivery(){
        return $this->hasOne(bidding_contract_delivery::class, 'bidding_form_id', 'id');
    }
    public function bidding_item(){
        return $this->hasMany(bidding_items::class, 'bidding_form_id', 'id');
    }
    public function bidding_timeline(){
        return $this->hasOne(bidding_timeline::class, 'bidding_form_id', 'id');
    }
}
