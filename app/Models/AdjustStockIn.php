<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdjustStockIn extends Model
{
    protected $table = 'adjuststockins'; // optional if your table name is correct

    protected $fillable = [
        'date',
        'product_id',
        'quantity',
        'unit_price',
        'remark'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
