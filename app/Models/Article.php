<?php

namespace App\Models;

class Article
{
    //Fungsi test database
    protected static function getDummyData()
    {
        return [
            ['id' => 1, 'title' => 'Belajar Laravel', 'content' => 'Laravel adalah framework PHP terbaik.'],
            ['id' => 2, 'title' => 'Pengenalan MVC', 'content' => 'MVC adalah framework PHP terbaik.'],
            ['id' => 3, 'title' => 'Routing di Laravel', 'content' => 'Routing adalah framework PHP terbaik.'],
        ];
    }

    //Ambil semua data
    public static function all()
    {
        return self::getDummyData();
    }

    //Cari data dengan id
    public static function find($id)
    {
        $articles = self::getDummyData();
        foreach($articles as $article) {
            if ($article['id'] == $id) {
                return $article;
            }
        }
        return null;
    }
}