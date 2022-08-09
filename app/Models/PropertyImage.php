<?php

//Command: php artisan make:model PropertyImage

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Property;

class PropertyImage extends Model
{
    use HasFactory;

    protected $table = 'property_images';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'image',
        'property_id',
        'size',
        'extension',
        'featured',
    ];


     /**
     * Set up PropertyImage - Property  Relationship.
     * One PropertyImage will belong property.
     */
    public function property()
    {
        return $this->belongsTo(Property::class,'property_id');
    }

}
