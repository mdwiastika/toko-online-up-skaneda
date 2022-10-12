<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_transaksi',
        'kode_invoice',
        'tanggal_transaksi',
        'status_transaksi',
        'user_id',
        'provinsi_id',
        'kabupaten_id',
        'kode_pos',
        'alamat_lengkap',
        'ekspedisi',
        'catatan_pembeli',
    ];
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function transaksi_detail()
    {
        return $this->hasMany(TransaksiDetail::class, 'transaksi_id');
    }
    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'provinsi_id', 'id_provinsi');
    }
    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class, 'kabupaten_id', 'id_kabupaten');
    }
}
