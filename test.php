<?php
/* 
Test file

Tested for links:
http://localhost/index.php
http://localhost/
http://localhost/index.php/
http://localhost/url/index.php
http://localhost/url/index.php/
http://localhost/url/ab
http://localhost/url/ab/c

*/
/* importamos nuestro trail URL para poder obtener el serve name */
require_once 'config.php';

class Home
{
    use URL;
}
$h = new Home();

?>
<!-- <a href="<?=$h->get['base_url'].'/views/temario/index.php'?>">Base Testear</a> -->