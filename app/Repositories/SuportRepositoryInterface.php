<?php

namespace App\Repositories;

use App\DTO\{
    createSuportDTO,
    UpdateSuportDTO};
use stdClass;

interface SuportRepositoryInterface
{
    public function getAll(string $filter=null):array;
    public function findOne(string $id):stdClass|null;
    public function apagar(string $id):void;
    public function new(createSuportDTO $dto):stdClass;
    public function Update(UpdateSuportDTO $dto):stdClass|null;
}
