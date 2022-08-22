<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitorinfo extends Model
{
    use HasFactory;

    protected $table = "visitorinfos";

     protected $fillable = [
    	'id','product_id','country_name','regionName','city',
    	'ip','lat','lon','zipcode','network_name',    	 
    ];

    public function product()
    {
        return $this->belongsTo(Productname::class,'product_id','id');
    }
    
}
