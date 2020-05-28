<?php

    $file = file_get_contents("piano.txt");

    //http://(www.)innovationplans.com/idesign/bemax/*.{1,100}\"

   $found = preg_match_all("#innovationplans.com/idesign/bemax/*.{1,100}\"#", $file, $urls);
   $urls = $urls[0];

   file_put_contents("documents/jon.txt", print_r($urls, true));
