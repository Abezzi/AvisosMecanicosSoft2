<?php

use Illuminate\Database\Seeder;
use App\User;
use App\rol_user;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call(UserTableSeeder::class);

        $path = 'database/seeds/scripts/unidades.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Unidades table seeded!');

        $path = 'database/seeds/scripts/roles.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Roles table seeded!');

        $path = 'database/seeds/scripts/registros.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Registros table seeded!');

        $path = 'database/seeds/scripts/procesos.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Procesos table seeded!');

        $path = 'database/seeds/scripts/ambitos.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Ambitos table seeded!');

        $path = 'database/seeds/scripts/ambitos_geo.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Ambitos geograficos table seeded!');

        $path = 'database/seeds/scripts/roles_adm.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Ambitos geograficos table seeded!');

        $path = 'database/seeds/scripts/criterios.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Criterios table seeded!');

        DB::table('unidad_us')->insert(
                ['id_unidad' => 1, 'id_usuario' => 1]
            );

    }

}

class UserTableSeeder extends Seeder {
    public function run(){
        User::create(array(
            'email'     => 'admin@admin.com',
            'name'=> 'Administrator',
            'color' => 'skin_blue',
            'foto' => 'user2-160x160.png',
            'foto1' => 'slide1.jpg',
            'foto2' => 'slide2.jpg',
            'foto3' => 'slide3.jpg',
            'id_unidad' => '15',
            'password' => Hash::make('admin') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        ));

        


    }
}
