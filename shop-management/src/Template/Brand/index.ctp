<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Brand[]|\Cake\Collection\CollectionInterface $brand
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Brand'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="brand index large-9 medium-8 columns content">
    <h3><?= __('Brand') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_brand') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_brand') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($brand as $brand): ?>
            <tr>
                <td><?= $this->Number->format($brand->id_brand) ?></td>
                <td><?= h($brand->name_brand) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $brand->id_brand]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $brand->id_brand]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $brand->id_brand], ['confirm' => __('Are you sure you want to delete # {0}?', $brand->id_brand)]) ?>
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
