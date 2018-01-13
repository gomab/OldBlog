<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/2/17
 * Time: 7:17 AM
 */

/**Affiche les articles du blog
 * @return array
 */
function get_posts(){
    global $db;

    $req = $db->query('
            SELECT posts.id,
                   posts.title,
                   posts.content,
                   posts.date,
                   posts.image,
                   admins.name
            FROM posts
            JOIN admins
            ON posts.writer=admins.email
            WHERE posted=1
            GROUP BY date DESC         
  
    ');

    $results = [];

    while ($rows = $req->fetchObject()){
        $results[] = $rows;
    }

    return $results;
}