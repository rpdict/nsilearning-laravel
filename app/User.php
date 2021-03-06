<?php

namespace Demo;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password', 'is_admin',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function usersCount()
    {
        return self::count();
    }

    public static function getRecentlyUsers()
    {
        return self::orderBy('updated_at', 'desc')->paginate(48);
    }

    public function user()
    {
        return $this->hasMany(Post::class);
    }

}
