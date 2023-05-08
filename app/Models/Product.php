<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'fabric_type_id',
        'name',
        'color',
        'color_code',
        'description',
        'image',
        'quantity_kg',
    ];

    public function fabricType()
    {
        return $this->belongsTo(FabricType::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
