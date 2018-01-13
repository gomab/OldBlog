<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/5/17
 * Time: 8:22 AM
 */

/**Affiche les posts
 * where posts.id = l'id saisi dans l'url
 * @return mixed
 */
function get_post(){

    global $db;

    $req = $db->query("
        SELECT  posts.id,
                posts.title,
                posts.image,
                posts.date,
                posts.content,
                posts.posted,
                admins.name
        FROM posts
        JOIN admins
        ON posts.writer = admins.email
        WHERE posts.id = '{$_GET['id']}'
    ");

    //Pas besoin de parcourir l'ensemble des résultats car il y en aura q'un seul
    $result = $req->fetchObject();
    return $result;
}

/**MAJ
 * @param $title
 * @param $content
 * @param $posted
 * @param $id
 */
function edit($title,$content,$posted,$id){
    global $db;

    $e = [
            'title'   => $title,
            'content' => $content,
            'posted'  => $posted,
          //  'date'  => $date,
            'id'      => $id
    ];

    $sql = "UPDATE posts SET title=:title, content=:content, date=NOW(), posted=:posted WHERE id=:id";
   // $sql = "UPDATE posts SET title=:title, content=:content, date=:date, posted=:posted WHERE id=:id";
    $req =$db->prepare($sql);
    $req->execute($e);

}


