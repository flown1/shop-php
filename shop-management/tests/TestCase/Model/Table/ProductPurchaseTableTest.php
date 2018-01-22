<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductPurchaseTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductPurchaseTable Test Case
 */
class ProductPurchaseTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductPurchaseTable
     */
    public $ProductPurchase;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.product_purchase',
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
        $config = TableRegistry::exists('ProductPurchase') ? [] : ['className' => ProductPurchaseTable::class];
        $this->ProductPurchase = TableRegistry::get('ProductPurchase', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductPurchase);

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
