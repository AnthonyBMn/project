<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre', 'Apellido','Email', 'Matr', 'Sem', 'Carr'];

    public function teachers(){
        return $this->belongsToMany(Teacher::class, 'alumnos_teachers');
    }

    // protected $fillable = ['teacher_id', 'Nombre', 'Email', 'Matr', 'Sem', 'Carr'];

    // public function teacher(){
    //     return $this->hasOne('App\Models\Teacher', 'id', 'teacher_id');
    // }
}
