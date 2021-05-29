<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServiceOneRequest;
use App\Http\Requests\UpdateServiceOneRequest;
use App\Models\ServiceOne;
use App\Repositories\ServiceOneRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ServiceOneController extends AppBaseController
{
    /** @var  ServiceOneRepository */
    private $serviceOneRepository;

    public function __construct(ServiceOneRepository $serviceOneRepo)
    {
        $this->serviceOneRepository = $serviceOneRepo;
    }

    /**
     * Display a listing of the ServiceOne.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $serviceOnes = $this->serviceOneRepository->all();

        return view('service_ones.index')
            ->with('serviceOnes', $serviceOnes);
    }

    /**
     * Show the form for creating a new ServiceOne.
     *
     * @return Response
     */
    public function create()
    {
        return view('service_ones.create');
    }

    /**
     * Store a newly created ServiceOne in storage.
     *
     * @param CreateServiceOneRequest $request
     *
     * @return Response
     */
    public function store(CreateServiceOneRequest $request)
    {
        $input = ServiceOne::add($request->all());
        $input->uploadImage($request['icon']);

        Flash::success('Service One saved successfully.');

        return redirect(route('serviceOnes.index'));
    }

    /**
     * Display the specified ServiceOne.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $serviceOne = $this->serviceOneRepository->find($id);

        if (empty($serviceOne)) {
            Flash::error('Service One not found');

            return redirect(route('serviceOnes.index'));
        }

        return view('service_ones.show')->with('serviceOne', $serviceOne);
    }

    /**
     * Show the form for editing the specified ServiceOne.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $serviceOne = $this->serviceOneRepository->find($id);

        if (empty($serviceOne)) {
            Flash::error('Service One not found');

            return redirect(route('serviceOnes.index'));
        }

        return view('service_ones.edit')->with('serviceOne', $serviceOne);
    }

    /**
     * Update the specified ServiceOne in storage.
     *
     * @param int $id
     * @param UpdateServiceOneRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServiceOneRequest $request)
    {
        $serviceOne = ServiceOne::find($id);

        if (empty($serviceOne)) {
            Flash::error('Service One not found');

            return redirect(route('serviceOnes.index'));
        }

        $serviceOne->edit($request->all());
        $serviceOne->uploadImage($request['icon']);

        Flash::success('Service One updated successfully.');

        return redirect(route('serviceOnes.index'));
    }

    /**
     * Remove the specified ServiceOne from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $serviceOne = ServiceOne::find($id);

        if (empty($serviceOne)) {
            Flash::error('Service One not found');

            return redirect(route('serviceOnes.index'));
        }

        $serviceOne->remove();

        Flash::success('Service One deleted successfully.');

        return redirect(route('serviceOnes.index'));
    }
}
