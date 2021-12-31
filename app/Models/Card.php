<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillabled = [
        'title',
        'order',
        'list_id',
        'owner_id'
    ];
    
    public function list(): BelongsTo
    {
        return $this->belongsTo(CardList::class, 'list_id');
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
