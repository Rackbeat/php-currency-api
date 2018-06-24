<?php

use PHPUnit\Framework\TestCase;

class SymbolTest extends TestCase
{
	/** @test */
	public function can_get_symbols_as_an_array() {
		$this->assertCount( 167, Rackbeat\Currency\Symbol::toArray() );
	}

}
