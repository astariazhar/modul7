<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    use HasFactory;
    protected $table        = "barang";
    protected $primaryKey   = "id_barang";
    protected $fillable     = ['id_barang','kode_barang','nama','harga','deskripsi'];
}