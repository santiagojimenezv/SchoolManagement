<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'professor_id'

    ];

    public function profesor()
    {
        return $this->belongsTo(User::class, 'professor_id', 'id');
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'group_id', 'id');
    }
}
