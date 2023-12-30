<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatBaca extends Model
{
    use HasFactory;

    protected $table = 'riwayat_baca';

    protected $fillable = ['id_user', 'id_novel', 'halaman_terakhir'];

    public function novel()
    {
        return $this->belongsTo(Novel::class, 'id_novel');
    }
}
