<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table='cities_lite';
protected $primaryKey='city_id';
    public function districts($value='')
    {
      // code...
      return $this->hasMany(District::class,'city_id','city_id');
    }
}
