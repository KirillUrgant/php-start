<?php

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
        return true;
    }
}