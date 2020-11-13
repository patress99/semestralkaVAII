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
            $article = new Article($_POST['title'], $_POST['text']);
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
        $id = $_GET['id'];
        $article = new Article();
        $article->getOne($id);
        $article->delete();
        header("Location: ?c=blog");

        exit();

    }

    public function upload()
    {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

    }

}