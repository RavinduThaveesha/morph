<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProfileService;
use App\Services\FundamentalService;

class FundamentalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(FundamentalService $fundamentalService) {
        $this->fundamentalService = $fundamentalService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('fundamental.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('fundamental.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Redirect
     */
    public function store(Request $request)
    {
        // validate data
        $validated = $request->validate([
            'name' => 'required|max:255',
            'content' => 'required',
        ]);

        $this->fundamentalService->store($validated);

        return redirect('/fundamental')->with('success', 'Fundamental Added Successfully!');
    }

    /**
     * Show the form for editing the profile resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fundamental = $this->fundamentalService->find($id);
        return view('fundamental.edit', compact('fundamental'));
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
            'content' => 'required',
        ]);

        // save data
        $this->fundamentalService->update($validated, $id);

        return redirect('/fundamental')->with('success', 'Fundamental Updated Successfully!');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $this->fundamentalService->destroy($id);
        return redirect('/fundamental')->with('success', 'Fundamental Deleted Successfully!');
    }

    /**
     * Generate datatable
     *
     * @return Datatable
     */
    public function datatable() {
        return $this->fundamentalService->makeDatatable();
    }
}
