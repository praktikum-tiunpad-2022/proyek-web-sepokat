<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Order;
use App\Models\Sepatu;

class SepatuController extends BaseController
{
    public function index()
    {
        $productModel = new Sepatu();
        $product = $productModel->findAll();

        return view('produk/index', [
            'product' => $product,
        ]);
    }

    public function productByID($id = NULL)
    {
        $productModel = new Sepatu();
        $product = $productModel->where('id', $id)->first();

        return view('produk/detail', [
            'product' => $product,
        ]);
    }

    public function order($id)
    {
        $orderMethod = new Order();
        $order = [
            'motode_pembayaran' => $this->request->getPost('metode_pembayaran'),
            'tanggal' => $this->request->getPost('tanggal'),
            'id_user' => session()->get('id'),
            'id_sepatu' => $id,
        ];

        // dd($order);
        $orderMethod->insert($order);

        return redirect()->to('/product');
    }
}
