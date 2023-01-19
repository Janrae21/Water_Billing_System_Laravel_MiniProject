<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable = [

        'date',
        'name',
        'address',
        'email',
        'user_id'

    ];

    use HasFactory;

    public function BillCollector(){

        return $this->hasMany(BillCollector::class);
    }


    public function Bills(){

        return $this->belongsToMany(Bill::class)->withPivot('sub_total');

    }






}
