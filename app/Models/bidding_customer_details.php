<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bidding_customer_details extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function customer_deta(){
        return $this->belongsTo(bidding_forms::class);
    }
}
