<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ContactsController extends BaseController
{
    public function index() {

        return view('contacts');//view-имя blade файла, var_name-имя переменной нашего класса

    }
}










