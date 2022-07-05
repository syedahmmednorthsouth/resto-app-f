<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{


    protected $fillable = [ 'first_name', 'last_name', 'email','tel_num', 'table_id','guest_number', 'res_date'];
    use HasFactory;
}
