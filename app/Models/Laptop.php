<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;
    protected $table = 'inventaris_laptop';
    protected $fillable = ['laptop_urut','laptop_unique','laptop_name','laptop_user','laptop_old_number','laptop_number','laptop_serial_number','laptop_price','laptop_status','laptop_condition','laptop_processor','laptop_vga','laptop_ram','laptop_hdd','laptop_ssd','laptop_os','laptop_buy_date'];

}
