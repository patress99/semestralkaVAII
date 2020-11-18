<?php


namespace App\Controllers;


use App\Core\AControllerBase;
use App\Models\Article;
use App\Models\CsvStorage;
class BlogController extends AControllerBase
{

    public function index()
    {
        //$storage = new CsvStorage();
        return [
            'articles' => Article::getAll()
        ];
    }
    public function add()
    {

        if (isset($_POST['title'])) {
            $filename = $_FILES["uploadfile"]["name"];
            $target_dir = "uploads/";
            $tempname = $_FILES['uploadfile']['tmp_name'];
            if(@is_array(getimagesize($tempname))){
                $article = new Article($_POST['title'], $_POST['text'], $filename);
                move_uploaded_file($_FILES['uploadfile']['tmp_name'], $target_dir . $filename);
                $article->save();
                header("Location: ?c=blog");
            } else {
                ?> <p style="color: red; size: 15px">Nepodporovaný formát obrázku!</p> <?php
            }

        }


        return [];
    }

    public function edit()
    {
        $id = $_GET['id'];
        $article = new Article();
        $article->getOne($id);


        if (isset($_POST['title']))
        {

            $article->setText($_POST['text']);
            $article->setTitle($_POST['title']);
            $article->save();
            header("Location: ?c=blog");


        }


        return [
          'article' => $article
        ];


    }

    public function delete()
    {
        $target_dir = "uploads/";
        $id = $_GET['id'];
        $article = new Article();
        $article->getOne($id);
        unlink($target_dir.$article->getFilename());
        $article->delete();
        header("Location: ?c=blog");

        exit();

    }




}