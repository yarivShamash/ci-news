<?php namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
  protected $table = 'news';

  public function getNews($slug = false)
  {
    if ($slug === false)
    {
      echo 'getNews slug is false <br/>';
      return $this -> findAll();
    };

    echo 'getNews() slug is '.$slug. '<br/>';
    return $this->asArray()
                ->where(['slug' => $slug])
                ->first();
  } // when calling getNews() we will get all news, when passing an argument we get news by thier slug
}