<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/4/17
 * Time: 6:39 AM
 */

?>

<h2>Poster un article</h2>


<?php

if(isset($_POST['post'])){
    $title = htmlspecialchars(trim($_POST['title']));
    $content = htmlspecialchars(trim($_POST['content']));
    //Si jamais ca existe la variable posted sera 1 sinon 0
    $posted = isset($_POST['public']) ? "1" : "0";

    //Tableau qui va contenir toutes les erreurs
    $errors = [];

    //Si tous les champs ne sont pas remplis
    if(empty($title) || empty($content)){
        $errors['empty'] = "Veuillez remplir tous les champs";
    }

    //Si l'image n'est pas vide
    if(!empty($_FILES['image']['name'])){
        $file = $_FILES['image']['name'];
        $extensions = ['.png','.jpg','.jpeg','.gif','.PNG','.JPG','.JPEG','.GIF'];
        $extension = strrchr($file,'.');

        //Si l'extension ne se trouve pas dans le tableau extensions
        if(!in_array($extension,$extensions)){
            $errors['image'] = "Cette image n'est pas valable";
        }
    }

    //Affichage des erreurs
    if(!empty($errors)){
        ?>
        <div class="card red">
            <div class="card-content white-text">
                <?php
                    foreach($errors as $error){
                        echo $error."<br/>";
                    }
                ?>
            </div>
        </div>
        <?php
    }else{
        // S'il n'y a pas d'erreurs upload du post sans image
        post($title,$content,$posted);

        //Si on a une image
        if(!empty($_FILES['image']['name'])){
            post_img($_FILES['image']['tmp_name'],$extension);
        }else{
            $id = $db->lastInsertId();
            header("Location:index.php?page=post&id=".$id);
        }
    }
}


?>



<form method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="input-field col s12">
            <input type="text" name="title" id="title"/>
            <label for="title">Titre de l'article</label>
        </div>

        <div class="input-field col s12">
            <textarea name="content" id="content" class="materialize-textarea"></textarea>
            <label for="content">Contenu de l'article</label>
        </div>

        <div class="col s12">
            <div class="input-field file-field">
                <div class="btn col s3">
                    <span>Image de l'article</span>
                    <input type="file" name="image" class="col s12"/>
                </div>
                <div class="file-path-wrapper">
                    <input type="text" class="file-path col s12" readonly/>
                </div>
            </div>
        </div>

        <div class="col s6">
            <p>Public</p>
            <div class="switch">
                <label>
                    Non
                    <input type="checkbox" name="public"/>
                    <span class="lever"></span>
                    Oui
                </label>
            </div>
        </div>

        <div class="col s6 right-align">
            <br/><br/>
            <button class="btn" type="submit" name="post">Publier</button>
        </div>

    </div>



</form>