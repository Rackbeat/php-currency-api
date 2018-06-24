<?php namespace Rackbeat\Currency;

use Rackbeat\Currency\Drivers\DriverInterface;
use Rackbeat\Currency\Exceptions\DriverNotDefinedException;
use Rackbeat\Currency\Exceptions\DriverNotFoundException;

class API
{
	/**
	 * @param        $driver
	 * @param string $base
	 * @param array  $symbols
	 *
	 * @return DriverInterface
	 *
	 * @throws DriverNotFoundException|DriverNotDefinedException
	 */
	public static function make( $driver = null, $base = 'USD', $symbols = [] ) {
		return ( $driver === null ? DriverFactory::getDriver() : DriverFactory::make( $driver ) )
			->setBase( $base )
			->setSymbols( $symbols );
	}
}
