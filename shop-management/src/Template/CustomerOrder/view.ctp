<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerOrder $customerOrder
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customer Order'), ['action' => 'edit', $customerOrder->id_order]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer Order'), ['action' => 'delete', $customerOrder->id_order], ['confirm' => __('Are you sure you want to delete # {0}?', $customerOrder->id_order)]) ?> </li>
        <li><?= $this->Html->link(__('List Customer Order'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Order'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customerOrder view large-9 medium-8 columns content">
    <h3><?= h($customerOrder->id_order) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Order') ?></th>
            <td><?= $this->Number->format($customerOrder->id_order) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Customer') ?></th>
            <td><?= $this->Number->format($customerOrder->id_customer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Product') ?></th>
            <td><?= $this->Number->format($customerOrder->id_product) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product Quantity') ?></th>
            <td><?= $this->Number->format($customerOrder->product_quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Price') ?></th>
            <td><?= $this->Number->format($customerOrder->total_price) ?></td>
        </tr>
    </table>
</div>
