<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemodelNavesRequest;
use App\Http\Requests\UpdatemodelNavesRequest;
use App\Repositories\modelNavesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class modelNavesController extends AppBaseController
{
    /** @var  modelNavesRepository */
    private $modelNavesRepository;

    public function __construct(modelNavesRepository $modelNavesRepo)
    {
        $this->modelNavesRepository = $modelNavesRepo;
    }

    /**
     * Display a listing of the modelNaves.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->modelNavesRepository->pushCriteria(new RequestCriteria($request));
        $modelNaves = $this->modelNavesRepository->all();

        return view('model_naves.index')
            ->with('modelNaves', $modelNaves);
    }

    /**
     * Show the form for creating a new modelNaves.
     *
     * @return Response
     */
    public function create()
    {
        return view('model_naves.create');
    }

    /**
     * Store a newly created modelNaves in storage.
     *
     * @param CreatemodelNavesRequest $request
     *
     * @return Response
     */
    public function store(CreatemodelNavesRequest $request)
    {
        $input = $request->all();

        $modelNaves = $this->modelNavesRepository->create($input);

        Flash::success('Model Naves saved successfully.');

        return redirect(route('modelNaves.index'));
    }

    /**
     * Display the specified modelNaves.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $modelNaves = $this->modelNavesRepository->findWithoutFail($id);

        if (empty($modelNaves)) {
            Flash::error('Model Naves not found');

            return redirect(route('modelNaves.index'));
        }

        return view('model_naves.show')->with('modelNaves', $modelNaves);
    }

    /**
     * Show the form for editing the specified modelNaves.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $modelNaves = $this->modelNavesRepository->findWithoutFail($id);

        if (empty($modelNaves)) {
            Flash::error('Model Naves not found');

            return redirect(route('modelNaves.index'));
        }

        return view('model_naves.edit')->with('modelNaves', $modelNaves);
    }

    /**
     * Update the specified modelNaves in storage.
     *
     * @param  int              $id
     * @param UpdatemodelNavesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemodelNavesRequest $request)
    {
        $modelNaves = $this->modelNavesRepository->findWithoutFail($id);

        if (empty($modelNaves)) {
            Flash::error('Model Naves not found');

            return redirect(route('modelNaves.index'));
        }

        $modelNaves = $this->modelNavesRepository->update($request->all(), $id);

        Flash::success('Model Naves updated successfully.');

        return redirect(route('modelNaves.index'));
    }

    /**
     * Remove the specified modelNaves from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $modelNaves = $this->modelNavesRepository->findWithoutFail($id);

        if (empty($modelNaves)) {
            Flash::error('Model Naves not found');

            return redirect(route('modelNaves.index'));
        }

        $this->modelNavesRepository->delete($id);

        Flash::success('Model Naves deleted successfully.');

        return redirect(route('modelNaves.index'));
    }
}
