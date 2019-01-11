<?php
namespace SIDTT;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class alumno extends Model implements AuthenticatableContract
{
    use SoftDeletes;
    use Authenticatable;
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $table = 'alumnos';
    protected $primaryKey = 'idUsuario';
    protected $fillable = ['boleta','idProyecto'];
}