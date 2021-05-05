<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wood;

class WoodController extends Controller
{
    public function woodList(){
        $data['woods'] = Wood::paginate(10);
        return view('woods.wood', $data);
    }

    public function woodform(){
        return view('woods.woodform');
    }

    public function woodsave(Request $request){
        $woodData = request()->except('_token');
        Wood::insert($woodData);
        
    }

    public function delete($id){
        Wood::destroy($id);
        return back()->with('usuarioeliminado','Usuario eliminado');
    }
}
