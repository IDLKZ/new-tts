<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Class ServiceSecond
 * @package App\Models
 * @version May 28, 2021, 8:45 am UTC
 *
 * @property string $icon
 * @property string $content
 */
class ServiceSecond extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'services_second';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'content'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'content' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'icon' => 'sometimes|image',
        'content' => 'required|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public static function add($fields)
    {
        $post = new static;
        $post->fill($fields);
        $post->save();
        return $post;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function remove()
    {
        $this->removeImage();
        $this->delete();
    }

    public function removeImage()
    {
        if($this->icon != null)
        {
            Storage::delete('uploads/' . $this->icon);
        }
    }

    public function uploadImage($image)
    {
        if($image == null) { return; }

        $this->removeImage();
        $filename = Str::random(10) . '.' . $image->extension();
        $image->storeAs('uploads', $filename);
        $this->icon = $filename;
        $this->save();
    }

    public function getImage()
    {
        if($this->icon == null)
        {
            return '/img/no-image.png';
        }

        return '/uploads/' . $this->icon;

    }

}
