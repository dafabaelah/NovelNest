<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    use HasFactory;

    protected $fillable = ['nama_novel', 'gambar_novel', 'deskripsi_novel', 'total_view_novel', 'total_like_novel', 'id_user', 'id_kategori', 'jumlah_halaman_novel'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function category()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
