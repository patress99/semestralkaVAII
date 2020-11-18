<?php


namespace App\Controllers;


use App\Core\AControllerBase;
use App\Models\Item;
use App\Models\CsvStorage;
class PricelistController extends AControllerBase
{

    public function index()
    {
        //$storage = new CsvStorage();
        return [
            'items' => Item::getAll()
        ];
    }
    public function add()
    {

        if (isset($_POST['title'])) {
            $filename = $_FILES["uploadfile"]["name"];
            $target_dir = "uploads/";
            $tempname = $_FILES['uploadfile']['tmp_name'];
            if(@is_array(getimagesize($tempname))){
                $item = new Item($_POST['title'], $_POST['text'], $filename);
                move_uploaded_file($_FILES['uploadfile']['tmp_name'], $target_dir . $filename);
                $item->save();
                header("Location: ?c=pricelist");
            } else {
                ?> <p style="color: red; size: 15px">Nepodporovaný formát obrázku!</p> <?php
            }

        }


        return [];
    }

    public function edit()
    {
        $id = $_GET['id'];
        $item = new Item();
        $item->getOne($id);


        if (isset($_POST['title']))
        {

            $item->setText($_POST['text']);
            $item->setTitle($_POST['title']);
            $item->save();
            header("Location: ?c=pricelist");


        }


        return [
          'items' => $item
        ];


    }

    public function delete()
    {
        $target_dir = "uploads/";
        $id = $_GET['id'];
        $item = new Item();
        $item->getOne($id);
        unlink($target_dir.$item->getFilename());
        $item->delete();
        header("Location: ?c=pricelist");

        exit();

    }




}