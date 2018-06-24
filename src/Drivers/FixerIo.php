<?php

namespace Rackbeat\Currency\Drivers;

class FixerIo extends BaseDriver implements DriverInterface
{
	public function symbols(): array {
		// TODO: Implement symbols() method.
	}

	public function convert( $fromCurrency, $toCurrency, $amount ): array {
		// TODO: Implement convert() method.
	}

	public function get(): array {
		// TODO: Implement get() method.
	}

	public function historical( $date ): array {
		// TODO: Implement historical() method.
	}

	public function between( $fromDate, $toDate ): array {
		// TODO: Implement between() method.
	}

	public function fluctuationBetween( $fromDate, $toDate ): array {
		// TODO: Implement fluctuationBetween() method.
	}

}