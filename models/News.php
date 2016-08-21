<?php

class News
{
    public static function getItemById($id)
    {
        if ($id) {
            $db = Db::getConnection();

            $result = $db->query('SELECT * from news WHERE id='.$id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newItem = $result->fetch();

            return $newItem;
        }
    }

    public static function getList()
    {
        $db = Db::getConnection();

        $newRes = array();

        $result = $db->query('SELECT * from news');

        $i = 0;

        while ($row = $result->fetch()) {
            $newRes[$i]['id'] = $row['id'];
            $newRes[$i]['title'] = $row['title'];
            $newRes[$i]['author_name'] = $row['author_name'];
            $i++;
        }

        return $newRes;
    }
}