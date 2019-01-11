<?php

namespace SIDTT;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class protocolo extends Model implements AuthenticatableContract
{
    use SoftDeletes;
    use Authenticatable;
    protected $connection = 'mysql';
    protected $table = 'Protocolo';
    protected $primaryKey = 'idProtocolo';
    protected $fillable = 
    	  [
    	  	'areaUbi',
    	  	'linea',
    	  	'resumen',
    	  	'palabrasClave',
    	  	'abstract',
    	  	'keywords',
    	  	'definicionProblema',
    	  	'edoArte',
    	  	'descripcion',
    	  	'objetivoGeneral',
    	  	'objetivosParticulares',
    	  	'justificacion',
    	  	'hipotesis',
    	  	'marcoTeorico',
    	  	'marcoMetodologico',
    	  	'viabilidad',
    	  	'recursosHumanos',
    	  	'equipo',
    	  	'instalaciones',
    	  	'costo',
    	  	'cronograma',
    	  	'productoResultados',
    	  	'fuentesConsulta',
    	  	'Proyecto_idProyecto'
    	  ];
}