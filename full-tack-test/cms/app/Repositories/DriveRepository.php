<?php

namespace App\Repositories;

use App\Models\Drive;
use App\Contracts\DriveRepositoryInterface;

class DriveRepository extends BaseRepository implements DriveRepositoryInterface
{

    /**
     * Create a new model instance.
     *
     * @param Fundamental $model
     * @return void
     */
    public function __construct(Drive $model) {
        parent::__construct($model);
    }

    /**
     * Get all instance.
     * To address n + 1 problem, introduce eager-loading and fetch drives.
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
     * @return App\Drive
     */
    public function update(array $drive, $id)
    {
        $drive = $this->model->find($id);

        $drive->title = $drive['title'];
        $drive->sub_title = $drive['sub_title'];
        $drive->time = $drive['time'];
        $drive->description = $drive['description'];

        $drive->save();
        
        return $this->model;
    }
}