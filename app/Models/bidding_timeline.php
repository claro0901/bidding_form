<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bidding_timeline extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function bidding_timeline(){
        return $this->belongsTo(bidding_forms::class);
    }
}
