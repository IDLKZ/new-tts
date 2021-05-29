<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Contact
 * @package App\Models
 * @version May 29, 2021, 8:15 am UTC
 *
 * @property string $phone
 * @property string $email
 * @property string $address
 * @property string $facebook
 * @property string $instagram
 * @property string $twitter
 */
class Contact extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'contacts';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'phone',
        'email',
        'address',
        'facebook',
        'instagram',
        'twitter'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'phone' => 'string',
        'email' => 'string',
        'address' => 'string',
        'facebook' => 'string',
        'instagram' => 'string',
        'twitter' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'phone' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'facebook' => 'nullable|string|max:255',
        'instagram' => 'nullable|string|max:255',
        'twitter' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
