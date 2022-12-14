<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot(['quantity', 'unitPrice', 'price']);
    }
}
