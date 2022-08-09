<?php

//Command: php artisan make:model ProperySubCategory

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PropertyCategory;

class ProperySubCategory extends Model
{
    use HasFactory;

    protected $table = 'property_sub_categories';

    /**
     * The attributes that are mass assignable.
     * Set up the field that will be inserted in DB.
     * @var array<string, string>
     */
    protected $fillable = ['title','slug','category_id'];
      
    /**
     * Set up ProperySubCategory-PropertyCategory Relationship.
     * One ProperySubCategory Belong to One PropertyCategory.
     */   
    public function propertyCategory(){

        return $this->belongsTo(PropertyCategory::class, 'category_id');
    }
}
