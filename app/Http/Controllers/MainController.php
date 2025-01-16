<?php

namespace App\Http\Controllers;

use App\Models\Client;

class MainController extends Controller
{
    public function index()
    {
        echo "eloquent";
    }

    public function OneToOne()
    {
        // Buscar o telefone de um cliente
        // $cliente1 = Client::find(12)->phone;
        // echo "Telefone do cliente: " . $cliente1->phone_number;

        // Outro método 
        // $cliente2 = Client::with('phone')->find(12);
        // echo "Telefone do cliente2: " . $cliente2->phone->phone_number;

        // buscar todos os clientes e seus telefones
        // $clientes = Client::with('phone')->get();
        // foreach ($clientes as $cliente) {
        //     echo $cliente->client_name . ", fone: " . $cliente->phone->phone_number . '<br>';
        // }
    }

    public function OneToMany()
    {
        // Encontrar o id, o nome, e todos os telefones do cliente.
        $client1 = Client::find(10);
        $phones = $client1->phones;
        echo "Cliente: " . $client1->client_name . "<br>";
        echo "Telefones: <br>";
        foreach ($phones as $phone) {
            echo $phone->phone_number . "<br>";
        }
    }

    private function showData($data)
    {
        echo '<pre>';
        print_r($data);
    }

    private function arrayOfObject($data): Array
    {
        $tmp = [];
        foreach ($data as $key => $value) 
        {
            $tmp[] = (object) $value;
        }
        return $tmp;
    }
}
