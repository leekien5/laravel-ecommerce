<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $fillable = ['category_id', 'title', 'desc', 'price', 'stock', 'subcategory_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    public function productImage(){
        return $this->hasMany(ProductImage::class);
    }

    use HasFactory;
}
