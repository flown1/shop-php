<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductPurchase $productPurchase
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productPurchase->id_product_purchase],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productPurchase->id_product_purchase)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Product Purchase'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="productPurchase form large-9 medium-8 columns content">
    <?= $this->Form->create($productPurchase) ?>
    <fieldset>
        <legend><?= __('Edit Product Purchase') ?></legend>
        <?php
            echo $this->Form->control('id_product');
            echo $this->Form->control('product_quantity');
            echo $this->Form->control('total_price');
            echo $this->Form->control('order_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
