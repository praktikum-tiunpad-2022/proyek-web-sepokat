<?php

namespace App\Controllers;

use App\Models\Sepatu;

class Home extends BaseController
{
    public function index()
    {
        $productModel = new Sepatu();
        $product = $productModel->asArray()->paginate(4);

        return view('landing_page', [
            'product' => $product,
        ]);
    }
}
