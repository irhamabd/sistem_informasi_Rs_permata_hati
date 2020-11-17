<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tagihan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_bill',
        'id_pasien',
        'biaya_dokter',
        'biaya_kaar',
        'biaya_lab',
    ];
}
