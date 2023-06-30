<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//agregamos el modelo de permisos de spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
                 //Operaciones sobre tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
                //Operacions sobre tabla blogs
            'ver-blog',
            'crear-blog',
            'editar-blog',
            'borrar-blog',
                //Operacions sobre tabla banner
            'ver-banner',
            'crear-banner',
            'editar-banner',
            'borrar-banner',
                 //Operacions sobre tabla marca
            'ver-marca',
            'crear-marca',
            'editar-marca',
            'borrar-marca',
                  //Operacions sobre tabla producto
            'ver-producto',
            'crear-producto',
            'editar-producto',
            'borrar-producto'
        ];

        foreach($permisos as $permiso) {
            Permission::create(['name'=>$permiso]);
        }
    }
}
