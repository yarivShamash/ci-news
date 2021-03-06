<h2><?= esc($title); ?></h2>

<?php if (! empty($news) && is_array($news)) : ?>

  <?php foreach ($news as $news_item) : ?>

    <h3><?= esc($news_item['title']); ?></h3>

    <div>
      <?= esc($news_item['body']); ?>
    </div>

    <p><a href="/news/<?= esc(str_replace(' ', '-', strtolower($news_item['title'])), 'url'); ?>">View article</a></p>
    <!-- url_title($news_item['title]) should make it lower case and replace spaces with dashes as well -->
  
  <?php endforeach; ?>

<?php else : ?>

  <h3>No News</h3>

  <p>Unable to find any news for you.</p>

<?php endif ?>
