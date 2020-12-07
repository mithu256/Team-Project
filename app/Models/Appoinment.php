<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appoinment extends Model
{
    use HasFactory;
    protected $fillable = [
        'App_No', 'Pat_id','Doctor_ID','Rec_Nic','Doctor_Name','Booked_Date','Booked_time'
    ];
}
