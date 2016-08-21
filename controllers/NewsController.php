<?php

include_once ROOT."/models/News.php";

class NewsController
{
    function actionIndex()
    {
        echo "Просмотр списка новостей";
        return true;
    }

    function actionView($category, $id)
    {
        echo "Просмотр одной новости<br>";
        echo "Категория: $category<br>";
        echo "Номер новости: $id<br>";
        var_dump(News::getItemById($id));
        return true;
    }
}