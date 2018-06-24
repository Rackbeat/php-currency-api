<?php

namespace Rackbeat\Currency\Drivers;

class BaseDriver
{
	protected $symbols      = [];
	protected $baseCurrency = 'USD';

	/**
	 * @param string $baseCurrency
	 *
	 * @return self
	 */
	public function setBase( $baseCurrency ) {
		$this->baseCurrency = $baseCurrency;

		return $this;
	}

	/**
	 * @param array||\Illuminate\Support\Collection $symbols
	 *
	 * @return self
	 */
	public function setSymbols( $symbols ) {
		if ( $symbols instanceof \Illuminate\Support\Collection ) {
			$this->symbols = $symbols->toArray();
		} elseif ( $symbols === null ) {
			$this->symbols = [];
		} else {
			$this->symbols = $symbols;
		}

		return $this;
	}

	public function getSymbols() {
		return $this->symbols;
	}

	public function getBaseCurrency() {
		return $this->baseCurrency;
	}
}