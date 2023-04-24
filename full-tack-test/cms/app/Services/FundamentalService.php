<?php

namespace App\Services;

use App\Contracts\FundamentalRepositoryInterface;
use Yajra\DataTables\DataTables;

class FundamentalService {

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
    public function __construct(FundamentalRepositoryInterface $repository) {
        $this->repository = $repository;
    }

    /**
     * Get model by id.
     * 
     * @param $id
     * @return Model
     */
    public function find($id) {
        return $this->repository->find($id);
    }

    /**
     * Get all instance.
     * To address n + 1 problem, introduce eager-loading and fetch frogs with types.
     *
     * @return Collection
     */
    public function all() {
        return $this->repository->all();
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  Array $data
     * @return Model
     */
    public function store($data)
    {
        return $this->repository->create($data);
    }

    /**
     * Update newly created resource in storage.
     *
     * @param  Array $data
     * @return Model
     */
    public function update($data, $id) {
        return $this->repository->update($data, $id);
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param Int $id
     * @return App\Fundamental
     */
    public function destroy($id) {
        return $this->repository->destroy($id);
    }

   /**
     * Generate datatable
     *
     * @return Datatable
     */
    public function makeDatatable() {
        $data = $this->repository->all();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('name', function($row) {
                return $row->name;
            })
            ->addColumn('action', function($row) {
                $data = [];
                $data['edit'] = [
                    'url' => route('fundamental.edit', ['id' => $row->id]),
                    'method' => 'GET',
                    'label' => 'Edit',
                    'btn' => 'btn-info'
                ];
                $data['delete'] = [
                    'url' => route('fundamental.destroy', ['id' => $row->id]),
                    'method' => 'DELETE',
                    'label' => 'Remove',
                    'btn' => 'btn-danger'
                ];
                
                return view('fundamental._datatableActions', compact('data'));
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}