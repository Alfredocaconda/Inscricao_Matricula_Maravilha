<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSuportRequest;
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

    public function store(StoreSuportRequest $request,Suport $suport){
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
    #funcao para editar os atributos
    public function edit(Suport $suport, string|int $id){
        //condicao para saber se existe um id e depois retornar a opagina de onde veio.
        if(!$valor=$suport->where('id',$id)->first()){
            return redirect()->back();
        }
        return view('Admin/Suport/edit', compact('valor'));

    }

    public function update(Request $request,Suport $suport, string $id){

        if(!$valor=$suport->find($id)){
            return back();
        }
        $valor->objectivo=$request->objectivo;
        $valor->informacoes=$request->informacoes;
        $valor->save();
        /*$valor->update($request->only([
            'objectivo',
            'informacoes'
        ]));*/
        return redirect()->route('suport.index');
    }
    public function apagar(int $id){
       if(!$valor=Suport::find($id)){
        return back();
    }
    $valor->delete();
    return redirect()->route('suport.index');
    }
}
