<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
  public function getData()
{
    $data = [
        [
            "id" => 1,
            "nama" => "Order Laptop",
            "tanggal" => "2026-04-15",
            "jumlah" => 2,
            "status" => "Selesai"
        ],
        [
            "id" => 2,
            "nama" => "Order HP",
            "tanggal" => "2026-04-16",
            "jumlah" => 1,
            "status" => "Proses"
        ],
        [
            "id" => 3,
            "nama" => "Order Monitor",
            "tanggal" => "2026-04-17",
            "jumlah" => 3,
            "status" => "Pending"
        ],
    ];

    return $data;
}
    public function tampilkan()
    {
        $data = $this->getData();
        return view('order', ['data' => $data]);
    }
}