<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Suport;
use Illuminate\Http\Request;

class SuportController extends Controller
{

    public function index(){
        $suports= Suport::all();
        return view('Admin/Suport/index',compact('suports'));
    }

    public function create(){
       return view('Admin/Suport/create');
    }

    public function store(Request $request,Suport $suport){
        $data=$request->all();
        $data['status']='activo';
        $suport->create($data);
       //depois de enviar os dados na base de dados ela é renderizado na pagina que
       // ira pegar todos os valores
       // da base de dados
       return redirect()->route('suport.index');
    }
    public function show(string|int $id){

        if (!$valor=Suport::find($id)) {
            # para poder retornar da pagina de onde veio
            return redirect()->back();
        }
            # code...
            return view('Admin/Suport/show', compact('valor'));
    }
}
