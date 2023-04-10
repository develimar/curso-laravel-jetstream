<?php

namespace App\Models;

use App\Models\Traits\TeamTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, TeamTrait;
    protected $fillable = ['title', 'body', 'team_id'];


}
