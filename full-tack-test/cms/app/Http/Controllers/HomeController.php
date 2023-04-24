<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProfileService;
use App\Services\FundamentalService;
use App\Services\DriveService;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProfileService $profileService, FundamentalService $fundamentalService, DriveService $driveService) {
        $this->profileService = $profileService;
        $this->fundamentalService = $fundamentalService;
        $this->driveService = $driveService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        // get user profile
        $profile =  $this->profileService->find(1);

        // get fundamentals
        $fundamentals =  $this->fundamentalService->all();

        // get fundamentals
        $drives =  $this->driveService->all();

        $data = [
            'profile' => [
                'name' => $profile->name,
                'biography' => $profile->biography,
                'twitter' => $profile->twitter,
                'facebook' => $profile->facebook,
                'linkedin' => $profile->linkedin,
                'instagram' => $profile->instagram
            ],
            'fundamentals' => $fundamentals,
            'drives' => $drives
        ];

        return view('welcome', compact('data'));
    }
}
