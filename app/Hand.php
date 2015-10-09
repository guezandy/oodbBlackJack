<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Hand extends Model {
    protected $table = 'hand';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['visible', 'hidden', 'card1',
                          'card2', 'session_token'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id'];
}
