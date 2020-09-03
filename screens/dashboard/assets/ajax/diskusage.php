<?php

  $path = isset($_REQUEST['path']) ? $_REQUEST['path'] : '/';
  if (!file_exists($path)) exit('100');

  // if o is set, grab it. This lets us change the output version to something other than just percent usage
  $o = isset($_REQUEST['o']) ? $_REQUEST['o'] : 'percent';

  /* get disk space free (in bytes) */
  $df = disk_free_space($path);
  /* and get disk space total (in bytes)  */
  $dt = disk_total_space($path);
  /* now we calculate the disk space used (in bytes) */
  $du = $dt - $df;
  /* percentage of disk used - this will be used to also set the width % of the progress bar */
  $dp = sprintf('%.2f',($du / $dt) * 100);

  /* Format the size from bytes to MB, GB, etc. */
  $df = formatSize($df);
  $du = formatSize($du);
  $dt = formatSize($dt);

  function formatSize( $bytes ) {
    $types = array( 'B', 'KB', 'MB', 'GB', 'TB' );
    for( $i = 0; $bytes >= 1024 && $i < ( count( $types ) -1 ); $bytes /= 1024, $i++ );
    return( round( $bytes, 2 ) . " " . $types[$i] );
  }

  if ($o == 'percent') {
    echo $dp;
  } elseif ($o == 'use') {
    echo $du . ' / ' . $dt;
  }

?>
