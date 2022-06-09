<?php

use App\Cliente;
use Illuminate\Database\Seeder;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clienti = [
            [
                'name' => 'Luca',
                'surname' => 'Pocchione',
                'phone' => '3889098187',
                'mail' => 'lucapocchione@mail.it',
                'descrizione_lavoro' => 'Luca',
            ],
            [
                'name' => 'Oscar',
                'surname' => 'Rafone',
                'phone' => '3889098187',
                'mail' => 'oscarrafone@mail.it',
                'descrizione_lavoro' => 'Oscar',
            ],
            [
                'name' => 'Santo',
                'surname' => 'Campo',
                'phone' => '3889098187',
                'mail' => 'camposanto@mail.it',
                'descrizione_lavoro' => 'Luca',
            ],
        ];
        foreach ($clienti as $cliente) {
            $new_cliente = new Cliente();
            $new_cliente->name = $cliente['name'];
            $new_cliente->surname = $cliente['surname'];
            $new_cliente->phone = $cliente['phone'];
            $new_cliente->mail = $cliente['mail'];
            $new_cliente->descrizione_lavoro = $cliente['descrizione_lavoro'];
            $new_cliente->save();
        }
    }
    
}
