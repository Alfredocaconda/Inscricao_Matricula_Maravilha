<?php
namespace App\DTO;

use App\Http\Requests\StoreSuportRequest;

 class createSuportDTO{

    public function __construct(
        public string $objectivo,
        public string $status,
        public string $informacoes,
    ){

    }
    public static function makeFormRequest(StoreSuportRequest $request) :self
    {
        //onde irei passar os dados nesta classe
        return new self(
            $request->objectivo,
            'activo',
            $request->informacoes
        );
    }
 }
