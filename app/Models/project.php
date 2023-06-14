<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    protected $fillable = [
        'name',
        'description',
        'status',
        'expiration_date',
    ];

    use HasFactory;
    use SoftDeletes;

    public function maintainers() {
        return $this->belongsToMany(User::class, 'maintainers');
    }

    public function developers() {
        return $this->belongsToMany(User::class, 'developers');
    }
}
