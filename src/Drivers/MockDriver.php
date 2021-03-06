<?php

namespace Rackbeat\Currency\Drivers;

class MockDriver extends BaseDriver implements DriverInterface
{
	public function symbols(): array {
		return [];
	}

	public function convert( $fromCurrency, $toCurrency, $amount ): array {
		return [];
	}

	public function get($forCurrency = null): array {
		return [];
	}

	public function historical( $date, $forCurrency = null ): array {
		return [];
	}

	public function between( $fromDate, $toDate ): array {
		return [];
	}

	public function fluctuationBetween( $fromDate, $toDate ): array {
		return [];
	}

}