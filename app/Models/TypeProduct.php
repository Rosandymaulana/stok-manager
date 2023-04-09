<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class TypeProduct extends Model
{
    use HasFactory;
    protected $table = 'type_products';
    protected $fillable = [
        'name'
    ];

    public function dt_product()
    {
        return $this->hasMany(Product::class, "id");
    }
}
