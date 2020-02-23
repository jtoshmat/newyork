<?php include_once "header.php"?>
<div id="mywrapper">
    <div class="myheader">
        <a href="index.php"><img oncontextmenu="editContent('logo');return false;" class="logo" src="<?=$content[0]['logo']??"img/attorney.png"?>"></a>
        <div class="edit_logo" style="display: none">
            <form method="post" action="savecontent.php?page=<?=$_GET['page']??1;?>">
                <input name="logo" type="text" value="<?=$content[0]['logo']?>"><button>Save</button>
            </form>

        </div>
        <div class="title"><?=$content[0]['subject']??"Welcome to Default TITLE"?></div>
    </div>
    <div class="mynav">
        <nav>
            <a href="index.php?page=2"> Home <i class="fas fa-home"></i></a>
            <a href="index.php?page=3"> About Us <i class="fab fa-adobe"></i></a>
            <a href="index.php?page=4"> Our Services <i class="fab fa-youtube"></i></a>
            <a href="index.php?page=5"> Contact Us <i class="fas fa-mobile"></i></a>
        </nav>
    </div>
    <div class="mycontent">
        <div contenteditable="true" class="mytext">
            <?=$content[0]['description']??"Your content goes here"?>
        </div>
    </div>
</div>

<?php include_once "footer.php"?>