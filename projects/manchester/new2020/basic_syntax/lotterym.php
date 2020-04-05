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


