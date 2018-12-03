<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemodelClientesRequest;
use App\Http\Requests\UpdatemodelClientesRequest;
use App\Repositories\modelClientesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class modelClientesController extends AppBaseController
{
    /** @var  modelClientesRepository */
    private $modelClientesRepository;

    public function __construct(modelClientesRepository $modelClientesRepo)
    {
        $this->modelClientesRepository = $modelClientesRepo;
    }

    /**
     * Display a listing of the modelClientes.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->modelClientesRepository->pushCriteria(new RequestCriteria($request));
        $modelClientes = $this->modelClientesRepository->all();

        return view('model_clientes.index')
            ->with('modelClientes', $modelClientes);
    }

    /**
     * Show the form for creating a new modelClientes.
     *
     * @return Response
     */
    public function create()
    {
        return view('model_clientes.create');
    }

    /**
     * Store a newly created modelClientes in storage.
     *
     * @param CreatemodelClientesRequest $request
     *
     * @return Response
     */
    public function store(CreatemodelClientesRequest $request)
    {
        $input = $request->all();

        $modelClientes = $this->modelClientesRepository->create($input);

        Flash::success('Model Clientes saved successfully.');

        return redirect(route('modelClientes.index'));
    }

    /**
     * Display the specified modelClientes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $modelClientes = $this->modelClientesRepository->findWithoutFail($id);

        if (empty($modelClientes)) {
            Flash::error('Model Clientes not found');

            return redirect(route('modelClientes.index'));
        }

        return view('model_clientes.show')->with('modelClientes', $modelClientes);
    }

    /**
     * Show the form for editing the specified modelClientes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $modelClientes = $this->modelClientesRepository->findWithoutFail($id);

        if (empty($modelClientes)) {
            Flash::error('Model Clientes not found');

            return redirect(route('modelClientes.index'));
        }

        return view('model_clientes.edit')->with('modelClientes', $modelClientes);
    }

    /**
     * Update the specified modelClientes in storage.
     *
     * @param  int              $id
     * @param UpdatemodelClientesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemodelClientesRequest $request)
    {
        $modelClientes = $this->modelClientesRepository->findWithoutFail($id);

        if (empty($modelClientes)) {
            Flash::error('Model Clientes not found');

            return redirect(route('modelClientes.index'));
        }

        $modelClientes = $this->modelClientesRepository->update($request->all(), $id);

        Flash::success('Model Clientes updated successfully.');

        return redirect(route('modelClientes.index'));
    }

    /**
     * Remove the specified modelClientes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $modelClientes = $this->modelClientesRepository->findWithoutFail($id);

        if (empty($modelClientes)) {
            Flash::error('Model Clientes not found');

            return redirect(route('modelClientes.index'));
        }

        $this->modelClientesRepository->delete($id);

        Flash::success('Model Clientes deleted successfully.');

        return redirect(route('modelClientes.index'));
    }
}
