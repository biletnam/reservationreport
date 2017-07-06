<?php
  mysql_connect($this->paramsMenuEntry->get("server"), $this->paramsMenuEntry->get("user"), $this->paramsMenuEntry->get("password"));
  mysql_select_db($this->paramsMenuEntry->get("database"));
  $res = mysql_query("select date_format(b.slot_date, '%d.%m.%Y') AS Datum,
			SUBSTR(b.slot_time_from,1,5) AS von,
			SUBSTR(b.slot_time_to,1,5) AS bis, 
			a.reservation_message AS Guggenmusik 
 			from booking_reservation AS a join booking_slots AS b on a.slot_id = b.slot_id 
			where a.reservation_confirmed = '1' and a.reservation_cancelled = '0' order by Datum");
  
$num = mysql_num_rows($res);
  echo "$num Guggen sind bis jetzt angemeldet...<br/><br/>";

  while($dsatz = mysql_fetch_assoc($res))
  {
    echo $dsatz ["Datum"] . ",  " . $dsatz["von"] . " - " . $dsatz["bis"] . ",   " . $dsatz["Guggenmusik"] ."<br/>";
   }
?>

