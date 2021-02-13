<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;



class Pages extends BaseController
{
    public function __construct()
    {
        helper('date');
    }

    public function index()
    {
        $data = [
            'title' => 'Home | MyWebApps',
            'tes' => [
                'date'  => date('d-m-Y'),
                'time'  => date('H:i:s')
            ]
        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About | MyWebApps'
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Us | MyWebApps',
            'alamat' => [
                [
                    'tipe'      => 'Rumah',
                    'alamat'    => 'Jl. Dewi Sartika (Komp. Pemda Blok A) Kontrakan H.Ukar No.11A',
                    'kota'      => 'Bekasi',
                    'kec'       => 'Jatiasih',
                    'kel'       => 'Jatiasih',
                    'kodepos'   => '17423',
                    'provinsi'  => 'JawaBarat'
                ],
                [
                    'tipe'      => 'Kantor',
                    'alamat'    => 'Jl. Raya Fatmawati No.7',
                    'kota'      => 'Jakarta',
                    'kec'       => 'Gandaria Utara',
                    'kel'       => 'Kebayoran Baru',
                    'kodepos'   => '12140',
                    'provinsi'  => 'Jakarta Selatan'

                ]
            ]
        ];
        return view('pages/contact', $data);
    }

    //--------------------------------------------------------------------

}