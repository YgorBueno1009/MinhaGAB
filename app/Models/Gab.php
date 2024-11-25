<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Gab extends Model
{
    use HasFactory;

    protected $table = "gabs";

    protected $fillable = [
        'request_id',
        'path',
        'message',
        'status',
    ];

    public function gabRequest(): BelongsTo
    {
        return $this->BelongsTo(GabsRequest::class, 'request_id');
    }
}
