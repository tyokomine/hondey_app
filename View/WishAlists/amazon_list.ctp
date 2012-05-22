<?php foreach ($lists as $list): ?>

<?php echo $list["ItemAttributes"]["Title"];?>
<img src =<?php echo $list["MediumImage"]["URL"];?>>
<?php endforeach; ?>