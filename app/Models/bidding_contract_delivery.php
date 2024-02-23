<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bidding_contract_delivery extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function contract_delivery(){
        return $this->belongsTo(bidding_forms::class);
    }
}
