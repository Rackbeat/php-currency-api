<?php namespace Rackbeat\Currency\Drivers;

interface DriverInterface
{
	/**
	 * @param string $baseCurrency
	 *
	 * @return self
	 */
	public function setBase( $baseCurrency );

	/**
	 * @param array||\Illuminate\Support\Collection $symbols
	 *
	 * @return self
	 */
	public function setSymbols( $symbols );

	/**
	 * @return string
	 */
	public function getBaseCurrency();

	/**
	 * @return array
	 */
	public function getSymbols();

	/**
	 * @return array
	 */
	public function symbols(): array;

	/**
	 * @param null|string $forCurrency
	 *
	 * @return array
	 */
	public function get( $forCurrency = null ): array;

	/**
	 * @param string               $fromCurrency
	 * @param string               $toCurrency
	 * @param double|integer|float $amount
	 *
	 * @return array
	 */
	public function convert( $fromCurrency, $toCurrency, $amount ): array;

	/**
	 * @param string|\DateTime $date
	 * @param null|string      $forCurrency
	 *
	 * @return array
	 */
	public function historical( $date, $forCurrency = null ): array;

	/**
	 * @param string|\DateTime $fromDate
	 * @param string|\DateTime $toDate
	 *
	 * @return array
	 */
	public function between( $fromDate, $toDate ): array;

	/**
	 * @param string|\DateTime $fromDate
	 * @param string|\DateTime $toDate
	 *
	 * @return array
	 */
	public function fluctuationBetween( $fromDate, $toDate ): array;
}