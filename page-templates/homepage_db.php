<?php
/*
 * Template Name: homepage_db
 */
//訊息公告
if (isset($_REQUEST['type'])) {

    /* 訊息公告nav內request 
     ** 回傳所屬頁面跟數量及category的post
     ** param: 'data_per_page', 'category', 'page'
     */
    if ($_REQUEST['type'] == "msg-title") {
        $datas = array();
        $cat_id = get_cat_ID($_REQUEST['category']);
        $posts = get_posts(array('category' => $cat_id, 'numberposts' => $_REQUEST['data_per_page']));

        for ($i = 0; $i < sizeof($posts); $i++) {
            $title = $posts[$i]->post_title;
            //$arr = explode("\n", $posts[$i]->post_content);
            $time_title = array();
            $date = get_the_date('Y-m-d', $posts[$i]->ID);
            $time_title["date"] = $date;
            $time_title["title"] = $title;
            array_push($datas, $time_title);
            // for($j = 0; $j < sizeof($arr); $j++){
            //     $arr[$j] = str_replace(']]>', ']]&gt;', $arr[$j]);
            //     if(strlen($arr[$j]) == 0)
            //         continue; 
            //     array_push($datas, $arr[$j]);
            // }

        }
        echo json_encode($datas, JSON_UNESCAPED_UNICODE);

    }
}

?>
