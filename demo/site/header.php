
<div class="myheader">
    <img class="logo" src="https://www.qousqazah.com/blog/wp-content/uploads/2018/01/features-of-a-business-logo.png">
    <div class="mytitle">
        Welcome to my site <?=$page?>!
    </div>
</div>
<div class="mynavbar">
    <nav>
        <?php
        $class = null;
        for ($i=1; $i<5; $i++){
            if ($i==$page){
                $class = " class='active' ";
            }else{
                $class = null;
            }
            echo "<a $class href=\"page$i.php\"> Page $i </a>";
        }
        ?>
    </nav>
</div>