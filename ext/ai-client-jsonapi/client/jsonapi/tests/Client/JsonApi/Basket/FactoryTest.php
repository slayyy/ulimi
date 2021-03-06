<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2017-2018
 */


namespace Aimeos\Client\JsonApi\Basket;


class FactoryTest extends \PHPUnit\Framework\TestCase
{
	public function testCreateClient()
	{
		$context = \TestHelperJapi::getContext();

		$client = \Aimeos\Client\JsonApi\Basket\Factory::create( $context, 'basket' );
		$this->assertInstanceOf( \Aimeos\Client\JsonApi\Iface::class, $client );
	}


	public function testCreateClientEmpty()
	{
		$context = \TestHelperJapi::getContext();

		$this->setExpectedException( \Aimeos\Client\JsonApi\Exception::class );
		\Aimeos\Client\JsonApi\Basket\Factory::create( $context, '' );
	}


	public function testCreateClientInvalidPath()
	{
		$context = \TestHelperJapi::getContext();

		$this->setExpectedException( \Aimeos\Client\JsonApi\Exception::class );
		\Aimeos\Client\JsonApi\Basket\Factory::create( $context, '%^' );
	}


	public function testCreateClientInvalidName()
	{
		$context = \TestHelperJapi::getContext();

		$this->setExpectedException( \Aimeos\Client\JsonApi\Exception::class );
		\Aimeos\Client\JsonApi\Basket\Factory::create( $context, 'basket', '%^' );
	}
}
