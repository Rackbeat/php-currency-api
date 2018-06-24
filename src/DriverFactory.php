<?php namespace Rackbeat\Currency;

use Rackbeat\Currency\Drivers\DriverInterface;
use Rackbeat\Currency\Drivers\FixerIo;
use Rackbeat\Currency\Drivers\MockDriver;
use Rackbeat\Currency\Exceptions\DriverNotDefinedException;
use Rackbeat\Currency\Exceptions\DriverNotFoundException;

class DriverFactory
{
	protected const DRIVERS = [
		'mock'    => MockDriver::class,
		'fixerio' => FixerIo::class,
	];

	/**
	 * @param $name
	 *
	 * @return DriverInterface
	 *
	 * @throws DriverNotFoundException
	 */
	public static function make( $name ) {
		$name = strtolower( $name );

		if ( ! isset( static::DRIVERS[ $name ] ) ) {
			throw new DriverNotFoundException( "{$name} is not a valid driver." );
		}

		$class = static::DRIVERS[ $name ];

		return new $class;
	}

	public static function getDriver() {
		if ( \function_exists( 'config' ) ) {
			return static::make( config( 'currency_rates.driver' ) );
		}

		throw new DriverNotDefinedException( 'You have not specified a driver to use.' );
	}
}
