<?php
  $title = "Community News";
  include $_SERVER['DOCUMENT_ROOT']."/inc/header.php";
  include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/autoloader.php';

  $urls = file('urls.txt');
  $feed = new SimplePie();
  $feed->set_feed_url($urls);
  $feed->set_cache_location($_SERVER['DOCUMENT_ROOT'] . '/community-news/cache');
  $feed->enable_cache();
  $feed->init();
  $max = $feed->get_item_quantity();
  $start = (isset($_GET['page']) && !empty($_GET['page'])) ? $_GET['page'] : 0;
  $entries = 6; //entries per page
?>
    <div id="content">
      <h2 role="heading">Community News</h2>
      <?php foreach ($feed->get_items($start, $entries) as $item): ?>
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
      <?php
        $next = (int) $start + $entries;
        $prev = (int) $start - $entries;
        $nextlink = '<a href="?page=' . $next . '"> Next &raquo; </a>';
        if ($next > $max) {
          $nextlink = ' Next &raquo; ';
        }
        $prevlink = '<a href="?start=' . $prev . '"> &laquo; Previous </a>';
        if ($prev < 0 && (int) $start > 0) {
          $prevlink = '<a href="?start=0">&laquo; Previous </a>';
        }
        else if ($prev < 0) {
          $prevlink = '&laquo; Previous ';
        }
        $begin = (int) $start + 1;
        $end = ($next > $max) ? $max : $next;
        echo '<p>' . $prevlink . $nextlink . '</p>';
      ?>
    </div>
<?php include $_SERVER['DOCUMENT_ROOT']."/inc/footer.php"; ?>
