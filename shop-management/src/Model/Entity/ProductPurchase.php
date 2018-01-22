<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductPurchase Entity
 *
 * @property int $id_product_purchase
 * @property int $id_product
 * @property string $product_quantity
 * @property float $total_price
 * @property int $order_id
 *
 * @property \App\Model\Entity\Order $order
 */
class ProductPurchase extends Entity
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
        'id_product' => true,
        'product_quantity' => true,
        'total_price' => true,
        'order_id' => true,
        'order' => true
    ];
}
