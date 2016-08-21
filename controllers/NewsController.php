<?php

include_once ROOT."/models/News.php";

class NewsController
{
    function actionIndex()
    {
        $newsList = News::getList();
        Template::render('news/list.html', array("news" => $newsList));
        return true;
    }

    function actionView($id)
    {
        $news = News::getItemById($id);
        Template::render('news/views.html', $news);
        return true;
    }
}