<?php

class UserTableSeeder extends Seeder {
    public function run(){
        User::create(array(
            'email'     => 'admin@admin.com',
            'name'=> 'Administrator',
            'color' => 'skin_blue',
            'foto' => 'perfil.jpg',
            'foto1' => 'slide1.jpg',
            'foto2' => 'slide2.jpg',
            'foto3' => 'slide3.jpg',
            'id_unidad' => '15',
            'password' => Hash::make('admin') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        ));
    }
}

?>
