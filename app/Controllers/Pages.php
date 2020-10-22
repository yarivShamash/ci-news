<?php namespace App\Controllers;

use CodeIgniter\Controller;

Class Pages extends Controller
{
  public function index()
  {
    $model = new NewsModel();
    
    $data = [
      'news' => $model.getNews(),
      'title' => 'News archive',
    ];

    echo view('templates/header', $data);
    echo view('templates/overview', $data);
    echo view('templates/footer', $data);
  }

  public function view ($page = 'home')
  {
    if ( ! is_file(APPPATH.'Views/pages/'.$page.'.php'))
    {
      // If there is no file with name that matches $page, throw a 404 exception 
      throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
    }

    $data['title'] = ucfirst($page); //capitalize the first letter

    echo view('templates/header', $data); // echo the header template and pass $data as an argument to esc($title) in header.php
    echo view('pages/'.$page, $data); // echo the content of the page
    echo view('templates/footer', $data); // echo the footer template
  }
}