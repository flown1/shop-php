<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrdersHistory Model
 *
 * @property \App\Model\Table\OrdersTable|\Cake\ORM\Association\BelongsTo $Orders
 *
 * @method \App\Model\Entity\OrdersHistory get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrdersHistory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OrdersHistory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrdersHistory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrdersHistory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrdersHistory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrdersHistory findOrCreate($search, callable $callback = null, $options = [])
 */
class OrdersHistoryTable extends Table
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

        $this->setTable('orders_history');
        $this->setDisplayField('order_history_id');
        $this->setPrimaryKey('order_history_id');

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
            ->integer('order_history_id')
            ->allowEmpty('order_history_id', 'create');

        $validator
            ->integer('id_customer')
            ->requirePresence('id_customer', 'create')
            ->notEmpty('id_customer');

        $validator
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmpty('date');

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
