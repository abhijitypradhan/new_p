<?php

namespace App\Http\Controllers;

use App\Models\ajax;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function form_submit(Request $request)
    {
          $model = new Ajax();
          $model->name=$request->post('name');
          $model->email=$request->post('email');
          $model->save();
 return ["msg"=>"Data Successfully Inserted"];

    }
}
