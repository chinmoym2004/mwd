<?php namespace MWD\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model {

	protected $table = 'projects';

	use SoftDeletes;

    protected $dates = ['deleted_at'];

}
