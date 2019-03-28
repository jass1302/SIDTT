<?php

namespace SIDTT;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class proyectos extends Eloquent implements AuthenticatableContract
{
    use SoftDeletes;
    use Authenticatable;
    protected $connection = 'mongodb';
    protected $collection = 'proyectos';
    public $timestamps = true;
    protected $dates = ['deleted_at'];
    protected $fillable = 
    ['institucion','unidad','objetivo','i1','i2','i3','as1','as2','as3','rev1','rev2','rev3']; 

    //pendientes-> 
    //linea de investigacion, documentos
}
