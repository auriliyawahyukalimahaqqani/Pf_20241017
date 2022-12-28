<?php
echo date ("1. d-m-y");

// detik yang sudah berlalu sejak 1 januari 1970
echo time();
echo date("I d M Y",time ()-60*60*24*100);

// mktime
// membuat sendiri 1 januari 1970 sampai waktu yang diinginkan
echo mktime (0,0,0,10,10,2001);
echo date ("I d M Y", mktime (0,0,0,10,10,2001));

//strtotime
$date = strtotime("10 Okt 2001");
echo date("I d M Y", strtotime ("10 Okt 2001"));