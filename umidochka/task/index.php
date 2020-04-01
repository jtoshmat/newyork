
 <div class="box1">
     <img class="img" src="https://static.wixstatic.com/media/ea9f87_ef96d9cfee8c47989e7e9205b5d79816~mv2.png/v1/fill/w_241,h_120,al_c,q_85,usm_0.66_1.00_0.01/Fabulash%20-%20Logo.webp">
     <h3 class="myh3">Welcome to Fabulashes!</h3>
 </div>

 <?php
 $name = "U'midochka";
 echo addslashes($name );
 echo '<pre>';
 $myname = "Umidochka";
  echo bin2hex($myname);
 echo "<pre>";
 $str = "Umidochka Gaibullaeva!";
 echo $str . "<br>";
 echo chop($str,"Gaibullaeva!");
 echo '<pre>';
 $str = '&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;';
 echo html_entity_decode($str);
 echo "<pre>";
 $str = "This is some &lt;b&gt;bold&lt;/b&gt; text.";
 echo htmlspecialchars_decode($str);