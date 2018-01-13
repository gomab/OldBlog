<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/3/17
 * Time: 9:17 PM
 */

    //Function qui compte le nombre d'entrée de $table
    function inTable($table){
        //Connexion à la base de données
        global $db;
        //La requete (Pas de requetes preparees vu que le user n'insere aucune donnees)
        $query = $db->query("SELECT COUNT(id) FROM $table ");
        //Affcihe le nombre d'entrees
        return $nombre = $query->fetch();
    }


    //FOnction couleur tableau
    function getColor($table,$colors){
        if(isset($colors[$table])){
            return $colors[$table];
        }else{
            return 'orange';
        }
    }


    //Fonction qui recupere les commentaires
    function get_comments(){
        global $db;

        $req = $db->query("
                SELECT comments.id,
                       comments.name,
                       comments.email,
                       comments.date,
                       comments.post_id,
                       comments.comment,
                       posts.title
                FROM comments
                JOIN posts
                ON comments.post_id = posts.id
                WHERE comments.seen = '0'
                ORDER BY comments.date ASC      
        
        ");

        $results = [];

        while ($rows = $req->fetchObject()){
            $results[] = $rows;
        }

        return $results;
    }