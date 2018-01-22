<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Product Model
 *
 * @property \App\Model\Table\ProductReviewTable|\Cake\ORM\Association\HasMany $ProductReview
 *
 * @method \App\Model\Entity\Product get($primaryKey, $options = [])
 * @method \App\Model\Entity\Product newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Product[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductTable extends Table
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

        $this->setTable('product');
        $this->setDisplayField('id_product');
        $this->setPrimaryKey('id_product');

        $this->hasMany('ProductReview', [
            'foreignKey' => 'product_id'
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
            ->integer('id_product')
            ->allowEmpty('id_product', 'create');

        $validator
            ->scalar('product_name')
            ->maxLength('product_name', 255)
            ->requirePresence('product_name', 'create')
            ->notEmpty('product_name');

        $validator
            ->integer('category')
            ->requirePresence('category', 'create')
            ->notEmpty('category');

        $validator
            ->scalar('brand_name')
            ->maxLength('brand_name', 45)
            ->requirePresence('brand_name', 'create')
            ->notEmpty('brand_name');

        $validator
            ->numeric('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->scalar('image_url')
            ->maxLength('image_url', 16777215)
            ->requirePresence('image_url', 'create')
            ->notEmpty('image_url');

        return $validator;
    }
}
