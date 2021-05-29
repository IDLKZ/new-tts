<?php

namespace App\Repositories;

use App\Models\Structure;
use App\Repositories\BaseRepository;

/**
 * Class StructureRepository
 * @package App\Repositories
 * @version May 28, 2021, 3:50 pm UTC
*/

class StructureRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'content'
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
        return Structure::class;
    }
}
