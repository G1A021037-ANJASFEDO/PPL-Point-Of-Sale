<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PenjualanBarang extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'penjualan_barangs';
    protected $primaryKey = 'id_penjualan_barang';
    protected $guarded = [];

    protected $fillable = [
        'id_penjualan',
        'id_barang',
        'id_user',
        'jumlah',
        'total_harga',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }
}
