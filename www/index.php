<?php
 $vcard = $_GET['vcard'];

 // set token and page
if ($vcard=="whatyouwanthere") {
    include("yourpage.html");
}
else
{
    echo "It's a good day Bro!";
}

 ?>