<?php

//Command: php artisan make:model District 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Region;

class District extends Model
{
    use HasFactory;


    protected $table = 'districts';
    
  
    /**
     * The attributes that are mass assignable.
     * Set up the field that will be inserted in DB.
     * @var array<string, string>
     */
    protected $fillable = [ 
        'name',
        'region_id'
    ];

    /**
     * Set up District-Region Relationship.
     * One District Belong to One Region.
     */
    
    public function region(){

        return $this->belongsTo(Region::class, 'region_id');
    }
}
