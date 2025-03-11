<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Country extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = ['name', 'short_code'];

    /**
     * The sports that belong to the country.
     */
    public function sports(): BelongsToMany
    {
        return $this->belongsToMany(Sport::class)->withPivot('position');
    }
}
