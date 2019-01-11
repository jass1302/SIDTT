<?php

namespace SIDTT;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class proyecto extends Model implements AuthenticatableContract
{
    use SoftDeletes;
    use Authenticatable;
    protected $connection = 'mysql';
    protected $table = 'Proyecto';
    protected $primaryKey = 'idProyecto';
    protected $fillable = ['institucion','unidad','titulo','objetivo','estado','unidad_Aprendizaje_idUnidad_Aprendizaje'];
}