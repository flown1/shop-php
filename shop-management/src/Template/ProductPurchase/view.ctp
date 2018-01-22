<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductPurchase $productPurchase
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product Purchase'), ['action' => 'edit', $productPurchase->id_product_purchase]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product Purchase'), ['action' => 'delete', $productPurchase->id_product_purchase], ['confirm' => __('Are you sure you want to delete # {0}?', $productPurchase->id_product_purchase)]) ?> </li>
        <li><?= $this->Html->link(__('List Product Purchase'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product Purchase'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productPurchase view large-9 medium-8 columns content">
    <h3><?= h($productPurchase->id_product_purchase) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Product Quantity') ?></th>
            <td><?= h($productPurchase->product_quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Product Purchase') ?></th>
            <td><?= $this->Number->format($productPurchase->id_product_purchase) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Product') ?></th>
            <td><?= $this->Number->format($productPurchase->id_product) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Price') ?></th>
            <td><?= $this->Number->format($productPurchase->total_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order Id') ?></th>
            <td><?= $this->Number->format($productPurchase->order_id) ?></td>
        </tr>
    </table>
</div>
