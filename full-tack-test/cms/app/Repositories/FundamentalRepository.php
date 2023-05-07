<?php

namespace App\Repositories;

use App\Models\Fundamental;
use App\Contracts\FundamentalRepositoryInterface;

class FundamentalRepository extends BaseRepository implements FundamentalRepositoryInterface
{

    /**
     * Create a new model instance.
     *
     * @param Fundamental $model
     * @return void
     */
    public function __construct(Fundamental $model) {
        parent::__construct($model);
    }

    /**
     * Get all instance.
     * To address n + 1 problem, introduce eager-loading and fetch fundamentals.
     *
     * @return Collection
     */
    public function all() {
        return $this->model->get();
    }
    
    /**
     * Update a resource in database.
     * 
     * @param Array $data
     * @return App\Fundamental
     */
    public function update(array $fundamental, $id) {
        $model = $this->model->find($id);

        $model->name = $fundamental['name'];
        $model->content = $fundamental['content'];

        $model->save();
        
        return $this->model;
    }
}