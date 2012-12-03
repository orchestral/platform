<?php namespace OrchestraTests;

use PHPUnit_Framework_TestCase;
use Orchestra;

class OrchestraWidgetTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test Orchestra\Widget::make()
	 *
	 * @test
	 */
	public function testMakeReturnProperInstanceOf()
	{
		$this->assertInstanceOf('Orchestra\Widget\Menu',
			Orchestra\Widget::make('menu'));
		$this->assertInstanceOf('Orchestra\Widget\Pane',
			Orchestra\Widget::make('pane'));
		$this->assertInstanceOf('Orchestra\Widget\Placeholder',
			Orchestra\Widget::make('placeholder'));
	}

	/**
	 * Test Orchestra\Widget::make() with different name return different
	 * instance.
	 *
	 * @test
	 */
	public function testMakeDifferentNameReturnDifferentInstance()
	{
		$this->assertNotEquals(Orchestra\Widget::make('menu.a'),
			Orchestra\Widget::make('menu.b'));
	}
}