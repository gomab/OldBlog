<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/3/17
 * Time: 11:17 PM
 */

require '../functions/main-functions.php';

$db->exec("UPDATE comments SET seen='1' WHERE id='{$_POST['id']}'");