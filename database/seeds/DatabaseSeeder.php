<?php

use Illuminate\Database\Seeder;
use App\Car;
use App\User;

class DatabaseSeeder extends Seeder
{

    private $arrayCars = array(
        array(
            'make' => 'Fiat',
            'model' => '500',
            'produced_on' => '2001-01-06'
        ),        
        array(
            'make' => 'Citroen',
            'model' => 'C200',
            'produced_on' => '2004-01-06'
        )
    );

    private $arrayUsers = array(
        array(
            'name' => 'Neo',
            'password' => '1234',
            'email' => 'neo@matrix.org',
            'email_verified_at' => null
        ),        
        array(
            'name' => 'Morfeo',
            'password' => '5678', 
            'email' => 'morfeo@matrix.org',
            'email_verified_at' => null
        )
    );

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        self::seedCardb();
        $this->command->info('Tabla cars inicializada con datos!');

        self::seedUsers();
        $this->command->info('Tabla users inicializada con datos!');
    }

    public function seedCardb(){
        DB::table('cars')->delete();

        foreach( $this->arrayCars as $car ) {
            $c = new Car;
            $c->make = $car['make'];
            $c->model = $car['model'];
            $c->produced_on = $car['produced_on'];
            $c->save();
          }
    }

    public function seedUsers(){
        DB::table('users')->delete();
        
        foreach( $this->arrayUsers as $user ) {
            $c = new User;
            $c->name = $user['name'];
            $c->password = bcrypt($user['password']);
            $c->email = $user['email'];
            $c->save();
          }
    }

}
