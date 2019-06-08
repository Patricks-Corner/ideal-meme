$videospider_movie = file_get_contents('https://videospider.in/getticket.php?key=JhhbVDPq3GIdkhuE&secret_key=a10ro5sbabnvycg0dfn1dn1h7h26bn&video_id='.$_GET["id"].'&tmdb=1&ip='.$_SERVER["REMOTE_ADDR"]); 
$videospider_tv = file_get_contents('https://videospider.in/getticket.php?key=JhhbVDPq3GIdkhuE&secret_key=a10ro5sbabnvycg0dfn1dn1h7h26bn&video_id='.$_GET["tvid"].'&tmdb=1&s='.$_GET["season"].'&ip='.$_SERVER["REMOTE_ADDR"]);
echo json_encode(array( 
"ticket_mv" => $videospider_movie, 
"ticket_tv" => $videospider_tv, 
)); 
?>
