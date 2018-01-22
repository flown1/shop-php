<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id_product
 * @property string $product_name
 * @property int $category
 * @property string $brand_name
 * @property float $price
 * @property string $image_url
 *
 * @property \App\Model\Entity\ProductReview[] $product_review
 */
class Product extends Entity
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
        'product_name' => true,
        'category' => true,
        'brand_name' => true,
        'price' => true,
        'image_url' => true,
        'product_review' => true
    ];
}
