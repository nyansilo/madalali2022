<?php


//Command: php artisan make:model BlogComment

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use GrahamCampbell\Markdown\Facades\Markdown;
use App\Models\Blog;
;

class BlogComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_name', 'author_email', 'author_url', 'body', 'blog_id'
    ];


    /**
     * Set up BlogComment - Blog Relationship.
     * One BlogComment Belong to One Blog.
     */
    public function blog()
    {
        return $this->belongsTo(Blog::class,'blog_id');
    }

    //===================== ACCESOR ATTRIBUTE FUNCTIONS START =======================


    /**
     * Accessor the way to display content in html/php page
     * you can call the accessor in html/php template by this eg: body_html
     * Then in the model you defined it by starting with get then BodyHtml in camelCase
     * followed by Attribute: eg
     * public function getBodyHtmlAttribute(){}
     */ 

    public function getDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function getBodyHtmlAttribute()
    {
        //return Markdown::convertToHtml(e($this->body));
    }


    //===================== OTHER FUNCTIONS START =======================
   
}
