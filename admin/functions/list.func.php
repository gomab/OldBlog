<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/5/17
 * Time: 8:05 AM
 */


/** Lister les articles
 * @return array
 */
function get_posts(){

    global $db;

    $req = $db->query("SELECT * FROM posts ORDER BY date DESC");

    $results = [];
    while($rows = $req->fetchObject()){
        $results[] = $rows;
    }

    return $results;


}