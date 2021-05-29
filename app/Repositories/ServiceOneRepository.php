<?php

namespace App\Repositories;

use App\Models\ServiceOne;
use App\Repositories\BaseRepository;

/**
 * Class ServiceOneRepository
 * @package App\Repositories
 * @version May 28, 2021, 7:59 am UTC
*/

class ServiceOneRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'icon',
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
        return ServiceOne::class;
    }
}
