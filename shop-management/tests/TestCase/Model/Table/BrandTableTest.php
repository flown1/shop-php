<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BrandTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BrandTable Test Case
 */
class BrandTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BrandTable
     */
    public $Brand;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.brand'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Brand') ? [] : ['className' => BrandTable::class];
        $this->Brand = TableRegistry::get('Brand', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Brand);

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
}
