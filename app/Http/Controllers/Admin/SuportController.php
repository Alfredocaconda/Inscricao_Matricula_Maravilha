<?php

namespace App\Http\Controllers\Admin;

use App\DTO\createSuportDTO;
use App\DTO\UpdateSuportDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSuportRequest;
use App\Models\Suport;
use App\Services\SuporteServices;
use Illuminate\Http\Request;

class SuportController extends Controller
{
    public function __construct(
        protected SuporteServices $service
    )
    {

    }
    public function index(Request $request){
        $suports= $this->service->getAll($request->filter);
        return view('Admin/Suport/index',compact('suports'));
    }

    public function create(){
       return view('Admin/Suport/create');
    }

    public function store(StoreSuportRequest $request,Suport $suport){
        /*$data=$request->validated();
        $data['status']='activo';
        $suport->create($data);
       //depois de enviar os dados na base de dados ela é renderizado na pagina que
       // ira pegar todos os valores
       // da base de dados*/
       $this->service->new(createSuportDTO::makeFormRequest($request));
       return redirect()->route('suport.index');
    }
    public function show(string $id){

        if (!$valor=$this->service->findOne($id)) {
            # para poder retornar da pagina de onde veio
            return redirect()->back();
        }
            # code...
            return view('Admin/Suport/show', compact('valor'));
    }
    #funcao para editar os atributos
    public function edit(string $id){
        //condicao para saber se existe um id e depois retornar a opagina de onde veio.
       // if(!$valor=$suport->where('id',$id)->first()){
        if(!$valor=$this->service->findOne($id)){
            return redirect()->back();
        }
        return view('Admin/Suport/edit', compact('valor'));

    }

    public function update(StoreSuportRequest $request,Suport $suport, string $id){

        /*if(!$valor=$suport->find($id)){
            return back();
        }
        $valor->objectivo=$request->objectivo;
        $valor->informacoes=$request->informacoes;
        $valor->save();
        $valor->update($request->validated());*/
       $suport= $this->service->update(UpdateSuportDTO::makeFormRequest($request) );
         # CONDICAO PARA SABER SE NAO ENCONTROU
       if (!$suport) {
           # code...
           return redirect()->back();
        }
        return redirect()->route('suport.index');
    }
    public function apagar(string $id){

    $valor=$this->service->apagar($id);
    return redirect()->route('suport.index');
    }
}
