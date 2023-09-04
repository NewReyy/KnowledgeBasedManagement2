<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Complain extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Complain'
    ];
    
    return view('admin/complain', $data);
  }
  
  public function reply()
  {
    $data = [
      'title' => 'Reply Complain'
    ];
    
    return view('admin/replycomplain', $data);
  }

}