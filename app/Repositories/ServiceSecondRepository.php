<?php

namespace App\Repositories;

use App\Models\ServiceSecond;
use App\Repositories\BaseRepository;

/**
 * Class ServiceSecondRepository
 * @package App\Repositories
 * @version May 28, 2021, 8:45 am UTC
*/

class ServiceSecondRepository extends BaseRepository
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
        return ServiceSecond::class;
    }
}
