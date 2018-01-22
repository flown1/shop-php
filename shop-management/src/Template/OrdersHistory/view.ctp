<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrdersHistory $ordersHistory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Orders History'), ['action' => 'edit', $ordersHistory->order_history_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Orders History'), ['action' => 'delete', $ordersHistory->order_history_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersHistory->order_history_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders History'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orders History'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ordersHistory view large-9 medium-8 columns content">
    <h3><?= h($ordersHistory->order_history_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Order History Id') ?></th>
            <td><?= $this->Number->format($ordersHistory->order_history_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order Id') ?></th>
            <td><?= $this->Number->format($ordersHistory->order_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Customer') ?></th>
            <td><?= $this->Number->format($ordersHistory->id_customer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($ordersHistory->date) ?></td>
        </tr>
    </table>
</div>
