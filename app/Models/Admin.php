<?php

//Command: php artisan make:model Admin

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Property;
use App\Models\Blog;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = 'admins';

    protected $table = 'admins';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


     /**
     * et up Admin/Author - Property  Relationship.
     * One User will have many properties.
     */

    public function properties()
    {
        return $this->hasMany(Property::class, 'owner_id');
    }

     /**
     * Set up Admin/Author- Blogs  Relationship.
     * One User will have many properties.
     */

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'author_id');
    }
}

