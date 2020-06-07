<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;


class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert(
            [
                [
                    'name' => 'Arely',
                    'apellidos' => 'Solis',
                    'email' => 'Arely_soli@outlook.com',
                    'cel' => '4495145638',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ],
                [
                    'name' => 'Guadalupe',
                    'apellidos' => 'Guerrero',
                    'email' => 'Guadalupe.guerrero@outlook.com',
                    'cel' => '4498765412',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ],
                [
                    'name' => 'Brayan',
                    'apellidos' => 'Solis',
                    'email' => 'Brayan.solis@outlook.com',
                    'cel' => '4499887612',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ],
                [
                    'name' => 'Alberto',
                    'apellidos' => 'Medrano',
                    'email' => 'Alebrto_mee@outlook.com',
                    'cel' => '4495554309',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ],
                [
                    'name' => 'Juana',
                    'apellidos' => 'Guerrero',
                    'email' => 'guerrero.juana@outlook.com',
                    'cel' => '4495876598',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ],
                [
                    'name' => 'Maria',
                    'apellidos' => 'Alonso',
                    'email' => 'Alonso43@outlook.com',
                    'cel' => '4491223422',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ],
                [
                    'name' => 'Nelly',
                    'apellidos' => 'Solis',
                    'email' => 'Nelly7687@outlook.com',
                    'cel' => '4499998755',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ],
                [
                    'name' => 'Alessandra',
                    'apellidos' => 'Ruiz',
                    'email' => 'RuizAle@outlook.com',
                    'cel' => '4495154312',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ],
                [
                    'name' => 'Alejandr',
                    'apellidos' => 'Solis',
                    'email' => 'Alejandroo@outlook.com',
                    'cel' => '4496541211',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ],
                [
                    'name' => 'Antonio',
                    'apellidos' => 'Ruiza',
                    'email' => 'Ruizalaex@outlook.com',
                    'cel' => '4495786518',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ],


            ]);

    }
}
