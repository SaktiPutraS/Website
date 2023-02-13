<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PC extends Model
{
    use HasFactory;
    protected $table = 'inventaris_pc';
    protected $fillable = ['pc_urut','pc_unique','pc_user','pc_old_number','pc_number','pc_price','pc_location','pc_condition','pc_mainboard','pc_processor','pc_vga','pc_ram','pc_hdd','pc_ssd','pc_os','pc_buy_date'];


}
