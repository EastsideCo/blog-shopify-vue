<?php

namespace App\Http\Controllers;

class ShopifyController extends Controller
{
    public function index()
    {
        $shopifyApi = app('ShopifyAPI');
        $products = $shopifyApi->call('GET', '/admin/products.json');
        return view('index', (array) $products);
    }

    public function vueapp()
    {
        return view('vueapp');
    }

    public function products() {
        $shopifyApi = app('ShopifyAPI');
        $products = $shopifyApi->call('GET', '/admin/products.json');

        return (array) $products;
    }
}
