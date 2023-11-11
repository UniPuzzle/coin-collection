 <?php

  $sql = "WHERE cp.public = 1";
  $limit = ' LIMIT 0, 9999999999 ';
  $sort = " ASC ";
  $order_by = 'cp.title';
  $array_all_puzzle_coin = get_table_coin_puzzles($sql, $link,  $limit, $sort, $order_by);

  $checked_puzzle_section3_banner_id_1 = 0;
  $checked_puzzle_section3_banner_id_2 = 0;
  $checked_puzzle_section3_banner_id_3 = 0;
  $checked_puzzle_section3_banner_id_4 = 0;

  $coin_array = array();
  $coin_array['unlock-the-key-part-2'] = '  
  <div data-name="unlock-the-key-part-2" class="itr_coin_wrap">
    <div class="itr_coin--width">
      <div class="itr_coin_elem unlock-the-key-part-2_1" id="">
        <div class="unlock-the-key-part-2-img-src_1"></div>
      </div>
      <div class="itr_coin_elem unlock-the-key-part-2_2" id="">
        <div class="unlock-the-key-part-2-img-src_1"></div>
      </div>
      <div class="itr_coin_elem unlock-the-key-part-2_3" id="">
        <div class="unlock-the-key-part-2-img-src_1"></div>
      </div>
      <div class="itr_coin_elem unlock-the-key-part-2_4" id="">
        <div class="unlock-the-key-part-2-img-src_1"></div>
      </div>
      <div class="itr_coin_elem unlock-the-key-part-2_5" id="">
        <div class="unlock-the-key-part-2-img-src_1"></div>
      </div>
      <div class="itr_coin_elem unlock-the-key-part-2_6" id="">
        <div class="unlock-the-key-part-2-img-src_1"></div>
      </div>
      <div class="itr_coin_elem unlock-the-key-part-2_7" id="">
        <div class="unlock-the-key-part-2-img-src_1"></div>
      </div>
      <div class="itr_coin_elem unlock-the-key-part-2_8" id="">
        <div class="unlock-the-key-part-2-img-src_1"></div>
      </div>
    </div>
  </div>';
  $coin_array['euro-to-dollar'] = '  
  <div data-name="euro-to-dollar" class="itr_coin_wrap">
    <div class="itr_coin--width">
      <div class="itr_coin_elem euro-to-dollar_1" id="">
        <div class="euro-to-dollar-img-src_1"></div>
      </div>
      <div class="itr_coin_elem euro-to-dollar_2" id="">
        <div class="euro-to-dollar-img-src_1"></div>
      </div>
      <div class="itr_coin_elem euro-to-dollar_3" id="">
        <div class="euro-to-dollar-img-src_1"></div>
      </div>
      <div class="itr_coin_elem euro-to-dollar_4" id="">
        <div class="euro-to-dollar-img-src_1"></div>
      </div>
      <div class="itr_coin_elem euro-to-dollar_5" id="">
        <div class="euro-to-dollar-img-src_1"></div>
      </div>
      <div class="itr_coin_elem euro-to-dollar_6" id="">
        <div class="euro-to-dollar-img-src_1"></div>
      </div>
      <div class="itr_coin_elem euro-to-dollar_7" id="">
        <div class="euro-to-dollar-img-src_1"></div>
      </div>
      <div class="itr_coin_elem euro-to-dollar_8" id="">
        <div class="euro-to-dollar-img-src_1"></div>
      </div>
      <div class="itr_coin_elem euro-to-dollar_9" id="">
        <div class="euro-to-dollar-img-src_1"></div>
      </div>
    </div>
  </div>';
  $coin_array['coin-cup'] = '  
  <div data-name="coin-cup" class="itr_coin_wrap">
    <div class="itr_coin--width">
      <div class="itr_coin_elem  coin-cup_1" id="">
        <div class="coin-cup-img-src_1"></div>
      </div>

      <div class="itr_coin_elem coin-cup_2" id="">
        <div class="coin-cup-img-src_1"></div>
      </div>
      <div class="itr_coin_elem coin-cup_3" id="">
        <div class="coin-cup-img-src_1"></div>
      </div>
      <div class="itr_coin_elem coin-cup_4" id="">
        <div class="coin-cup-img-src_1"></div>
      </div>
      <div class="itr_coin_elem coin-cup_5" id="">
        <div class="coin-cup-img-src_1"></div>
      </div>
      <div class="itr_coin_elem coin-cup_6" id="">
        <div class="coin-cup-img-src_1"></div>
      </div>
      <div class="itr_coin_elem coin-cup_7" id="">
        <div class="coin-cup-img-src_1"></div>
      </div>
      <div class="itr_coin_elem coin-cup_8" id="">
        <div class="coin-cup-img-src_1"></div>
      </div>
    </div>
  </div>';
  $coin_array['coins-and-triangles'] = '  
  <div data-name="coins-and-triangles" class="itr_coin_wrap">
    <div class="itr_coin--width">
      <div class="itr_coin_elem coins-and-triangles_1" id="">
        <div class="coins-and-triangles-img-src_1"></div>
      </div>
      <div class="itr_coin_elem coins-and-triangles_2" id="">
        <div class="coins-and-triangles-img-src_1"></div>
      </div>
      <div class="itr_coin_elem coins-and-triangles_3" id="">
        <div class="coins-and-triangles-img-src_1"></div>
      </div>
      <div class="itr_coin_elem coins-and-triangles_4" id="">
        <div class="coins-and-triangles-img-src_1"></div>
      </div>
      <div class="itr_coin_elem coins-and-triangles_5" id="">
        <div class="coins-and-triangles-img-src_1"></div>
      </div>
      <div class="itr_coin_elem coins-and-triangles_6" id="">
        <div class="coins-and-triangles-img-src_1"></div>
      </div>
      <div class="itr_coin_elem coins-and-triangles_7" id="">
        <div class="coins-and-triangles-img-src_1"></div>
      </div>
      <div class="itr_coin_elem coins-and-triangles_8" id="">
        <div class="coins-and-triangles-img-src_1"></div>
      </div>
      <div class="itr_coin_elem coins-and-triangles_9" id="">
        <div class="coins-and-triangles-img-src_1"></div>
      </div>
      <div class="itr_coin_elem coins-and-triangles_10" id="">
        <div class="coins-and-triangles-img-src_1"></div>
      </div>
    </div>
  </div>';
  $coin_array['a-coin-necklace'] = '  
  <div data-name="a-coin-necklace" class="itr_coin_wrap">
    <div class="itr_coin--width">
      <div class="itr_coin_elem a-coin-necklace_1" id="">
        <div class="a-coin-necklace-img-src_1"></div>
      </div>
      <div class="itr_coin_elem a-coin-necklace_2" id="">
        <div class="a-coin-necklace-img-src_1"></div>
      </div>
      <div class="itr_coin_elem a-coin-necklace_3" id="">
        <div class="a-coin-necklace-img-src_1"></div>
      </div>
      <div class="itr_coin_elem a-coin-necklace_4" id="">
        <div class="a-coin-necklace-img-src_1"></div>
      </div>
      <div class="itr_coin_elem a-coin-necklace_5" id="">
        <div class="a-coin-necklace-img-src_1"></div>
      </div>
      <div class="itr_coin_elem a-coin-necklace_6" id="">
        <div class="a-coin-necklace-img-src_1"></div>
      </div>
      <div class="itr_coin_elem a-coin-necklace_7" id="">
        <div class="a-coin-necklace-img-src_1"></div>
      </div>
      <div class="itr_coin_elem a-coin-necklace_8" id="">
        <div class="a-coin-necklace-img-src_1"></div>
      </div>
      <div class="itr_coin_elem a-coin-necklace_9" id="">
        <div class="a-coin-necklace-img-src_1"></div>
      </div>
    </div>
  </div>';
  $coin_array['growing-the-tree'] = '  
  <div data-name="growing-the-tree" class="itr_coin_wrap">
    <div class="itr_coin--width">
      <div class="itr_coin_elem growing-the-tree_1" id="">
        <div class="growing-the-tree-img-src_1"></div>
      </div>
      <div class="itr_coin_elem growing-the-tree_2" id="">
        <div class="growing-the-tree-img-src_1"></div>
      </div>
      <div class="itr_coin_elem growing-the-tree_3" id="">
        <div class="growing-the-tree-img-src_1"></div>
      </div>
      <div class="itr_coin_elem growing-the-tree_4" id="">
        <div class="growing-the-tree-img-src_1"></div>
      </div>
      <div class="itr_coin_elem growing-the-tree_5" id="">
        <div class="growing-the-tree-img-src_1"></div>
      </div>
      <div class="itr_coin_elem growing-the-tree_6" id="">
        <div class="growing-the-tree-img-src_1"></div>
      </div>
      <div class="itr_coin_elem growing-the-tree_7" id="">
        <div class="growing-the-tree-img-src_1"></div>
      </div>
      <div class="itr_coin_elem growing-the-tree_8" id="">
        <div class="growing-the-tree-img-src_1"></div>
      </div>
    </div>
  </div>';
  $coin_array['x-coin-challenge'] = '  
  <div data-name="x-coin-challenge" class="itr_coin_wrap">
    <div class="itr_coin--width">
      <div class="itr_coin_elem x-coin-challenge_1" id="">
        <div class="x-coin-challenge-img-src_1"></div>
      </div>
      <div class="itr_coin_elem x-coin-challenge_2" id="">
        <div class="x-coin-challenge-img-src_1"></div>
      </div>
      <div class="itr_coin_elem x-coin-challenge_3" id="">
        <div class="x-coin-challenge-img-src_1"></div>
      </div>
      <div class="itr_coin_elem x-coin-challenge_4" id="">
        <div class="x-coin-challenge-img-src_1"></div>
      </div>
      <div class="itr_coin_elem x-coin-challenge_5" id="">
        <div class="x-coin-challenge-img-src_1"></div>
      </div>
    </div>
  </div>';

  $sql = " WHERE ipb.id = '1' ";
  $limit = ' LIMIT 0, 1';
  $sort = " ASC ";
  $order_by = 'ipb.id';

  $array_index_php_banner = get_table_index_page_banners($sql, $link,  $limit, $sort, $order_by);


  $where_sql_array = '';
  if (isset($array_index_php_banner[0]['section3_banner_id_1'])) {
    if ($array_index_php_banner[0]['section3_banner_id_1']) {
      $checked_puzzle_section3_banner_id_1 = $array_index_php_banner[0]['section3_banner_id_1'];
      $where_sql_array .= $checked_puzzle_section3_banner_id_1 . ",";
    }
  }
  if (isset($array_index_php_banner[0]['section3_banner_id_2'])) {
    if ($array_index_php_banner[0]['section3_banner_id_2']) {
      $checked_puzzle_section3_banner_id_2 = $array_index_php_banner[0]['section3_banner_id_2'];
      $where_sql_array .= $checked_puzzle_section3_banner_id_2 . ",";
    }
  }
  if (isset($array_index_php_banner[0]['section3_banner_id_3'])) {
    if ($array_index_php_banner[0]['section3_banner_id_3']) {
      $checked_puzzle_section3_banner_id_3 = $array_index_php_banner[0]['section3_banner_id_3'];
      $where_sql_array .= $checked_puzzle_section3_banner_id_3 . ",";
    }
  }
  if (isset($array_index_php_banner[0]['section3_banner_id_4'])) {
    if ($array_index_php_banner[0]['section3_banner_id_4']) {
      $checked_puzzle_section3_banner_id_4 = $array_index_php_banner[0]['section3_banner_id_4'];
      $where_sql_array .= $checked_puzzle_section3_banner_id_4 . ",";
    }
  }

  if ($where_sql_array) {
    $where_sql_array = trim($where_sql_array, ",");
  }

  // ======================== START Puzzle Classic SHOW IMAGE Дневная цикличность текущий день взять. ==================================
  $puzzle_coin_url_to_game_1 = "";
  $puzzle_coin_url_to_game_2 = "";
  $puzzle_coin_url_to_game_3 = "";
  $puzzle_coin_url_to_game_4 = "";

  $puzzle_coin_image_banner_1 = "";
  $puzzle_coin_image_banner_2 = "";
  $puzzle_coin_image_banner_3 = "";
  $puzzle_coin_image_banner_4 = "";

  $puzzle_coin_title_1 = "";
  $puzzle_coin_title_2 = "";
  $puzzle_coin_title_3 = "";
  $puzzle_coin_title_4 = "";

  $puzzle_coin_descriptions_1 = "";
  $puzzle_coin_descriptions_2 = "";
  $puzzle_coin_descriptions_3 = "";
  $puzzle_coin_descriptions_4 = "";

  $puzzle_coin_categories_title_1 = "";
  $puzzle_coin_categories_title_2 = "";
  $puzzle_coin_categories_title_3 = "";
  $puzzle_coin_categories_title_4 = "";

  $puzzle_coin_size_1 = 0;
  $puzzle_coin_size_2 = 0;
  $puzzle_coin_size_3 = 0;

  $puzzle_coin_moves_1 = 0;
  $puzzle_coin_moves_2 = 0;
  $puzzle_coin_moves_3 = 0;

  $puzzle_css_1 = 0;
  $puzzle_css_2 = 0;
  $puzzle_css_3 = 0;
  $puzzle_css_4 = 0;

  if ($where_sql_array) {
    $sql = "   WHERE cp.id IN(" . $where_sql_array . ") "; //  AND pc.date_added <= ".$time_puzzle_coin."  
  } else {
    $sql = ""; //  AND pc.date_added <= ".$time_puzzle_coin."
  }

  $limit = ' LIMIT 0, 4';
  $sort = " DESC ";
  $action = "";
  $order_by = ' cp.date_added  ';
  $get_array_coin_grid = true;

  $create_add_id_for_puzzle = true;
  $array_puzzle_coin = get_table_coin_puzzles($sql, $link, $limit, $sort, $get_array_coin_grid,  $order_by, $action, $create_add_id_for_puzzle);


  $select_puzzle_coin = '  ';
  if (isset($array_all_puzzle_coin)) {
    if ($array_all_puzzle_coin) {
      foreach ($array_all_puzzle_coin as $key => $val) {

        $id_puz = 0;
        if (isset($val['id'])) {
          if ($val['id']) {
            $id_puz = $val['id'];
          }
        }

        $title_puz = "";
        if (isset($val['title'])) {
          if ($val['title']) {
            $title_puz = $val['title'];
          }
        }

        $title = clear_string($val['title']);
        $title = addcslashes($title, "'");
        $title_url = create_title_xml($title);
        $puzzle_coin_url_to_game = "/coin-puzzles/coins.html#" . $title_url;

        $select_puzzle_coin .= "<li class=\"dropdown__list-item\" data-value=''><a href='" . $puzzle_coin_url_to_game . "'>" . $title_puz . "</a></li>";
      }
    }
  }
  $ampersand_save_in_title = true;
  $delimited = "";
  $big_date = 0;
  $bigest_section = 0;
  $puzzle_coin_black_figure = 0;
  $puzzle_coin_white_figure = 0;
  $categories_title = '';
  $v = '';
  // Взять картинку для первого банера, по последнему месяцу.

  $puzzle_coin_image_banner = "";
  if (isset($array_puzzle_coin)) {
    if ($array_puzzle_coin) {
      foreach ($array_puzzle_coin as $key => $val) {

        //$puzzle_coin_image_banner = "/puzzlebase/images-puzzle-classics/".$val['image_banner']; 
        // if ($val['image_banner']) {
        //   $puzzle_coin_image_banner =  HTTP_SERVER . "/" . CHESS_PUZZLES_FOLDER . "/images/" . $val['image_banner'];
        // }

        $id_puzzle_coin = 0;
        if (isset($val['id'])) {
          if ($val['id']) {
            $id_puzzle_coin = $val['id'];
          }
        }
        $puzzle_coin_black_figure = 0;
        $puzzle_coin_white_figure = 0;

        $description = clear_string($val['description']);

        $name_title = $val['title'];
        $date_added = $val['date_added'];
        // $categories_title = $val['categories_title'];

        $title = clear_string($val['title']);
        $title = addcslashes($title, "'");
        $title_url = create_title_xml($title);
        $title_without_spec_symbol = create_title_xml($title, $delimited, $ampersand_save_in_title);
        $title_without_spec_symbol = str_replace("___", "-", $title_without_spec_symbol);
        $title_without_spec_symbol = str_replace("__", "-", $title_without_spec_symbol);
        $title_without_spec_symbol = str_replace("---", "-", $title_without_spec_symbol);
        $title_without_spec_symbol = str_replace("--", "-", $title_without_spec_symbol);

        $puzzle_coin_url_to_game = "/coin-puzzles/index.php?name=" . $title_url . "&id=" . $id_puzzle_coin;
        $coin_puzzles_url =  " #" . $title_without_spec_symbol;

        $html_coins_code = "";
        if (isset($coin_puzzles_url)) {
          if ($coin_puzzles_url) {


            $pos_square = strrpos($coin_puzzles_url, '#'); // поиск позиции точки с конца строки
            //$have_image_logic = false;


            if (isset($pos_square)) {
              if ($pos_square) {

                $parts = explode("#", $coin_puzzles_url);
                if (isset($parts[1])) {
                  if ($parts[1]) {
                    $name_img = $parts[1]; // #cabins-for-rent 
                    //  $searh_img_from_folder = WWW_UNIPUZZLE_COM.'/coin-puzzles/dataxml/'.$name_img.'.xml';
                    $searh_img_from_folder = $searh_parsing_img_from_folder . $name_img . '.xml'; //  './coin-puzzles/dataxml/'

                    if (array_key_exists($title_url, $coin_array)) {
                      $html_coins_code =  $coin_array[$title_url];
                    } else {
                      $html_coins_code =  create_coin_puzzle_img($searh_img_from_folder, $array_coins_currency);
                    }
                    // echo '<div style="position:relative; float:left; width:70px; height:70px;">'. $html_coins_code.'</div>';
                  }
                }
              }
            }
          }
        }
        if ($date_added > $big_date) {
          $big_date = $date_added;
          $bigest_section = $id_puzzle_coin;
        }
        // change for id = 1
        if ($checked_puzzle_section3_banner_id_1 == $id_puzzle_coin) {
          $puzzle_css_1 = $title_url . ".css";
          $puzzle_coin_url_to_game_1 = "/coin-puzzles/coins.html#" . $title_url;
          $puzzle_coin_image_banner_1 = $html_coins_code;
          $puzzle_coin_title_1 = cut_string_without_point($name_title, 37);
          $puzzle_coin_descriptions_1 = cut_string_without_point($description, 75);
          // $puzzle_coin_categories_title_1 = $categories_title;
          $puzzle_coin_size_1 = $size;
          // $puzzle_coin_moves_1 = $puzzle_coin_moves;
        }
        // change for id = 2
        elseif ($checked_puzzle_section3_banner_id_2 == $id_puzzle_coin) {
          $puzzle_css_2 = $title_url . ".css";
          $puzzle_coin_url_to_game_2 = "/coin-puzzles/coins.html#" . $title_url;
          $puzzle_coin_image_banner_2 = $html_coins_code;
          $puzzle_coin_title_2 = cut_string_without_point($name_title, 37);
          $puzzle_coin_descriptions_2 = cut_string_without_point($description, 75);
          // $puzzle_coin_categories_title_2 = $categories_title;
          $puzzle_coin_size_2 = $size;
          // $puzzle_coin_moves_2 = $puzzle_coin_moves;
        }
        // change for id = 3
        elseif ($checked_puzzle_section3_banner_id_3 == $id_puzzle_coin) {
          $puzzle_css_3 = $title_url . ".css";
          $puzzle_coin_url_to_game_3 = "/coin-puzzles/coins.html#" . $title_url;
          $puzzle_coin_image_banner_3 = $html_coins_code;
          $puzzle_coin_title_3 = cut_string_without_point($name_title, 37);
          $puzzle_coin_descriptions_3 = cut_string_without_point($description, 75);
          // $puzzle_coin_categories_title_3 = $categories_title;
          $puzzle_coin_size_3 = $size;
          // $puzzle_coin_moves_3 = $puzzle_coin_moves;
        }
        // change for id = 4
        elseif ($checked_puzzle_section3_banner_id_4 == $id_puzzle_coin) {
          $puzzle_css_4 = $title_url . ".css";
          $puzzle_coin_url_to_game_4 = "/coin-puzzles/coins.html#" . $title_url;
          $puzzle_coin_image_banner_4 = $html_coins_code;
          $puzzle_coin_title_4 = cut_string_without_point($name_title, 37);
          $puzzle_coin_descriptions_4 = cut_string_without_point($description, 75);
          // $puzzle_coin_categories_title_3 = $categories_title;
          $puzzle_coin_size_4 = $size;
          // $puzzle_coin_moves_4 = $puzzle_coin_moves;
        }
      }
    }
  }

  // puzzle_coin_logo_v1_v4.svg
  // ======================== Finish Puzzle Classic SHOW IMAGE ==================================
  ?>
 <link rel="stylesheet" href="/coin-puzzles/datacss/<?= $puzzle_css_1 ?>">
 <link rel="stylesheet" href="/coin-puzzles/datacss/<?= $puzzle_css_2 ?>">
 <link rel="stylesheet" href="/coin-puzzles/datacss/<?= $puzzle_css_3 ?>">
 <link rel="stylesheet" href="/coin-puzzles/datacss/<?= $puzzle_css_4 ?>">

 <section id="coin" class="coin coin-section   ">

   <div class="wrapper-drop coin__wrapper--indent container">
     <a href="/coin-puzzles/index.php" target="_blank" class="link">
       <h2 class="logo__title section-title coin__logo-coinrgb title">COIN PUZZLES</h2>
     </a>
     <div class="form-group">
       <div class="dropdown">
         <button class="dropdown__button ">Find more COIN PUZZLES</button>
         <ul class="dropdown__list">
           <?= $select_puzzle_coin ?>
         </ul>
         <input type="text" name="select-category" value="" class="dropdown__input-hidden">
       </div>
     </div>
   </div>

   <div class="coin-desktop  coin-container ">
     <ul class="section-list container section-list__desktop container list">
       <li class="section__column--left coin__item">
         <a href="<?= $puzzle_coin_url_to_game_1 ?>" target="_blank" class="link">
           <div class="wrapper-img wrapper-img--indent-right">
             <div class="itr_coin_wrap-desktop">
               <div class="itr_coin--width itr_coin--width-adaptive">
                 <?= $puzzle_coin_image_banner_1 ?>
               </div>
             </div>
           </div>
           <div class="coin-wrap-text">
             <h3 class="coin-title"><?= $puzzle_coin_title_1 ?></h3>
             <!-- <div class="coin-text">
               <div class="coin-text-group">
                 <span class="modification">8</span>
                 <p class="item-title">Coins</p>
               </div>
               <div class="coin-text-group">
                 <span class="modification">14</span>
                 <p class="item-title">Moves</p>
               </div>
               <div class="coin-text-group modific">
                 <p class="coin-title-svg item-title">Slide+Touch2</p>
               </div>
             </div> -->
             <p class="coin-item__text"><?= $puzzle_coin_descriptions_1 ?></p>
           </div>
           <?php if ($checked_puzzle_section3_banner_id_1 == $bigest_section) { ?>
             <div class="wrapper-date-line">
               <div class="coin__date">
                 <div class="wrapper-date coin__wrapper-date ">
                   <p class="aside__text-date"><span class="aside__text--bold">NEW</span><?= date('M d', $big_date); ?></p>
                 </div>
               </div>
             </div>
           <?php } ?>
           <span class="coin__item-line"></span>
         </a>
       </li>
       <li class="section__column section__column--second coin__item">
         <a href="<?= $puzzle_coin_url_to_game_2 ?>" target="_blank" class="link">
           <div class="wrapper-img wrapper-img--indent-left">
             <div class="itr_coin_wrap-desktop">
               <div class="itr_coin--width itr_coin--width-adaptive">
                 <?= $puzzle_coin_image_banner_2 ?>
               </div>
             </div>
           </div>
           <div class="coin-wrap-text">
             <h3 class="coin-title"><?= $puzzle_coin_title_2 ?></h3>
             <!-- <div class="coin-text">
               <div class="coin-text-group">
                 <span class="modification">8</span>
                 <p class="item-title">Coins</p>
               </div>
               <div class="coin-text-group">
                 <span class="modification">14</span>
                 <p class="item-title">Moves</p>
               </div>
               <div class="coin-text-group modific">
                 <p class="coin-title-svg item-title">Slide+Touch2</p>
               </div>
             </div> -->
             <p class="coin-item__text"><?= $puzzle_coin_descriptions_2 ?></p>
           </div>
           <?php if ($checked_puzzle_section3_banner_id_2 == $bigest_section) { ?>
             <div class="wrapper-date-line">
               <div class="coin__date">
                 <div class="wrapper-date coin__wrapper-date ">
                   <p class="aside__text-date"><span class="aside__text--bold">NEW</span><?= date('M d', $big_date); ?></p>
                 </div>
               </div>
             </div>
           <?php }  ?>
         </a>
         <span class="coin__item-line"></span>
       </li>
       <li class="section__column section__column--third coin__item">
         <a href="<?= $puzzle_coin_url_to_game_3 ?>" target="_blank" class="link">
           <div class="wrapper-img wrapper-img--indent-left">
             <div class="itr_coin_wrap-desktop">
               <div class="itr_coin--width itr_coin--width-adaptive">
                 <?= $puzzle_coin_image_banner_3 ?>
               </div>
             </div>
           </div>
           <div class="coin-wrap-text">
             <h3 class="coin-title"><?= $puzzle_coin_title_3 ?></h3>
             <!-- <div class="coin-text">
               <div class="coin-text-group">
                 <span class="modification">8</span>
                 <p class="item-title">Coins</p>
               </div>
               <div class="coin-text-group">
                 <span class="modification">14</span>
                 <p class="item-title">Moves</p>
               </div>
               <div class="coin-text-group modific">
                 <p class="coin-title-svg item-title">Slide+Touch2</p>
               </div>
             </div> -->
             <p class="coin-item__text"><?= $puzzle_coin_descriptions_3 ?></p>
           </div>
           <?php if ($checked_puzzle_section3_banner_id_3 == $bigest_section) { ?>
             <div class="wrapper-date-line">
               <div class="coin__date">
                 <div class="wrapper-date coin__wrapper-date ">
                   <p class="aside__text-date"><span class="aside__text--bold">NEW</span><?= date('M d', $big_date); ?></p>
                 </div>
               </div>
             </div>
           <?php } ?>
         </a>
         <span class="coin__item-line"></span>
       </li>
       <li class="section__column--right coin__item">
         <a href="<?= $puzzle_coin_url_to_game_4 ?>" target="_blank" class="link">
           <div class="wrapper-img wrapper-img--indent-left">
             <div class="itr_coin_wrap-desktop">
               <div class="itr_coin--width itr_coin--width-adaptive">
                 <?= $puzzle_coin_image_banner_4 ?>
               </div>
             </div>
           </div>
           <div class="coin-wrap-text">
             <h3 class="coin-title"><?= $puzzle_coin_title_4 ?></h3>
             <!-- <div class="coin-text">
               <div class="coin-text-group">
                 <span class="modification">8</span>
                 <p class="item-title">Coins</p>
               </div>
               <div class="coin-text-group">
                 <span class="modification">14</span>
                 <p class="item-title">Moves</p>
               </div>
               <div class="coin-text-group modific">
                 <p class="another-svg item-title">Remove</p>
               </div>
             </div> -->
             <p class="coin-item__text"><?= $puzzle_coin_descriptions_4 ?></p>
           </div>
           <?php if ($checked_puzzle_section3_banner_id_4 == $bigest_section) { ?>
             <div class="wrapper-date-line">
               <div class="coin__date">
                 <div class="wrapper-date coin__wrapper-date ">
                   <p class="aside__text-date"><span class="aside__text--bold">NEW</span><?= date('M d', $big_date); ?></p>
                 </div>
               </div>
             </div>
           <?php } ?>
         </a>
       </li>
     </ul>
   </div>

   <div class="coin-mobile">
     <ul class="section__coin--indent list ">
       <div class="coin-bcg">
         <a href="<?= $puzzle_coin_url_to_game_1 ?>" target="_blank" class="link">
           <li class="coin-item container">
             <div class="wrapper-img--indent-right">
               <div class="">
                 <div class="">
                   <?= $puzzle_coin_image_banner_1 ?>
                 </div>
               </div>
               <!-- <img class="coin__img keypart " src="./images/sec-coin/keypart2.png" alt="UNLOCK THE KEY-PART 2"> -->
             </div>
             <!-- <img class="coin-img" width="110" height="110" src="./images/sec-coin/keypart2.png" alt="KEY-PART 2"> -->
             <div class="coin-wrap-text">
               <h3 class="coin-title"><?= $puzzle_coin_title_1 ?></h3>
               <p class="coin-item__text"><?= $puzzle_coin_descriptions_1 ?></p>
               <div class="coin-text">
                 <div class="coin-text-group">
                   <span class="modification">8</span>
                   <p class="item-title">Coins</p>
                 </div>
                 <div class="coin-text-group">
                   <span class="modification">14</span>
                   <p class="item-title">Moves</p>
                 </div>
                 <div class="coin-text-group modific">
                   <p class="coin-title-svg item-title">Slide+Touch2</p>
                 </div>
               </div>
             </div>
           </li>
         </a>
         <?php if ($checked_puzzle_section3_banner_id_1 == $bigest_section) { ?>
           <div class="skew-reverse">
             <p class="coin__item-text">
               <span class="decoration-text">NEW</span><?= date('M d', $big_date); ?>
             </p>
           </div>
         <?php } ?>
       </div>
       <div class="coin-bcg">
         <a href="<?= $puzzle_coin_url_to_game_2 ?>" target="_blank" class="link">
           <li class="coin-item container">
             <div class="wrapper-img--indent-right">
               <div class="">
                 <div class="">
                   <?= $puzzle_coin_image_banner_2 ?>
                 </div>
               </div>
                             </div>
                              <div class="coin-wrap-text">
                 <h3 class="coin-title"><?= $puzzle_coin_title_2 ?></h3>
                 <p class="coin-item__text"><?= $puzzle_coin_descriptions_2 ?></p>
                 <div class="coin-text">
                   <div class="coin-text-group">
                     <span class="modification">9</span>
                     <p class="item-title">Coins</p>
                   </div>
                   <div class="coin-text-group">
                     <span class="modification">6</span>
                     <p class="item-title">Moves</p>
                   </div>
                   <div class="coin-text-group modific">

                     <p class="coin-title-svg item-title">Slide+Touch2</p>
                   </div>
                 </div>
               </div>
           </li>
         </a>
         <?php if ($checked_puzzle_section3_banner_id_2 == $bigest_section) { ?>
           <div class="skew-reverse">
             <p class="coin__item-text">
               <span class="decoration-text">NEW</span><?= date('M d', $big_date); ?>
             </p>
           </div>
         <?php } ?>
       </div>
       <div class="coin-bcg">
         <a href="<?= $puzzle_coin_url_to_game_3 ?>" target="_blank" class="link">
           <li class="coin-item container">
             <div class="wrapper-img--indent-right">
               <div class="">
                 <div class="">
                   <?= $puzzle_coin_image_banner_3 ?>
                 </div>
               </div>
             </div>
             <div class="coin-wrap-text">
               <h3 class="coin-title"><?= $puzzle_coin_title_3 ?></h3>
               <p class="coin-item__text"><?= $puzzle_coin_descriptions_3 ?></p>
               <div class="coin-text">
                 <div class="coin-text-group">
                   <span class="modification">8</span>
                   <p class="item-title">Coins</p>
                 </div>
                 <div class="coin-text-group">
                   <span class="modification">2</span>
                   <p class="item-title">Moves</p>
                 </div>
                 <div class="coin-text-group modific">
                   <p class="coin-title-svg item-title">Slide+Touch2</p>
                 </div>
               </div>
             </div>
           </li>
         </a>
         <?php if ($checked_puzzle_section3_banner_id_3 == $bigest_section) { ?>
           <div class="skew-reverse">
             <p class="coin__item-text">
               <span class="decoration-text">NEW</span><?= date('M d', $big_date); ?>
             </p>
           </div>
         <?php } ?>
       </div>
       <div class="coin-bcg">
         <a href="<?= $puzzle_coin_url_to_game_4 ?>" target="_blank" class="link">
           <li class="coin-item container">
             <div class="wrapper-img--indent-right">
               <div class="">
                 <div class="">
                   <?= $puzzle_coin_image_banner_4 ?>
                 </div>
               </div>
               <!-- <img class="coin__img triangles" src="./images/sec-coin/triangles.png" alt="COINS & TRIANGLES"> -->
             </div>
             <div class="coin-wrap-text">
               <h3 class="coin-title"><?= $puzzle_coin_title_4 ?></h3>
               <p class="coin-item__text"><?= $puzzle_coin_descriptions_4 ?></p>
               <div class="coin-text">
                 <div class="coin-text-group">
                   <span class="modification">8</span>
                   <p class="item-title">Coins</p>
                 </div>
                 <div class="coin-text-group">
                   <span class="modification">2</span>
                   <p class="item-title">Moves</p>
                 </div>
                 <div class="coin-text-group modific">

                   <p class="another-svg item-title">Remove</p>
                 </div>
               </div>
             </div>
           </li>
         </a>
         <?php if ($checked_puzzle_section3_banner_id_4 == $bigest_section) { ?>
           <div class="skew-reverse">
             <p class="coin__item-text">
               <span class="decoration-text">NEW</span><?= date('M d', $big_date); ?>
             </p>
           </div>
         <?php } ?>
       </div>
     </ul>
   </div>
 </section>