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

        if (isset($_POST['title']) && isset($_POST['upload'])) {
            $target_dir = "uploads/";
            $filename = $_FILES["uploadfile"]["name"];

            $article = new Article($_POST['title'], $_POST['text'], $filename);
            move_uploaded_file($_FILES['uploadfile']['tmp_name'],$target_dir.$filename);

            $article->save();
            header("Location: ?c=blog");

        }


        return [];
    }

    public function edit()
    {
        $id = $_GET['id'];
        $article = new Article();
        $article->getOne($id);
        $target_dir = "uploads/";

        if (isset($_POST['title']) && isset($_POST['upload']))
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