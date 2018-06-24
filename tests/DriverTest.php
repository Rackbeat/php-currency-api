<?php

use PHPUnit\Framework\TestCase;

class DriverTest extends TestCase
{
	/** @test */
	public function can_init_driver() {
		$this->assertInstanceOf( \Rackbeat\Currency\Drivers\DriverInterface::class, \Rackbeat\Currency\API::make( 'mock' ) );
	}

	/** @test */
	public function init_will_properly_set_parameters() {
		$api = \Rackbeat\Currency\API::make( 'mock', \Rackbeat\Currency\Symbol::ANG, [ \Rackbeat\Currency\Symbol::DKK, \Rackbeat\Currency\Symbol::USD ] );
		$this->assertEquals( [ \Rackbeat\Currency\Symbol::DKK, \Rackbeat\Currency\Symbol::USD ], $api->getSymbols() );
		$this->assertEquals( \Rackbeat\Currency\Symbol::ANG, $api->getBaseCurrency() );
	}

	/** @test */
	public function will_throw_exception_if_using_invalid_driver() {
		$this->expectException( \Rackbeat\Currency\Exceptions\DriverNotFoundException::class );

		\Rackbeat\Currency\API::make( 'cool-currency-api-driver' );
	}

	/** @test */
	public function will_throw_exception_if_no_driver_is_specified() {
		// In Laravel, this will use the default configured in the settings.
		$this->expectException( \Rackbeat\Currency\Exceptions\DriverNotDefinedException::class );

		\Rackbeat\Currency\API::make();
	}
}
