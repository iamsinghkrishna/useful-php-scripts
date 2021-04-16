1.  $s = '06/10/2011 19:00:02';
    $date = strtotime($s);
    echo date('d/M/Y H:i:s', $date);
    echo date('H:i A, d F Y', time());

