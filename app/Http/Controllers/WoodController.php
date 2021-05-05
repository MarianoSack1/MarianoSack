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

    public function editform($id){
        $woods = Wood::findOrFail($id);
        return view('woods.editform',compact('woods'));
    }

    public function edit(Request $request,$id){
        $DataWood = request()->except((['_token','_method']));
        Wood::where('id','*',$id)->update($DataWood);
        return back()->with('usuarioModificado','Usuario Modificado');
    }
}
