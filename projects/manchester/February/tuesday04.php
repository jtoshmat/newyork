<?php
//foreach - Done
//for - In Progress
//while
//do while
//they work with collections, yani Uzbejkchalab bular charhpalak

$fruits =
    ['apple','orange','pear','peach','kivi','bananna','strawberry','cherry','mango','pineapple',
    'pamogranate','watermelon','melon','grapes','blueberry','dates','mandarin','cantalope','apple','apple','orange','orange'];

$fruits2 = ['olma','behi','anor','anjir'];

$results = array_merge($fruits,$fruits2);

foreach ($results as $count=>$fruit){
    if ($count>21){
     echo "<div class='uzbek'>$fruit</div> ";
    }else {
        echo "<div class='english'>$fruit</div> ";
    }

}
?>

<style>
    .uzbek{
        color: red;
    }
    .english{
        color: #0b18ff;
    }
</style>
