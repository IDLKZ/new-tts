<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServiceSecondRequest;
use App\Http\Requests\UpdateServiceSecondRequest;
use App\Models\ServiceSecond;
use App\Repositories\ServiceSecondRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ServiceSecondController extends AppBaseController
{
    /** @var  ServiceSecondRepository */
    private $serviceSecondRepository;

    public function __construct(ServiceSecondRepository $serviceSecondRepo)
    {
        $this->serviceSecondRepository = $serviceSecondRepo;
    }

    /**
     * Display a listing of the ServiceSecond.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $serviceSeconds = $this->serviceSecondRepository->all();

        return view('service_seconds.index')
            ->with('serviceSeconds', $serviceSeconds);
    }

    /**
     * Show the form for creating a new ServiceSecond.
     *
     * @return Response
     */
    public function create()
    {
        return view('service_seconds.create');
    }

    /**
     * Store a newly created ServiceSecond in storage.
     *
     * @param CreateServiceSecondRequest $request
     *
     * @return Response
     */
    public function store(CreateServiceSecondRequest $request)
    {
        $input = ServiceSecond::add($request->all());
        $input->uploadImage($request['icon']);

        Flash::success('Service Second saved successfully.');

        return redirect(route('serviceSeconds.index'));
    }

    /**
     * Display the specified ServiceSecond.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $serviceSecond = $this->serviceSecondRepository->find($id);

        if (empty($serviceSecond)) {
            Flash::error('Service Second not found');

            return redirect(route('serviceSeconds.index'));
        }

        return view('service_seconds.show')->with('serviceSecond', $serviceSecond);
    }

    /**
     * Show the form for editing the specified ServiceSecond.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $serviceSecond = $this->serviceSecondRepository->find($id);

        if (empty($serviceSecond)) {
            Flash::error('Service Second not found');

            return redirect(route('serviceSeconds.index'));
        }

        return view('service_seconds.edit')->with('serviceSecond', $serviceSecond);
    }

    /**
     * Update the specified ServiceSecond in storage.
     *
     * @param int $id
     * @param UpdateServiceSecondRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServiceSecondRequest $request)
    {
        $serviceSecond = ServiceSecond::find($id);

        if (empty($serviceSecond)) {
            Flash::error('Service Second not found');

            return redirect(route('serviceSeconds.index'));
        }

        $serviceSecond->edit($request->all());
        $serviceSecond->uploadImage($request['icon']);

        Flash::success('Service Second updated successfully.');

        return redirect(route('serviceSeconds.index'));
    }

    /**
     * Remove the specified ServiceSecond from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $serviceSecond = ServiceSecond::find($id);

        if (empty($serviceSecond)) {
            Flash::error('Service Second not found');

            return redirect(route('serviceSeconds.index'));
        }

        $serviceSecond->remove();

        Flash::success('Service Second deleted successfully.');

        return redirect(route('serviceSeconds.index'));
    }
}
