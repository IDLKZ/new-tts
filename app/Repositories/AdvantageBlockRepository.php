<?php

namespace App\Repositories;

use App\Models\AdvantageBlock;
use App\Repositories\BaseRepository;

/**
 * Class AdvantageBlockRepository
 * @package App\Repositories
 * @version May 27, 2021, 6:01 pm UTC
*/

class AdvantageBlockRepository extends BaseRepository
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
        return AdvantageBlock::class;
    }
}
