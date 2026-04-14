<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller 
{
    public function getData() 
    {
        $dataCustomer = [
            ['id'=>1, 'nama'=>'Andi', 'alamat'=>'Batam', 'no_hp'=>'08123456789'],
            ['id'=>2, 'nama'=>'Budi', 'alamat'=>'Jakarta', 'no_hp'=>'08234567890'],
            ['id'=>3, 'nama'=>'Arnoll', 'alamat'=>'Batam', 'no_hp'=>'08234562530'],
            ['id'=>4, 'nama'=>'Wulan', 'alamat'=>'Batam', 'no_hp'=>'08234561105'],
            ['id'=>5, 'nama'=>'Naila', 'alamat'=>'Batam', 'no_hp'=>'08234561116'],
        ];
        return $dataCustomer;
    }

    public function tampilkan() {
        $data = $this->getData();
        return view('list_customer', compact('data'));
    }
}