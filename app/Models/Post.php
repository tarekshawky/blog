<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = ['id', 'title', 'body'];

    public function id(): int
    {
        return $this->id;
    }
    public function title(): string
    {
        return $this->title;
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'author_id')->withDefault('Admin User');
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function tags(): BelongsTo
    {
        return $this->belongsTo(Tag::class, 'post_tag');
    }
}
