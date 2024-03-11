<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        //BY DEFAULT
        'email',
        'password',

        //CUSTOM
        'first_names',
        'last_names',        
        'document_type',
        'document_number',        
        'status',
        'subject',
        'position',
        'message',
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
        'password' => 'hashed',
        'date_of_birth' => 'date',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'author_id');
    }

    public function direccionGrupo()
    {
        return $this->hasOne(Group::class, 'professor_id', 'id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function fullName()
    {
        return $this->first_names . ' ' . $this->last_names;
    }
}