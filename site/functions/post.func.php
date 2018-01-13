<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/2/17
 * Time: 9:26 AM
 */


/** Poste un artcile
 * @return mixed
 */
function get_posts(){
    global  $db;

    $req = $db->query("
            SELECT posts.id,
                   posts.title,
                   posts.image,
                   posts.content,
                   posts.date,
                   admins.name
            FROM posts
            JOIN admins
            ON posts.writer=admins.email
            WHERE posts.id='{$_GET['id']}'
            AND posts.posted='1'       
    
    ");

    $result = $req->fetchObject();

    return $result;
}

/**Fonction qui sauvegarde les commentaires
 * @param $name
 * @param $email
 * @param $comment
 */
function comments($name,$email,$comment){
    global $db;

    $c = array(
            'name'    => $name,
            'email'   => $email,
            'comment' => $comment,
            'post_id' => $_GET['id']

    );

    $sql ="INSERT INTO comments(name,email,comment,post_id,date) VALUES(:name, :email, :comment, :post_id, NOW())";
    $req = $db->prepare($sql);
    $req->execute($c);
}

/**Fonction qui affiche les commentaires
 * @return array
 */
function get_comments(){
    global $db;

    $req = $db->query("SELECT * FROM comments WHERE post_id='{$_GET['id']}' ORDER BY date ASC");

    $results = [];

    while ($rows = $req->fetchObject()){
        $results[] = $rows;
    }

    return $results;

}