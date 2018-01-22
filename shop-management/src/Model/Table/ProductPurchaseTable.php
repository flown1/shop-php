<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductPurchase Model
 *
 * @property \App\Model\Table\OrdersTable|\Cake\ORM\Association\BelongsTo $Orders
 *
 * @method \App\Model\Entity\ProductPurchase get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductPurchase newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProductPurchase[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductPurchase|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductPurchase patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductPurchase[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductPurchase findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductPurchaseTable extends Table
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

        $this->setTable('product_purchase');
        $this->setDisplayField('id_product_purchase');
        $this->setPrimaryKey('id_product_purchase');

        $this->belongsTo('Orders', [
            'foreignKey' => 'order_id',
            'joinType' => 'INNER'
        ]);
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
            ->integer('id_product_purchase')
            ->allowEmpty('id_product_purchase', 'create');

        $validator
            ->integer('id_product')
            ->requirePresence('id_product', 'create')
            ->notEmpty('id_product');

        $validator
            ->scalar('product_quantity')
            ->maxLength('product_quantity', 45)
            ->requirePresence('product_quantity', 'create')
            ->notEmpty('product_quantity');

        $validator
            ->numeric('total_price')
            ->requirePresence('total_price', 'create')
            ->notEmpty('total_price');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['order_id'], 'Orders'));

        return $rules;
    }
}
