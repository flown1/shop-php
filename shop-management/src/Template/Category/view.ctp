<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id_product_category]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id_product_category], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id_product_category)]) ?> </li>
        <li><?= $this->Html->link(__('List Category'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="category view large-9 medium-8 columns content">
    <h3><?= h($category->id_product_category) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Category Name') ?></th>
            <td><?= h($category->category_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Product Category') ?></th>
            <td><?= $this->Number->format($category->id_product_category) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Product') ?></th>
            <td><?= $this->Number->format($category->id_product) ?></td>
        </tr>
    </table>
</div>
