<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'works';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'name', 'picture', 'description'];

    //protected $visible = ['id', 'user_id', 'name', 'picture', 'created_at', 'updated_at']

    public function user(){
        return $this->belongsTo(User::class);
    }
}
