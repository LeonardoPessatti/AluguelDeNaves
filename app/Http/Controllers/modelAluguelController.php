<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemodelAluguelRequest;
use App\Http\Requests\UpdatemodelAluguelRequest;
use App\Repositories\modelAluguelRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class modelAluguelController extends AppBaseController
{
    /** @var  modelAluguelRepository */
    private $modelAluguelRepository;

    public function __construct(modelAluguelRepository $modelAluguelRepo)
    {
        $this->modelAluguelRepository = $modelAluguelRepo;
    }

    /**
     * Display a listing of the modelAluguel.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->modelAluguelRepository->pushCriteria(new RequestCriteria($request));
        $modelAluguels = $this->modelAluguelRepository->all();

        return view('model_aluguels.index')
            ->with('modelAluguels', $modelAluguels);
    }

    /**
     * Show the form for creating a new modelAluguel.
     *
     * @return Response
     */
    public function create()
    {
        return view('model_aluguels.create');
    }

    /**
     * Store a newly created modelAluguel in storage.
     *
     * @param CreatemodelAluguelRequest $request
     *
     * @return Response
     */
    public function store(CreatemodelAluguelRequest $request)
    {
        $input = $request->all();

        $modelAluguel = $this->modelAluguelRepository->create($input);

        Flash::success('Model Aluguel saved successfully.');

        return redirect(route('modelAluguels.index'));
    }

    /**
     * Display the specified modelAluguel.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $modelAluguel = $this->modelAluguelRepository->findWithoutFail($id);

        if (empty($modelAluguel)) {
            Flash::error('Model Aluguel not found');

            return redirect(route('modelAluguels.index'));
        }

        return view('model_aluguels.show')->with('modelAluguel', $modelAluguel);
    }

    /**
     * Show the form for editing the specified modelAluguel.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $modelAluguel = $this->modelAluguelRepository->findWithoutFail($id);

        if (empty($modelAluguel)) {
            Flash::error('Model Aluguel not found');

            return redirect(route('modelAluguels.index'));
        }

        return view('model_aluguels.edit')->with('modelAluguel', $modelAluguel);
    }

    /**
     * Update the specified modelAluguel in storage.
     *
     * @param  int              $id
     * @param UpdatemodelAluguelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemodelAluguelRequest $request)
    {
        $modelAluguel = $this->modelAluguelRepository->findWithoutFail($id);

        if (empty($modelAluguel)) {
            Flash::error('Model Aluguel not found');

            return redirect(route('modelAluguels.index'));
        }

        $modelAluguel = $this->modelAluguelRepository->update($request->all(), $id);

        Flash::success('Model Aluguel updated successfully.');

        return redirect(route('modelAluguels.index'));
    }

    /**
     * Remove the specified modelAluguel from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $modelAluguel = $this->modelAluguelRepository->findWithoutFail($id);

        if (empty($modelAluguel)) {
            Flash::error('Model Aluguel not found');

            return redirect(route('modelAluguels.index'));
        }

        $this->modelAluguelRepository->delete($id);

        Flash::success('Model Aluguel deleted successfully.');

        return redirect(route('modelAluguels.index'));
    }
}
