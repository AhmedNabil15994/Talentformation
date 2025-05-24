<?php namespace App\Http\Controllers;

class ProductControllers extends Controller {

    use \TraitsFunc;
 
    public function index(){
        return view('Frontend::Products.index');
    }

    public function solutions(){
        return view('Frontend::Products.solutions');
    }

    public function human_capital(){
        return view('Frontend::Products.human_capital');
    }

    public function measurement_systems(){
        return view('Frontend::Products.measurement_systems');
    }
}
