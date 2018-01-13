<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/3/17
 * Time: 5:48 PM
 */

function is_admin($email,$password)
{
    global $db;

    //Création du tbleau qui contiendra l'ensemble des entrées
    $a = [
        //Passage des entrées en parametre
        'email'     =>  $email,
        'password'  =>  sha1($password)
    ];

    $sql = "SELECT * FROM admins WHERE email = :email AND password = :password";
    $req = $db->prepare($sql);
    $req->execute($a);
    $exist = $req->rowCount($sql);
    return $exist;
}
