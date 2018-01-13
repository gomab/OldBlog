<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/4/17
 * Time: 8:28 PM
 */


/**Apload du post sans image
 * @param $title
 * @param $content
 * @param $posted
 */
function post($title,$content,$posted){
    global $db;

    //Stockage dans la variable $p
    $p = [
        'title'     =>  $title,
        'content'   =>  $content,
        'writer'    =>  $_SESSION['admin'],
        'posted'    =>  $posted

    ];

    $sql = "
      INSERT INTO posts(title,content,writer,date,posted)
      VALUES(:title,:content,:writer,NOW(),:posted)
    ";

    $req = $db->prepare($sql);
    $req->execute($p);

}


/**Post image
 * @param $tmp_name
 * @param $extension
 */
function post_img($tmp_name,$extension){
    global $db;
    $id = $db->lastInsertId();
    $i = [
        'id'    =>  $id,
        'image' =>  $id.$extension      //$id = 25 , $extension = .jpg      $id.$extension = "25".".jpg" = 25.jpg
    ];

    $sql = "UPDATE posts SET image = :image WHERE id = :id";
    $req = $db->prepare($sql);
    $req->execute($i);
    move_uploaded_file($tmp_name,"../site/assets/img/posts/".$id.$extension);
    header("Location:index.php?page=post&id=".$id);
}