<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrdersHistoryTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrdersHistoryTable Test Case
 */
class OrdersHistoryTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrdersHistoryTable
     */
    public $OrdersHistory;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.orders_history',
        'app.orders'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OrdersHistory') ? [] : ['className' => OrdersHistoryTable::class];
        $this->OrdersHistory = TableRegistry::get('OrdersHistory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrdersHistory);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
