<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Product;

class HomeController extends Controller {
  public function index() {
    $data = [
      'menus' => Menu::all(),
      'products' => Product::all(),
    ];

    return view('Home/index', $data);
  }
}
