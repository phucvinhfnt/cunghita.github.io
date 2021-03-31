<ul>
      <li><a href="home.html">Trang chủ</a></li>
      <?php
      $menus = array(array('id'=>1, 'title'=>"Giới thiệu"), array('id'=>2, 'title'=>"Tin tức"), array('id'=>3, 'title'=>"Abc dfsdg")); 
      foreach($menus as $mitems) 
      {?>
        <li><a href="baiviet.php?mid=<?php echo $mitems["id"] ?>"><?php echo $mitems["title"] ?><i class="fas fa-caret-down"></i></a> </li>
     <?php }
      ?>
      <li><a href="#">Giới thiệu<i class="fas fa-caret-down"></i></a>
        
      </li>
      <li><a href="#">Diễn đàn</a></li>
      <li><a href="#">Hỏi đáp</a></li>
      <li><a href="#">Liên hệ</a></li>
    </ul>
