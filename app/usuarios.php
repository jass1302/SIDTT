<?php
namespace SIDTT;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
class usuarios extends Model implements AuthenticatableContract
{
	use SoftDeletes;
    use Authenticatable;
    protected $connection = 'mysql';
    protected $table = 'usuarios';
    protected $primaryKey = 'idUsuario';
    public $timestamps = true;
    protected $dates = ['deleted_at'];
    protected $fillable = ['nombre','ape_pat','ape_mat','tipo','firma_url'];
    protected $guarded = ['password','email'];

}
