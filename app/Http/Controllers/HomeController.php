<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
             $book = json_decode($json, true);
            
            function sortAlphabetically($a, $b){
                return strcmp($a['name'], $b['name']);
              }
                usort($book, 'sortAlphabetically');
                foreach ($book as $key ) {
                    echo '<br>'.$key['name']. '<br/>';
                }
        return view('home');
    }
}
