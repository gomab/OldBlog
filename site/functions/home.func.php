<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/1/17
 * Time: 11:44 PM
 */

/**Affiche les trois derniers articles du blog
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
            LIMIT 0,3   

    ');

    $results = array();

    while ($rows = $req->fetchObject()){
        $results[] = $rows;
    }

    return $results;
}