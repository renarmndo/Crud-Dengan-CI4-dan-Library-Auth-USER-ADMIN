<?php

namespace App\Controllers;

class User extends BaseController
{
  public function index(): string
  {
    //email = rendanihutagaol1234@gmail.com
    //pw = babas1234
    $data['title'] = 'Universitas Pamulang';
    return view('user/index', $data);
  }
  public function profil(): string
  {
    //email = rendanihutagaol1234@gmail.com
    //pw = babas1234
    $data['title'] = 'My Profil';
    return view('user/profil', $data);
  }
}
