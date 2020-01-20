<?php
namespace App\Helper;

use Illuminate\Support\Facades\Session;

class sepetHelper
{
    static function add($id, $fiyat, $image, $name)
    {
        $sepet = Session::get('basket');
        $array = [
            'id' => $id,
            'fiyat' => $fiyat,
            'image' => $image,
            'name' => $name
        ];
        Session::put('basket.'.rand(1,9000),$array);
    }

    static function remove($id)
    {
        Session::forget('basket.'.$id);
    }

    static function countData()
    {
        return count(Session::get('basket'));
    }
    static function allList()
    {
        $x = Session::get('basket');
        return $x;
    }

    static function totalPrice()
    {
        $data = self::allList();
        return collect($data)->sum('fiyat');
    }
}