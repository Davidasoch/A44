<?php

use Illuminate\Database\Seeder;
use App\Car;
use App\User;
use App\Product;

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

    private $arrayProducts = array(
        array(
            'name' => 'Camiseta',
            'description' => 'Camiseta estandar de algodon',
            'price' => 10,
            'image' => "image Camiseta",
            'quantity' => 1
        ),        
        array(
            'name' => 'Camiseta franela',
            'description' => 'Camiseta de franela',
            'price' => 20,
            'image' => "image Camiseta franela",
            'quantity' => 1
        ),  
        array(
            'name' => 'Camisa',
            'description' => 'Camiseta de botones',
            'price' => 15,
            'image' => "image Camisa",
            'quantity' => 1
        )
    );

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //self::seedUsers();
        //$this->command->info('Tabla users inicializada con datos!');

        self::seedProducts();
        $this->command->info('Tabla products inicializada con datos!');
    }

    public function seedProducts(){
        DB::table('products')->delete();

        foreach( $this->arrayProducts as $product ) {
            $p = new Product;
            $p->name = $product['name'];
            $p->description = $product['description'];
            $p->price = $product['price'];
            $p->image = $product['image'];
            $p->quantity = $product['quantity'];
            $p->save();
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
