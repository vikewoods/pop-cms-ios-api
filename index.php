<?php
if(isset($_GET['show_info']) && $_GET['show_info'] === 'vedev')
{
  phpinfo();
}else{
  header("HTTP/1.0 404 Not Found");
  die('Error: HTTP Return 404: Not Found');
}
?>
