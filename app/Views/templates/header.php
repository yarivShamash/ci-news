<!DOCTYPE html>
<head>
  <title>CI-news</title>
</head>
<body>
  <h1><?= esc($title); ?></h1> <!-- $title will be used to costumize the page's title -->
  <!-- 
    esc() is a CodeIgniter global function to help pervent XSS attacks
    more on it here: https://codeigniter.com/user_guide/general/common_functions.html
   -->