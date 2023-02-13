<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'duta_karyawan';
    protected $fillable = ['k_nik','k_nama','k_divisi'];
}
