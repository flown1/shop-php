<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductReview Model
 *
 * @property \App\Model\Table\ProductsTable|\Cake\ORM\Association\BelongsTo $Products
 *
 * @method \App\Model\Entity\ProductReview get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductReview newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProductReview[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductReview|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductReview patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductReview[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductReview findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductReviewTable extends Table
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

        $this->setTable('product_review');

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
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
            ->integer('id_product_review')
            ->requirePresence('id_product_review', 'create')
            ->notEmpty('id_product_review');

        $validator
            ->integer('rating')
            ->requirePresence('rating', 'create')
            ->notEmpty('rating');

        $validator
            ->scalar('description')
            ->maxLength('description', 4294967295)
            ->requirePresence('description', 'create')
            ->notEmpty('description');

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
        $rules->add($rules->existsIn(['product_id'], 'Products'));

        return $rules;
    }
}
