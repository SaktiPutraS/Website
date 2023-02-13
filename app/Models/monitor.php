<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monitor extends Model
{
    use HasFactory;
    protected $table = 'inventaris_monitor';
    protected $fillable = ['monitor_unique','monitor_old_number','monitor_number','monitor_urut','monitor_name','monitor_user','monitor_location','monitor_size','monitor_energy','monitor_price','monitor_condition','monitor_buy_date','created_at'];

}
