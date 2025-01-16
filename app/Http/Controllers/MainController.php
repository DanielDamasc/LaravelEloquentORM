<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\TesteModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        // Apresentando como um array de objetos.
        // $results = $this->arrayOfObject(Product::all()->toArray());

        // Buscar produtos ordenados alfabeticamente.
        // $results = Product::orderBy('product_name')->get()->toArray();

        // Buscar produtos com cláusula where.
        // $results = Product::where('price', '>=', 70)->get()->toArray();

        // Buscar o primeiro produto, se não tiver, retorna array vazio.
        // $results = Product::where('price', '>=', 120)->firstOr(function(){
        //     echo "Não existe!";
        // });

        // $this->showData($results);



        // Insert new product at database
        // $new_product = new Product();
        // $new_product->product_name = "Novo Produto";
        // $new_product->price = 50;
        // $new_product->save();

        // 2nd way to insert (with created_at e updated_at)
        // Product::create([
        //     "product_name" => "Novo Produto 2",
        //     "price" => 60
        // ]);



        // UPDATE data of a product
        // $product = Product::find(10);
        // $product->product_name = 'PRODUTO ALTERADO';
        // $product->price = 10;
        // $product->save();

        // UPDATE of many products
        // Product::where('id', '<=', 10)
        //         ->update([
        //             'price' => 150
        //         ]);

        // update or create
        Product::updateOrCreate(
            ['product_name' => 'Abacaxi'],
            ['price' => 25]
        );
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
