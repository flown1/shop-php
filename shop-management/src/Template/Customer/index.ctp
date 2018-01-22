<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer[]|\Cake\Collection\CollectionInterface $customer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customer index large-9 medium-8 columns content">
    <h3><?= __('Customer') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_customer') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('surname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customer as $customer): ?>
            <tr>
                <td><?= $this->Number->format($customer->id_customer) ?></td>
                <td><?= h($customer->name) ?></td>
                <td><?= h($customer->surname) ?></td>
                <td><?= h($customer->email) ?></td>
                <td><?= h($customer->password) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $customer->id_customer]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->id_customer]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->id_customer], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id_customer)]) ?>
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
