<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [ 'user_id', 'category_id', 'ticket_id', 'title', 'priority', 'message', 'status'];



	public function category()
	{
	    return $this->belongsTo(Category::class);
	}

	public function scopePageinate($query, $user)
	{
		return $query->where('user_id', $user);
	}

	public function scopeGetTicket($query, $ticket_id)
	{
		return $query->where('ticket_id', $ticket_id);
	}
}
