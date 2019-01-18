<?php

use Illuminate\Database\Seeder;
use \SIDTT\usuarios;
use \SIDTT\docente;
use Faker\Factory as Faker;
class usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
    	$faker = Faker::create();
        for($i=0;$i < 70; $i++) { 
        $boleta = mt_rand(intval(1000000000),intval(9999999999));
        $uap = mt_rand(intval(1),intval(2));
    	$usuario = new usuarios();
        $alumno = new alumno();
        $usuario->tipo = 'docente';
        $usuario->nombre = $faker->name;
        $usuario->ape_pat = $faker->lastName;
        $usuario->ape_mat = $faker->lastName;
        $usuario->email = $faker->email;
        $usuario->password = bcrypt('012345');
        $usuario->created_at = \Carbon\Carbon::now();
        $usuario->save();
        $docente->idUsuario = $usuario->idUsuario;
        $docente->numerodet = $boleta.'';
        $docente->Academia_idAcademia = $uap.'';
        $docente->curriculum_idCurriculum = null;
        $docente->save();
        } 
    }
}
