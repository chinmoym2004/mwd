<?php 

namespace MWD\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resume extends Model {

	protected $table = 'resumes';

	use SoftDeletes;

    protected $dates = ['deleted_at'];

}
