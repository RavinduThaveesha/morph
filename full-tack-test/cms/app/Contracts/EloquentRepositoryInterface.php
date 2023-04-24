<?php

namespace App\Contracts;

interface EloquentRepositoryInterface {

    public function all();

    public function first();

    public function find($id);

    public function create(array $data);

    public function destroy($id);
}

