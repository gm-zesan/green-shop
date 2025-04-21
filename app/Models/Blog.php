<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\SlugOptions;
class Blog extends Model
{
    use HasFactory;
    private static $image, $imageName, $directory, $imageUrl;
    protected $fillable = [
        'category_id',
        'title',
        'subtitle',
        'description',
        'image',
        'created_by',
    ];

    public static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'upload/blogs-image/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public function category(){
        return $this->belongsTo(BlogCategory::class);
    }
    public function createdBy(){
        return $this->belongsTo(User::class, 'created_by');
    }
}
