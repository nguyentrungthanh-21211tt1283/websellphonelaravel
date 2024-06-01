<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $primaryKey = 'id_comment';
    public $incrementing = true;
    protected $fillable = [
        'id_post',
        'id_user',
        'content_comment',
        'id_parent',
    ];
}
