<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\Journal;

class Transaction extends Model
{

	protected $fillable = ['id', 'journal_id', 'amount'];

    public function journal()
	{
    	return $this->belongsTo(Journal::class, 'journals');
	}

}
