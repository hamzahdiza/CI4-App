<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Home | Web Diza'
    ];
    return view('pages/home', $data);
  }


  public function about()
  {
    $data = [
      'title' => 'About Me'
    ];
    return view('pages/about', $data);
  }

  public function contact()
  {
    $data = [
      'title' => 'Contact Us',

      'alamat' => [
        [
          'tipe' => 'Rumah',
          'alamat' => 'Jl. delima No. 10',
          'kota' => 'Bekasi',
        ],
        [
          'tipe' => 'Kantor',
          'alamat' => 'Jl. Setiabudi No. 199',
          'kota' => 'Bekasi'
        ]
      ]
    ];

    return view('pages/contact', $data);
  }
}
