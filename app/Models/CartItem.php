<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CartItem extends Model
{
    use HasFactory;

    protected $primaryKey = 'cart_item_id';

    protected $fillable = [
        'cart_id',
        'variation_id',
        'qty'
    ];

    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class, 'cart_id', 'cart_id');
    }

    public function variation(): BelongsTo
    {
        return $this->belongsTo(ProductVariation::class, 'variation_id', 'variation_id');
    }
}
