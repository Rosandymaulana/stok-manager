<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TypeProduct;
use App\Models\Transactions;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    // protected $primarykey = 'product_ID';
    protected $primaryKey = 'product_ID';

    // Mass Assigment
    // Memfilter column yang boleh di input atau tidak
    protected $fillable = [
        'product_ID',
        'product_name',
        'buy_rate',
        'type',
        'initial_quantity',
        'description',
        'image'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function dt_type()
    {
        return $this->belongsTo(TypeProduct::class, "type");
    }

    // public function transactions()
    // {
    //     return $this->morphToMany(Transactions::class, 'translable');
    // }
}
