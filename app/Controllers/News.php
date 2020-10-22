<?php namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Controller;

class News extends Controller
{

  public function index()
  {
    $model = new NewsModel();
    
    $data = [
      'news' => $model->getNews(),
      'title' => 'News archive',
    ];
    
echo 'index() $data: ' . json_encode($data) . '<br />';

     echo view('templates/header', $data);
     echo view('news/overview', $data);
     echo view('templates/footer', $data);
  }

  public function view($slug = null)
  {
      $model = new NewsModel();

      $data['news'] = $model->getNews($slug);

      if (empty($data['news']))
      {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '. $slug);
      }
    
echo 'view() $data: ' . json_encode($data) . '<br />';
echo 'view() $slug: ' . $slug . '<br />';

      $data['title'] = $data['news']['title'];

      echo view('templates/header', $data);
      echo view('news/view', $data);
      echo view('templates/footer', $data);
  }
}
  
  