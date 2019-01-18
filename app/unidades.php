<?php
namespace SIDTT;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class unidades extends Model implements AuthenticatableContract
{
    use SoftDeletes;
    use Authenticatable;
    protected $connection = 'mysql';
    protected $table = 'unidad_aprendizaje';
    public $timestamps = true;
    protected $dates = ['fecha_ini,fecha_fin,deleted_at'];
    protected $primaryKey = 'idUnidad_Aprendizaje';
    protected $fillable = 
    ['unidad','grupo','periodo','d_titular']; //Los proyectos van a guardar el id de la unidad a que pertenezcan
}
