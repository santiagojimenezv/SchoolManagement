<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        
        'first_names',
        'last_names',
        'phone',
        'document_type',
        'document_number',
        'date_of_birth',
        'place_of_birth',
        'father_name',
        'father_document_number',
        'father_phone',
        'father_occupation',
        'mother_name',
        'mother_document_number',
        'mother_phone',
        'mother_occupation',
        'guardian_name',
        'guardian_document_number',
        'guardian_phone',
        'guardian_occupation',
        'address',
        'healthcare_provider',
        'blood_type',
        'medical_conditions',
        'allergies',
        'medications',
        'ethnic_group',
        'status'

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [        
        'date_of_birth' => 'date',
    ];


    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function age()
    {        
        // Obtén la fecha de nacimiento del estudiante.
        $fechaNacimiento = new Carbon($this->date_of_birth);

        // Calcula la diferencia entre la fecha actual y la fecha de nacimiento.
        return $fechaNacimiento->diffInYears(Carbon::now());
    }

    public function measurements()
    {
        return $this->hasMany(Measurements::class);
    }

    public function fullName()
    {
        return $this->first_names . ' ' . $this->last_names;
    }
}
