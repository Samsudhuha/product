<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'product_categories_id', 'nama', 'image'
    ];

    public function kategori()
    {
        return $this->hasOne(ProductCategory::class, 'id', 'product_categories_id');
    }
}
