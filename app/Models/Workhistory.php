<?php namespace MWD\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Workhistory extends Model {

	protected $table = 'workhistory';

	use SoftDeletes;

    protected $dates = ['deleted_at'];

}
