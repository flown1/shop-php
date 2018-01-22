<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrdersHistory Entity
 *
 * @property int $order_history_id
 * @property int $order_id
 * @property int $id_customer
 * @property \Cake\I18n\FrozenDate $date
 *
 * @property \App\Model\Entity\Order $order
 */
class OrdersHistory extends Entity
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
        'order_id' => true,
        'id_customer' => true,
        'date' => true,
        'order' => true
    ];
}
