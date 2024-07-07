<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductAttribute extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_id',
        'supplier_id',
        'part_id',
        'size',
        'color',
        'quantity'
    ];

    public function product() {
        return $this->belongsTo(Product::class)->select('id', 'name');
    }

    public function supplier() {
        return $this->belongsTo(Supplier::class)->select('id', 'name');
    }
}
