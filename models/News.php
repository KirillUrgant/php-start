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
        //
    }
}