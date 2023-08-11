<?php

namespace App\Models;

use App\Traits\FilterByUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory, FilterByUser;

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description',
        'status',
        'user_id',
        'setting',
        'type',
        'world',
        'world_id',
    ];

    /**
     * Get the phone associated with the user.
     */
    public function world()
    {
        return $this->belongsTo(World::class);
    }


}
