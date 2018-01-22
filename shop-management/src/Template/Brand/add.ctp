<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Brand $brand
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Brand'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="brand form large-9 medium-8 columns content">
    <?= $this->Form->create($brand) ?>
    <fieldset>
        <legend><?= __('Add Brand') ?></legend>
        <?php
            echo $this->Form->control('name_brand');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
