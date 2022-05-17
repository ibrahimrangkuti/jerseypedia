<?php

namespace App\Models;

use App\Models\Pesanan;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PesananDetail extends Model
{
    use HasFactory;

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
