<?php

namespace Modules\Finance\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Finance\Entities\Journal;
use Modules\Finance\Entities\Operation;

class Transaction extends Model
{

	protected $fillable = ['id', 'journal_id', 'amount'];

    public function journal()
	{
    	return $this->belongsTo(Journal::class);
	}


    public function absences()
    {
        return $this->hasMany(Operation::class);
    }
}
