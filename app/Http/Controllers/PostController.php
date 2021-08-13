<?php

namespace App\Http\Controllers;

use DB; 


class PostController extends Controller {

    /* The Function to post*/ 
    public function functionName($vars){


        //To inspect a variable from the DB use "dump and die" dd($someVar)
        /* Also to work with DB object we create eloquent models to fetch from DB */ 

        $post = DB::table('table') -> where()



    }
}