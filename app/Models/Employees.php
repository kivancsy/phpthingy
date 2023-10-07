<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $table = 'employees';


    public function getSector(){
        return $this->hasOne(Sector::class,'id','sector_id');
    }
}
