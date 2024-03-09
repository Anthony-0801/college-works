<?php
    // http://simplehtmldom.sourceforge.net/
    // MANUAL: http://simplehtmldom.sourceforge.net/manual.htm
    
    require("simple_form_dom.php");
    $html = file_get_html("https://www.bing.com/search?q=software+engineer");

    // Find all images 
    foreach($html->find('img') as $element) 
       echo $element->src . '<br>';

    // Find all links 
    foreach($html->find('a') as $element) 
       echo $element->href . '<br>';


