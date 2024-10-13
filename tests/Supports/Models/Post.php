<?php

namespace Leknoppix\Cloudflare\Tests\Supports\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Leknoppix\Cloudflare\Model\Concerns\Cloudflare;

class Post extends AbstractModel
{
    use HasFactory;
    use Cloudflare;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'content',
    ];
}
