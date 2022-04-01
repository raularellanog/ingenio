<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AlertController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function contact(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|',
            ]);
            if ($validator->fails()) {
                return redirect('/')
                            ->withErrors($validator);
            }
            $alert = new AlertController();
            $email = $alert->contact($request);
            return response(['status' => 200]);
        } catch (\Throwable $th) {
            return response(['status' => 400]);
        }
    }
}
