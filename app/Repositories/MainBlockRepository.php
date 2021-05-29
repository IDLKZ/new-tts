<?php

namespace App\Repositories;

use App\Models\MainBlock;
use App\Repositories\BaseRepository;

/**
 * Class MainBlockRepository
 * @package App\Repositories
 * @version May 27, 2021, 4:13 pm UTC
*/

class MainBlockRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'content',
        'url_video',
        'bg'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MainBlock::class;
    }
}
