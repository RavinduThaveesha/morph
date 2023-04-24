<?php

namespace App\Repositories;

use App\Models\User;
use App\Contracts\ProfileRepositoryInterface;

class ProfileRepository extends BaseRepository implements ProfileRepositoryInterface
{

    /**
     * Create a new model instance.
     *
     * @param User $model
     * @return void
     */
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    /**
     * Update a profile in database.
     * 
     * @param Array $data
     * @return App\User
     */
    public function update(array $user, $id)
    {
        $profile = $this->model->find($id);

        $profile->name = $user['name'];
        $profile->biography = $user['biography'];
        $profile->facebook = $user['facebook'];
        $profile->twitter = $user['twitter'];
        $profile->linkedin = $user['linkedin'];
        $profile->instagram = $user['instagram'];

        $profile->save();
        
        return $this->model;
    }

}