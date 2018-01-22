<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerOrder[]|\Cake\Collection\CollectionInterface $customerOrder
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Customer Order'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customerOrder index large-9 medium-8 columns content">
    <h3><?= __('Customer Order') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_order') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_customer') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_product') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_price') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customerOrder as $customerOrder): ?>
            <tr>
                <td><?= $this->Number->format($customerOrder->id_order) ?></td>
                <td><?= $this->Number->format($customerOrder->id_customer) ?></td>
                <td><?= $this->Number->format($customerOrder->id_product) ?></td>
                <td><?= $this->Number->format($customerOrder->product_quantity) ?></td>
                <td><?= $this->Number->format($customerOrder->total_price) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $customerOrder->id_order]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customerOrder->id_order]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customerOrder->id_order], ['confirm' => __('Are you sure you want to delete # {0}?', $customerOrder->id_order)]) ?>
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
