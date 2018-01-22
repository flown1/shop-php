<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductReview Entity
 *
 * @property int $id_product_review
 * @property int $product_id
 * @property int $rating
 * @property string $description
 *
 * @property \App\Model\Entity\Product $product
 */
class ProductReview extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'id_product_review' => true,
        'product_id' => true,
        'rating' => true,
        'description' => true,
        'product' => true
    ];
}
