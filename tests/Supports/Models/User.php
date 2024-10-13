<?php

namespace Leknoppix\Cloudflare\Tests\Supports\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Leknoppix\Cloudflare\Model\Concerns\Cloudflare;

class User extends AbstractModel
{
    use HasFactory;
    use SoftDeletes;
    use Cloudflare;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
