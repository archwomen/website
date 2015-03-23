<?php
  $title = "Community News";
  include $_SERVER['DOCUMENT_ROOT']."/inc/header.php";
  include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/autoloader.php';

  $urls = file('urls.txt');
  $feed = new SimplePie();
  $feed->set_feed_url($urls);
  //$feed->enable_cache();
  $feed->init();
?>
    <div id="content">
      <h2 role="heading">Community News</h2>
      <?php foreach ($feed->get_items(0, 20) as $item): ?>
        <article class="feed">
        <?php
          if ($item->get_permalink()) echo '<a href="' . $item->get_permalink() . '">';
          echo '<h3>' . $item->get_title(true) . '</h3>';
          if ($item->get_permalink()) echo '</a>';
        ?>
          <h4>
          <?php
            if ($author = $item->get_author()) echo $author->get_name() . ', ';
            if ($item->get_date('F j, Y')) echo $item->get_date('F j, Y');
          ?>
          </h4>
          <p><?php print $item->get_content(false); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
<?php include $_SERVER['DOCUMENT_ROOT']."/inc/footer.php"; ?>
