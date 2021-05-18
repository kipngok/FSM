<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey_Taking extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','U','C','E','Tr','Tt','D','R','survey_id','section_id','category_id'];
    public function category(){
    	return $this->hasOne('App/Models/Category','id','category_id')->withDefault(['name'=>'Deleted']);
    }
      public function section(){
    	return $this->hasOne('App/Models/Section','id','section_id')->withDefault(['name'=>'Deleted']);
    }
      public function survey(){
    	return $this->hasOne('App/Models/Survey','id','survey_id')->withDefault(['name'=>'Deleted']);
    }
}
