<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellido', 'email', 'matr', 'carr', 'area'];

    public function alumnos(){
        return $this->belongsToMany(Alumno::class, 'alumnos_teachers');
    }

    //Relacion uno a muchos
    // public function alumnos(){
    //     return $this->hasMany('App\Models\Alumno', 'teacher_id', 'id');
    // }
}
