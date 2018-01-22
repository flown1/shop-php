<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrdersHistory $ordersHistory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Orders History'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ordersHistory form large-9 medium-8 columns content">
    <?= $this->Form->create($ordersHistory) ?>
    <fieldset>
        <legend><?= __('Add Orders History') ?></legend>
        <?php
            echo $this->Form->control('order_id');
            echo $this->Form->control('id_customer');
            echo $this->Form->control('date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
