<?php

namespace App\Services;

use App\Contracts\ProfileRepositoryInterface;

class ProfileService {

    /**
     * The repository instance.
     * 
     */
    protected $repository;

     /**
     * Create a new service instance.
     * 
     * @param EloquentRepository $repository
     * @return void
     */
    public function __construct(ProfileRepositoryInterface $repository) {
        $this->repository = $repository;
    }

    public function first() {
        return $this->repository->first();
    }

    public function find($id) {
        return $this->repository->find($id);
    }

    public function update($user, $id) {
        return $this->repository->update($user, $id);
    }
}