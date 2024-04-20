<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AshuliaStock extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get all of the productStock for the AshuliaStock
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStock(): HasMany
    {
        return $this->hasMany(ProductAshuliaStock::class);
    }
}
