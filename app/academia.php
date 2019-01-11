<?php

namespace SIDTT;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class academia extends Model implements AuthenticatableContract
{
    use Authenticatable;
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $table = 'academia';
    protected $primaryKey = 'idAcademia';
    protected $fillable = ['Academia'];
}
