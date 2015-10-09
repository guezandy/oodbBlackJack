<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class HandResult extends Model {
    protected $table = 'hand_results';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['youstart', 'youstop', 'results',
                          'dealerstart', 'dealerstop', 'didDouble', 'session_token'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id'];
}
