<?php

use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
	/** @test */
	public function can_get_latest_rates() {
		$this->assertEquals( [], \Rackbeat\Currency\API::make( 'mock' )->get() );
	}
}
