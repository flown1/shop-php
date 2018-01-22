<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CustomerOrder Model
 *
 * @method \App\Model\Entity\CustomerOrder get($primaryKey, $options = [])
 * @method \App\Model\Entity\CustomerOrder newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CustomerOrder[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CustomerOrder|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CustomerOrder patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CustomerOrder[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CustomerOrder findOrCreate($search, callable $callback = null, $options = [])
 */
class CustomerOrderTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('customer_order');
        $this->setDisplayField('id_order');
        $this->setPrimaryKey('id_order');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id_order')
            ->allowEmpty('id_order', 'create');

        $validator
            ->integer('id_customer')
            ->requirePresence('id_customer', 'create')
            ->notEmpty('id_customer');

        $validator
            ->integer('id_product')
            ->requirePresence('id_product', 'create')
            ->notEmpty('id_product');

        $validator
            ->integer('product_quantity')
            ->requirePresence('product_quantity', 'create')
            ->notEmpty('product_quantity');

        $validator
            ->numeric('total_price')
            ->requirePresence('total_price', 'create')
            ->notEmpty('total_price');

        return $validator;
    }
}
