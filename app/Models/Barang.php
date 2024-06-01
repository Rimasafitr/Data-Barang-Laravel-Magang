<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'namabarang',
        'kategoribarang',
        'hargabarang',
        'stok',
        'tanggalmasuk',
        'foto',
    ];

    public function kategori()
    {
        return $this->hasOne(Kategori::class);
    }
}
