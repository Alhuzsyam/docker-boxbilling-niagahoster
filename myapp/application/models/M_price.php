<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_price extends CI_Model
{

    public function get_price()
    {
        $data = array(
            "0" => array(
                "nama" => "Bayi",
                "harga" => "19.900",
                "promo" => "14.900"
            ),
            "1" => array(
                "nama" => "Pelajar",
                "harga" => "45.900",
                "promo" => "23.450"
            ),
            "2" => array(
                "nama" => "Personal",
                "harga" => "58.900",
                "promo" => "38.900"
            ),
            "3" => array(
                "nama" => "Bisnis",
                "harga" => "109.900",
                "promo" => "65.900"
            ),
        );
        return $data;
    }
}
