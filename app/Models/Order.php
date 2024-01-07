<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "tb_order";
    protected $primaryKey = "id_order";

    protected $guarded = [];

    protected $fillabe = ['id_order','id_customer', 'id_produk', 'quantity', 'orderdate'];
    public static $rules = ['id_customer'=>'required',];

    protected $casts = [];
    
    public function Customer()
    { 
        return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
    }

    public function Produk()
    { 
        return $this->belongsTo(Produk::class, 'id_produk', 'id_customer'); 
    }
}
