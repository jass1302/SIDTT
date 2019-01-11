<?php

namespace SIDTT;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class especialidad extends Model implements AuthenticatableContract
{
    use SoftDeletes;
    use Authenticatable;
    protected $connection = 'mysql';
    protected $table = 'Especialidad';
    protected $primaryKey = 'idEspecialidad';
    protected $fillable = ['especialidad','curriculum_idCurriculum'];
}
