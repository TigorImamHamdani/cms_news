<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;


class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'news_title',
        'news_content',
        'writer_id',
        'category_id',
    ];

    public function category(): HasOne
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function writer(): HasOne
    {
        return $this->hasOne(Writer::class, 'id', 'writer_id');
    }
}
