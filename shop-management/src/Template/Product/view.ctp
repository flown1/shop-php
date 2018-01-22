<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id_product]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id_product], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id_product)]) ?> </li>
        <li><?= $this->Html->link(__('List Product'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Product Review'), ['controller' => 'ProductReview', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product Review'), ['controller' => 'ProductReview', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="product view large-9 medium-8 columns content">
    <h3><?= h($product->id_product) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Product Name') ?></th>
            <td><?= h($product->product_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Brand Name') ?></th>
            <td><?= h($product->brand_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Product') ?></th>
            <td><?= $this->Number->format($product->id_product) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $this->Number->format($product->category) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($product->price) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Image Url') ?></h4>
        <?= $this->Text->autoParagraph(h($product->image_url)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Product Review') ?></h4>
        <?php if (!empty($product->product_review)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id Product Review') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Rating') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->product_review as $productReview): ?>
            <tr>
                <td><?= h($productReview->id_product_review) ?></td>
                <td><?= h($productReview->product_id) ?></td>
                <td><?= h($productReview->rating) ?></td>
                <td><?= h($productReview->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProductReview', 'action' => 'view', $productReview->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProductReview', 'action' => 'edit', $productReview->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductReview', 'action' => 'delete', $productReview->], ['confirm' => __('Are you sure you want to delete # {0}?', $productReview->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
