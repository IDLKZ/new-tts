<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Class MainBlock
 * @package App\Models
 * @version May 27, 2021, 4:13 pm UTC
 *
 * @property string $title
 * @property string $content
 * @property string $url_video
 * @property string $bg
 */
class MainBlock extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'main';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'content',
        'url_video'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'content' => 'string',
        'url_video' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'url_video' => 'nullable|string|max:255',
        'bg' => 'sometimes|image',
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
        if($this->bg != null)
        {
            Storage::delete('uploads/' . $this->bg);
        }
    }

    public function uploadImage($image)
    {
        if($image == null) { return; }

        $this->removeImage();
        $filename = Str::random(10) . '.' . $image->extension();
        $image->storeAs('uploads', $filename);
        $this->bg = $filename;
        $this->save();
    }

    public function getImage()
    {
        if($this->bg == null)
        {
            return '/img/no-image.png';
        }

        return '/uploads/' . $this->bg;

    }

}
