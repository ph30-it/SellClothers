<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Role extends Model
{
    protected $table = 'role';

    protected $fillable = [
        'id',
        'name',
    ];

    public function users()
    {
        return $this->hasMany(App::User);
    }
}
