
    

<!-- <?php echo $list["ItemAttributes"]["Title"];?>
 <img src =<?php echo $list["MediumImage"]["URL"];?>>
 -->
<?php echo $this->Html->link("amazon",
array('controller' => 'WishAlists', 'action' => 'amazonList')); ?>
        
<?php echo $user_profile["name"];?>
<img src =https://graph.facebook.com/<?php echo $user_profile["id"];?>/picture?type=square>

<?php foreach ($friends as $friend): ?>
<?php echo $friend["name"];?>
<img src =https://graph.facebook.com/<?php echo $friend["id"];?>/picture?type=square>
<?php endforeach; ?> 


<!--     <td>
<?php echo $this->Html->link($list['WishAlist']['title'],
array('controller' => 'posts', 'action' => 'view', $list['Post']['id'])); ?>
</td>
<td><?php echo $list['WishAlist']['created']; ?></td>
-->