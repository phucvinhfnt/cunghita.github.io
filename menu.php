<ul>
      <!-- <li><a href="home.html">Trang chủ</a></li> -->
      <?php
      $category = array(
        array('id'=>1, 'title'=>"Trang chủ", 'parent_id'=>0)
        , array('id'=>2, 'title'=>"Giới thiệu", 'parent_id'=>3)
        , array('id'=>3, 'title'=>"Hỏi đáp", 'parent_id'=>0)
        , array('id'=>4, 'title'=>"Loãng xương là gì?", 'parent_id'=>2)
        , array('id'=>5, 'title'=>"Phần mềm chẩn đoán", 'parent_id'=>2)
        , array('id'=>6, 'title'=>"Dành cho ai?", 'parent_id'=>2)); 
        function data_tree($data, $parent_id = 2, $level = 0){
          $result = [];
          foreach($data as $item){
            if($item['parent_id'] == $parent_id)
            {
              $item['level'] = $level;
              $result[] = $item;
              $child = data_tree($data,$item['id'],$level +1);
              $result = array_merge($result,$child);
            }
          }
          return $result;
        }
        $list_cat = data_tree($category,0);
      // foreach($menus as $mitems) 
        foreach($list_cat as $item) 
      {?>
        <!-- <li><a href="baiviet.php?mid=<?php //echo $item["id"] ?>"><?php //echo $item["title"] ?><i class="fas fa-caret-down"></i></a> </li> -->
        <li><a href=""><?php echo $item['title']; ?></a></li>
     <?php }
      ?>
      <!-- <li><a href="#">Giới thiệu<i class="fas fa-caret-down"></i></a>
        
      </li>
      <li><a href="#">Diễn đàn</a></li>
      <li><a href="#">Hỏi đáp</a></li>
      <li><a href="#">Liên hệ</a></li> -->
    </ul>