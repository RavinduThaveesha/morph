<?php

namespace App\Contracts;

interface ProfileRepositoryInterface {
    public function update(array $user, $id);
}