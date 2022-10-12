<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'kategori_produk_id',
        'nama_produk',
        'slug_produk',
        'stok_produk',
        'berat_produk',
        'harga_produk',
        'deskripsi_produk',
        'foto_produk',
    ];
    // protected $primaryKey = 'id_pro';
    public function kategori()
    {
        return $this->belongsTo(KategoriProduk::class, 'kategori_produk_id');
    }
}
