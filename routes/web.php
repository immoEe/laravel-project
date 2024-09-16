<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('main');
});

// Route::get('/array', function () {
//   $products = [
//       ['id' => 1, 'title' => 'Яблоко', 'price' => 500, 'path' => 'img/1.jpg'],
//       ['id' => 2, 'title' => 'Банан', 'price' => 600, 'path' => 'img/2.jpg'],
//       ['id' => 3, 'title' => 'Апельсин', 'price' => 700, 'path' => 'img/3.jpg'],
//       ['id' => 4, 'title' => 'Смородина', 'price' => 800, 'path' => 'img/4.jpg'],
//       ['id' => 5, 'title' => 'Ананас', 'price' => 900, 'path' => 'img/5.jpg'],
//       ['id' => 6, 'title' => 'Киви', 'price' => 1000, 'path' => 'img/6.jpg'],
//       ['id' => 7, 'title' => 'Фейхоа', 'price' => 1100, 'path' => 'img/7.jpg'],
//       ['id' => 8, 'title' => 'Груши', 'price' => 1200, 'path' => 'img/8.jpg'],
//       ['id' => 9, 'title' => 'Сливы', 'price' => 1300, 'path' => 'img/9.jpg'],
//       ['id' => 10, 'title' => 'Персики', 'price' => 1400, 'path' => 'img/10.jpg'],
//   ];

//   return view('array', ['products' => $products]);
// });

Route::get('/array', [ProductController::class, 'showProducts']);
