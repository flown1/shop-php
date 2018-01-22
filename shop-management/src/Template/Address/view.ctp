<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Addres $addres
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Addres'), ['action' => 'edit', $addres->id_address]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Addres'), ['action' => 'delete', $addres->id_address], ['confirm' => __('Are you sure you want to delete # {0}?', $addres->id_address)]) ?> </li>
        <li><?= $this->Html->link(__('List Address'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Addres'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="address view large-9 medium-8 columns content">
    <h3><?= h($addres->id_address) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Address') ?></th>
            <td><?= $this->Number->format($addres->id_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Customer') ?></th>
            <td><?= $this->Number->format($addres->id_customer) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($addres->address)); ?>
    </div>
</div>
