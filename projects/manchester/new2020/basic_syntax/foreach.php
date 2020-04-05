<?php
namespace Football;
class Mail{
    public function ebgland(){
        $clubs = ['Manchester United', 'Arsenal', 'Liverpool', 'Chelsea', 'Manchester City'];
        foreach ($clubs as $club) {
            if ($club == 'Manchester United') {
                echo "<img src='https://futhead.cursecdn.com/static/img/14/clubs/11.png'>";
            } elseif ($club == 'Arsenal') {
                echo "<img src='https://i.pinimg.com/originals/f0/bf/44/f0bf440b4954463b21db86e8d06d363c.png'>";
            } elseif ($club == 'Liverpool') {
                echo "<img src='https://icons.iconarchive.com/icons/giannis-zographos/liverpool-fc/256/Liverpool-FC-icon.png'>";
            } elseif ($club == 'Chelsea') {
                echo "<img src='https://futhead.cursecdn.com/static/img/14/clubs/5.png'>";
            } elseif ($club == 'Manchester City') {
                echo "<img src='https://ronaldo.com/wp-content/uploads/ptl/team-8456-medium.png'>";
            } else {
                echo "Nothing";
            }
        }
    }
}
$result = new Mail();
$result->ebgland();
?>
<style>
    img {
        width: 100px;
    }
</style>
<?php
$cities = ['Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Florida',
    'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland',
    'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
    'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon',
    'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
    'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'];

foreach ($cities as $count => $city) {
    sortirovka($city, $count);
}
function sortirovka($city, $count)
{
    $count++;
    if ($count % 5 == 0) {
        echo "<pre>";
        echo "<div class='flag'>$count.$city</div>";
    } else {
        echo "<pre>";
        echo "<div class='black'>$count.$city</div>";
    }
}

?>

<style>
    img {
        width: 14px;
        margin: 5px;
    }

    .flag {
        background-color: #75f98b;
        padding: 8px;
        border-radius: 15px;
    }

    .black {
        background-color: #f9f5f1;
        padding: 8px;
        border-radius: 15px;
    }

</style>


