<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMainBlockRequest;
use App\Http\Requests\UpdateMainBlockRequest;
use App\Models\MainBlock;
use App\Repositories\MainBlockRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MainBlockController extends AppBaseController
{
    /** @var  MainBlockRepository */
    private $mainBlockRepository;

    public function __construct(MainBlockRepository $mainBlockRepo)
    {
        $this->mainBlockRepository = $mainBlockRepo;
    }

    /**
     * Display a listing of the MainBlock.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mainBlocks = $this->mainBlockRepository->all();

        return view('main_blocks.index')
            ->with('mainBlocks', $mainBlocks);
    }

    /**
     * Show the form for creating a new MainBlock.
     *
     * @return Response
     */
    public function create()
    {
        return view('main_blocks.create');
    }

    /**
     * Store a newly created MainBlock in storage.
     *
     * @param CreateMainBlockRequest $request
     *
     * @return Response
     */
    public function store(CreateMainBlockRequest $request)
    {
        $input = MainBlock::add($request->all());
        $input->uploadImage($request['bg']);

        Flash::success('Main Block saved successfully.');

        return redirect(route('mainBlocks.index'));
    }

    /**
     * Display the specified MainBlock.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mainBlock = $this->mainBlockRepository->find($id);

        if (empty($mainBlock)) {
            Flash::error('Main Block not found');

            return redirect(route('mainBlocks.index'));
        }

        return view('main_blocks.show')->with('mainBlock', $mainBlock);
    }

    /**
     * Show the form for editing the specified MainBlock.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mainBlock = $this->mainBlockRepository->find($id);

        if (empty($mainBlock)) {
            Flash::error('Main Block not found');

            return redirect(route('mainBlocks.index'));
        }

        return view('main_blocks.edit')->with('mainBlock', $mainBlock);
    }

    /**
     * Update the specified MainBlock in storage.
     *
     * @param int $id
     * @param UpdateMainBlockRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMainBlockRequest $request)
    {
        $mainBlock = MainBlock::find($id);
        $mainBlock->edit($request->all());
        $mainBlock->uploadImage($request['bg']);

        if (empty($mainBlock)) {
            Flash::error('Main Block not found');

            return redirect(route('mainBlocks.index'));
        }

        $mainBlock = $this->mainBlockRepository->update($request->all(), $id);

        Flash::success('Main Block updated successfully.');

        return redirect(route('mainBlocks.index'));
    }

    /**
     * Remove the specified MainBlock from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mainBlock = MainBlock::find($id);

        if (empty($mainBlock)) {
            Flash::error('Main Block not found');

            return redirect(route('mainBlocks.index'));
        }

        $mainBlock->remove();

        Flash::success('Main Block deleted successfully.');

        return redirect(route('mainBlocks.index'));
    }
}
