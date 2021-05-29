<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdvantageBlockRequest;
use App\Http\Requests\UpdateAdvantageBlockRequest;
use App\Models\AdvantageBlock;
use App\Repositories\AdvantageBlockRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AdvantageBlockController extends AppBaseController
{
    /** @var  AdvantageBlockRepository */
    private $advantageBlockRepository;

    public function __construct(AdvantageBlockRepository $advantageBlockRepo)
    {
        $this->advantageBlockRepository = $advantageBlockRepo;
    }

    /**
     * Display a listing of the AdvantageBlock.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $advantageBlocks = $this->advantageBlockRepository->all();

        return view('advantage_blocks.index')
            ->with('advantageBlocks', $advantageBlocks);
    }

    /**
     * Show the form for creating a new AdvantageBlock.
     *
     * @return Response
     */
    public function create()
    {
        return view('advantage_blocks.create');
    }

    /**
     * Store a newly created AdvantageBlock in storage.
     *
     * @param CreateAdvantageBlockRequest $request
     *
     * @return Response
     */
    public function store(CreateAdvantageBlockRequest $request)
    {
        $input = AdvantageBlock::add($request->all());
        $input->uploadImage($request['icon']);

        Flash::success('Advantage Block saved successfully.');

        return redirect(route('advantageBlocks.index'));
    }

    /**
     * Display the specified AdvantageBlock.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $advantageBlock = $this->advantageBlockRepository->find($id);

        if (empty($advantageBlock)) {
            Flash::error('Advantage Block not found');

            return redirect(route('advantageBlocks.index'));
        }

        return view('advantage_blocks.show')->with('advantageBlock', $advantageBlock);
    }

    /**
     * Show the form for editing the specified AdvantageBlock.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $advantageBlock = $this->advantageBlockRepository->find($id);

        if (empty($advantageBlock)) {
            Flash::error('Advantage Block not found');

            return redirect(route('advantageBlocks.index'));
        }

        return view('advantage_blocks.edit')->with('advantageBlock', $advantageBlock);
    }

    /**
     * Update the specified AdvantageBlock in storage.
     *
     * @param int $id
     * @param UpdateAdvantageBlockRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdvantageBlockRequest $request)
    {
        $advantageBlock = AdvantageBlock::find($id);
        $advantageBlock->edit($request->all());
        $advantageBlock->uploadImage($request['icon']);
        if (empty($advantageBlock)) {
            Flash::error('Advantage Block not found');

            return redirect(route('advantageBlocks.index'));
        }

        $advantageBlock = $this->advantageBlockRepository->update($request->all(), $id);

        Flash::success('Advantage Block updated successfully.');

        return redirect(route('advantageBlocks.index'));
    }

    /**
     * Remove the specified AdvantageBlock from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $advantageBlock = AdvantageBlock::find($id);

        if (empty($advantageBlock)) {
            Flash::error('Advantage Block not found');

            return redirect(route('advantageBlocks.index'));
        }

        $advantageBlock->remove();

        Flash::success('Advantage Block deleted successfully.');

        return redirect(route('advantageBlocks.index'));
    }
}
