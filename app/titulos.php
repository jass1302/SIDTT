<?php

namespace SIDTT;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class titulos extends Model implements AuthenticatableContract
{
    use SoftDeletes;
    use Authenticatable;
    protected $connection = 'mysql';
    protected $table = 'Titulos';
    protected $primaryKey = 'idTitulos';
    protected $fillable = ['cedula','titulo','siglas','curriculum_idCurriculum'];
}