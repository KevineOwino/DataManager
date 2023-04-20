<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table ='clients';

    protected $fillable = [

       'name',
       'host_country_id',
       'staff_code',
       'organization',
       'r_number',
       'index_number', 
       'email',



    ];




}
