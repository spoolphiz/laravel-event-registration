<?php
namespace Spoolphiz\Events\Interfaces;

interface VenueRepository {
	
	public function find($id);
	
	public function all();
	
	public function newVenue();
	
}