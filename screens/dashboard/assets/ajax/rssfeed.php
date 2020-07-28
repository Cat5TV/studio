<?php
  $feedurl = isset($_REQUEST['feed']) ? $_REQUEST['feed'] : 'https://category5.tv/feed';
  $feed = @simplexml_load_file($feedurl);
  $count=0;
  if (is_object($feed) && count($feed) > 0) {
    foreach ($feed->channel->item as $item) {
      $title       = (string) $item->title;
      echo $title . str_repeat('&nbsp;',10);
      if ($count++ == 20) break; // Limit the number of RSS headlines
    }
  } else {
    echo 'Data feed not available.';
  }
?>
