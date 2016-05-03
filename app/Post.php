<?php

namespace Demo;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'content'];

//    public static function getLatestBlogs()
//    {
//        return self::orderBy('updated_at', 'desc')->paginate();
//    }

    protected $dates = ['published_at'];
//    public function setTitleAttribute($value)
//    {
//        $this->attributes['title'] = $value;
//        if (! $this->exists) {
//            $this->attributes['slug'] = str_slug($value);
//        }
//    }
    public static function createBlog($user, $blogFields)
    {
        $blog = new self($blogFields);
        $blog->author_id = $user->id;
        $blog->save();
        return $blog;
    }
}
