<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bidding_items extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function bidding_items(){
        return $this->belongsTo(bidding_forms::class);
    }
    // protected $casts = [
    //     'is_admin' => 'boolean',
    //     'added_items' => 'array',
    // ];
}
