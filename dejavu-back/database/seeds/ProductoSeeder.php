<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(
            [
                [
                    'name' => 'CervezaModelo',
                    'precio' => 45.99,
                    'status' => 'activo',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ],
                [
                    'name' => 'Taco arrachera',
                    'precio' => 25.00,
                    'status' => 'activo',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ],
                [
                    'name' => 'Orden de alitas',
                    'precio' => 90.00,
                    'status' => 'activo',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ],
                [
                    'name' => 'Orden papas gajo',
                    'precio' => 60.00,
                    'status' => 'activo',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ],
                [
                    'name' => 'Tequila centenario plata',
                    'precio' => 75.00,
                    'status' => 'activo',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ],
                [
                    'name' => 'Carajillo',
                    'precio' => 140.00,
                    'status' => 'activo',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ],
                [
                    'name' => 'Molcajete',
                    'precio' => 200.00,
                    'status' => 'activo',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ],
                [
                    'name' => 'Dedos de queso',
                    'precio' => 45.99,
                    'status' => 'activo',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ],
                [
                    'name' => 'Refresco',
                    'precio' => 25.00,
                    'status' => 'activo',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ],
                [
                    'name' => 'Cerveza corona',
                    'precio' => 30.00,
                    'status' => 'activo',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ],


            ]
        );
    }
}

