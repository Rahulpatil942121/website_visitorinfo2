<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productname extends Model
{
    use HasFactory;

     protected $table = "productnames";

    protected $fillable = [
    	'id','product_name','portal_id','product_link','product_desc','comp_name',
    	'share_link','visitor','status',    	 
    ];

    public function portal()
    {
        return $this->belongsTo(Protalname::class,'portal_id','id');
    }

    public function company()
    {
        return $this->belongsTo(Companyname::class,'comp_name','id');
    }
}
