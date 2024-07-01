<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'supplier_id',
        'product_sku'
    ];

    public function supplier() {
        return $this->belongsTo(Supplier::class)->select('id', 'name');
    }
}
