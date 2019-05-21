<h3> Products </h3>

<?php if(is_array($products)): ?>
<div class="list-group">
<ul>
    <?php foreach($products as $product): ?>
        <li class="list-group-item"><?php echo $product->title; ?></li>
    <?php endforeach; ?>
</ul>
</div>
<?php endif; ?>
