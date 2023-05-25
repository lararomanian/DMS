<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Contracts\Repositories\SignerRepository;
use App\Http\Requests\Signer\{
    IndexRequest,
    CreateRequest,
    ShowRequest,
    UpdateRequest,
    DestroyRequest,
};

/**
 * Class SignersController.
 *
 * @package namespace App\Http\Controllers\Api;
 */
class SignersController extends Controller
{
    /**
     * @var SignerRepository
     */
    protected $repository;

    /**
     * SignersController constructor.
     *
     * @param SignerRepository $repository
     */
    public function __construct(SignerRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(IndexRequest $request)
    {
        $data = $this->repository->all();
        return $this->respond($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  $CLASS\CreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $data = $this->repository->create($request->all());
        return $this->respondCreated($data);
    }

    /**
     * Display the specified resource.

     * @param  $CLASS\ShowRequest $request
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(ShowRequest $request, $id)
    {
        $data = $this->repository->find($id);
        return $this->respond($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  $CLASS\UpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $data = $this->repository->update($request->all(), $id);
        return $this->respond($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $CLASS\DestroyRequest $request
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(DestroyRequest $request, $id)
    {
        $this->repository->delete($id);
        return $this->respondNoContent();
    }
}
