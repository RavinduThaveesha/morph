<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProfileService;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @param ProfileService $profileService
     * @return void
     */
    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->profileService->find($id);
    }

    /**
     * Show the form for editing the profile resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = $this->profileService->find($id);
        return view('profile.edit', compact('profile'));
    }

    /**
     * Update the profile resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate data
        $validated = $request->validate([
            'name' => 'required|max:255',
            'biography' => 'nullable',
            'facebook' => 'nullable|url',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'instagram' => 'nullable|url',
        ]);

        // save data
        $this->profileService->update($validated, $id);

        return redirect()->back()->with('success', 'Profile Updated Successfully!');
    }

}