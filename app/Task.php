<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // protected $table = 'tasks';
    protected $guarded = [];
    // protected $fillable = ['title', 'subject_id', 'description'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function published()
    {
        return $this->created_at->diffForHumans();
    }
}
