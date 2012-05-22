{$Html->link(amazonList);}

{$user_profile["name"];}
<img src =https://graph.facebook.com/<?php echo $user_profile["id"];?>/picture?type=square>

<?php foreach ($friends as $friend): ?>
<?php echo $friend["name"];?>
<img src =https://graph.facebook.com/<?php echo $friend["id"];?>/picture?type=square>
<?php endforeach; ?>
