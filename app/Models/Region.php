<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
  use HasFactory;
  protected $table='regions_lite';
  //  protected $fillable =[
  //   `boundaries`,
  //   `capital_city_id`,
  //   `center`,
  //   `code`,
  //   `name_ar`,
  //   `name_en`,
  //   `population`,
  //   `region_id`
  // ];
  protected $primaryKey='region_id';

public function cities(){
  return $this->hasMany(City::class,'region_id',`region_id`);
}
}
