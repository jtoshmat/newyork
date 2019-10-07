<?php
include_once 'Federal.php';

class Iowa extends Federal
{
    public function votingage()
    {
        return 'voting age in Iowa is 21 years old';
    }

}
 $iowa = new Iowa();
$iowa->name = "Iowa";
echo $iowa->votingage();
echo $iowa->tobaccorestriction();






