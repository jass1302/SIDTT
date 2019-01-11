<?php

namespace SIDTT;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class asesor extends Model implements AuthenticatableContract
{   
	use SoftDeletes;
    use Authenticatable;
    protected $connection = 'mysql';
    protected $table = 'asesor';
    protected $primaryKey = 'idUsuario';
    protected $guarded = ['Proyecto_idProyecto'];
}
