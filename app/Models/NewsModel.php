<?php namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
  // By extending CI's Model we can access the database using $this->db
  protected $table = 'news';

  public function getNews($slug = false)
  {
    if ($slug === false)
    {
      return $this -> findAll();
    };

    return $this->asArray()
                ->where(['slug' => $slug])
                ->first();
  } // when calling getNews() we will get all news, when passing an argument we get news by thier slug
}