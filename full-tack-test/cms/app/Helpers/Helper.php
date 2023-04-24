<?php

namespace App\Helpers;

use App\Services\ProfileService;
use App\Contracts\ProfileRepositoryInterface;

class Helper {

    public static function get_profile($id = null) {
        $profileService = new ProfileService(new ProfileRepositoryInterface());

        if (!$id) {
            $profile = $profileService->first();
        } else {
            $profile = $profileService->find($id);
        }

        return $profile;
    }
}