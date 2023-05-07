<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DriveService;

class DriveController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(DriveService $driveService) {
        $this->driveService = $driveService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('drive.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('drive.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Redirect
     */
    public function store(Request $request) {
        // validate data
        $validated = $request->validate([
            'title' => 'required|max:255',
            'sub_title' => 'required|max:20',
            'time' => 'required|max:10',
            'description' => 'required',
        ]);

        $this->driveService->store($validated);

        return redirect('/drive')->with('success', 'Drive Added Successfully!');
    }

    /**
     * Show the form for editing the profile resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $drive = $this->driveService->find($id);
        return view('drive.edit', compact('drive'));
    }

    /**
     * Update the profile resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        // validate data
        $validated = $request->validate([
            'title' => 'required|max:255',
            'sub_title' => 'required|max:20',
            'time' => 'required|max:10',
            'description' => 'required',
        ]);

        // save data
        $this->driveService->update($validated, $id);

        return redirect('/drive')->with('success', 'Drive Updated Successfully!');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $this->driveService->destroy($id);
        return redirect('/drive')->with('success', 'Drive Deleted Successfully!');
    }

    /**
     * Generate datatable
     *
     * @return Datatable
     */
    public function datatable() {
        return $this->driveService->makeDatatable();
    }
}
