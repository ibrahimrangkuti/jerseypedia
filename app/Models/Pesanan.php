<?php

namespace App\Models;

use App\Models\User;
use App\Models\PesananDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pesanan extends Model
{
    use HasFactory;

    public function pesanan_detail()
    {
        return $this->hasMany(PesananDetail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
