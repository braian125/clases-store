<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'url', 'price',
    ];

    public function invoices()
    {
        return $this->belongsToMany('App\Models\Invoice', 'invoice_products', 'product_id', 'invoice_id');
    }
}
