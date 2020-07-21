<?php

  $feedurl = isset($_REQUEST['feed']) ? $_REQUEST['feed'] : 'https://category5.tv/feed';
  $feed = simplexml_load_file($feedurl);
  foreach ($feed->channel->item as $item) {
    $title       = (string) $item->title;
    echo $title . str_repeat('&nbsp;',10);
  }

?>
