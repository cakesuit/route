<?php
namespace Cakesuit\Route\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use Cakesuit\Route\View\Helper\RouteHelper;

/**
 * Cakesuit\Route\View\Helper\RouteHelper Test Case
 */
class RouteHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Cakesuit\Route\View\Helper\RouteHelper
     */
    public $Route;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->Route = new RouteHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Route);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
