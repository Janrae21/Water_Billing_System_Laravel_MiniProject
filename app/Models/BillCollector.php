<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillCollector extends Model
{

    protected $fillable = [

        'name',
        'company name',
        'client_id'


    ];
    use HasFactory;
}
