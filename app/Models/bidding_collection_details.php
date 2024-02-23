<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bidding_collection_details extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function collection_details(){
        return $this->belongsTo(bidding_forms::class);
    }
}
