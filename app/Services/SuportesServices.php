<?php

    namespace App\Services;

use App\DTO\createSuportDTO;
use App\DTO\UpdateSuportDTO;
use App\Repositories\SuportRepositoryInterface;
use Illuminate\Support\Arr;
use stdClass;

    class SuporteServices
    {
        //construtor
        public function __construct(
            //atributo
            protected SuportRepositoryInterface $repository,
        )
        {

        }
        //funcao que ira mostrar todos os valores e que vai retornar um array
        public function getAll(string $filter = null):array{
           return $this->repository->getAll($filter);
        }
        public function findOne(string $id): stdClass|null
        {
            return $this->repository->findOne($id);
        }
        public function new( createSuportDTO $dto):stdClass
        {
           return $this->repository->new($dto);
        }
        public function update(
            UpdateSuportDTO $dto
        ):stdClass|null
        {
           return $this->repository->update($dto);
        }
        public function apagar(string $id):void
        {
            $this->repository->apagar($id);
        }

    }
