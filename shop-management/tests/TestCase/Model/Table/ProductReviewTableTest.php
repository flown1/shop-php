<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductReviewTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductReviewTable Test Case
 */
class ProductReviewTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductReviewTable
     */
    public $ProductReview;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.product_review',
        'app.products'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProductReview') ? [] : ['className' => ProductReviewTable::class];
        $this->ProductReview = TableRegistry::get('ProductReview', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductReview);

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
