<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'tolerance',
        'carrier',
        'service',
        'api_key',
        'password',
        'inventory_endpoint',
        'po_endpoint',
        'shipment_endpoint',
        'order_status_endpoint',
    ];
}
