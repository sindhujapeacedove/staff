<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
     protected $fillable = ['representive_id','client_id','location','date_of_meeting','time','discussion','current_work','sell_our_destination','throughput'];

 }
