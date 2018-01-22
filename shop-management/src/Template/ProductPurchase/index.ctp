<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductPurchase[]|\Cake\Collection\CollectionInterface $productPurchase
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Product Purchase'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productPurchase index large-9 medium-8 columns content">
    <h3><?= __('Product Purchase') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_product_purchase') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_product') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productPurchase as $productPurchase): ?>
            <tr>
                <td><?= $this->Number->format($productPurchase->id_product_purchase) ?></td>
                <td><?= $this->Number->format($productPurchase->id_product) ?></td>
                <td><?= h($productPurchase->product_quantity) ?></td>
                <td><?= $this->Number->format($productPurchase->total_price) ?></td>
                <td><?= $this->Number->format($productPurchase->order_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $productPurchase->id_product_purchase]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productPurchase->id_product_purchase]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productPurchase->id_product_purchase], ['confirm' => __('Are you sure you want to delete # {0}?', $productPurchase->id_product_purchase)]) ?>
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
