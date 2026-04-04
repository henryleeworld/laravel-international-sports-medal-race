<?php

namespace App\Models;

use Database\Factories\SportFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[Fillable(['name'])]
class Sport extends Model
{
    /** @use HasFactory<SportFactory> */
    use HasFactory;

    /**
     * The countries that belong to the sport.
     */
    public function countries(): BelongsToMany
    {
        return $this->belongsToMany(Country::class)->withPivot('position');
    }
}
