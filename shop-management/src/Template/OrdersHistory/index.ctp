<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrdersHistory[]|\Cake\Collection\CollectionInterface $ordersHistory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Orders History'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ordersHistory index large-9 medium-8 columns content">
    <h3><?= __('Orders History') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('order_history_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_customer') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ordersHistory as $ordersHistory): ?>
            <tr>
                <td><?= $this->Number->format($ordersHistory->order_history_id) ?></td>
                <td><?= $this->Number->format($ordersHistory->order_id) ?></td>
                <td><?= $this->Number->format($ordersHistory->id_customer) ?></td>
                <td><?= h($ordersHistory->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ordersHistory->order_history_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ordersHistory->order_history_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ordersHistory->order_history_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersHistory->order_history_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
