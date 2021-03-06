<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerOrder $customerOrder
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Customer Order'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="customerOrder form large-9 medium-8 columns content">
    <?= $this->Form->create($customerOrder) ?>
    <fieldset>
        <legend><?= __('Add Customer Order') ?></legend>
        <?php
            echo $this->Form->control('id_customer');
            echo $this->Form->control('id_product');
            echo $this->Form->control('product_quantity');
            echo $this->Form->control('total_price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
