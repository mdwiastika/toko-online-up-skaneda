<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kategori_produk',
        'slug_kategori_produk',
    ];
    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
