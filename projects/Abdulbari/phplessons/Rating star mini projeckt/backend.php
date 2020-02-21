<?php
/*class MyRating{
    public $parms;
    public function __construct()
    {
        $this->parms = $_POST;
    }
    public function printInputs(){
        return $this->parms;
    }
}

$obj = new MyRating();
echo "<pre>";
print_r($obj->printInputs());
*/
namespace Ibm;
include_once "../../inc/database.php";

use Database\database;

class Rating
{

    public $parms;
    private $db;

    public function __construct()
    {
        //Hasanboy
        $this->parms = $_POST;
        $this->db = new database();
        echo "<hr> Assalom alaykum, hush geldingiz!<hr>";
    }

    public function __destruct()
    {
        // Husanboy
        echo "<hr> Maili, yaxshi boringlar, mehmon bulib kelib turinglar<hr>";
    }

    public function saveRatingToDatabase()
    {
        $full_name = $this->parms['full_name'] ?? null;
        $message = $this->parms['message'] ?? 'N/A';
        $rating = $this->parms['rating'] ?? 5;
        $room_rating = $this->parms['room_rating'] ?? 5;
        $food_rating = $this->parms['food_rating'] ?? 5;

        $sql = "INSERT INTO ratings (full_name, message, room_rating, food_rating, rating) VALUES ('$full_name','$message',$room_rating,$food_rating,$rating);";
        $insert = $this->db->sql($sql);
    }

    public function displayRatings()
    {
        return $this->db->sql("SELECT * FROM ratings order by id desc");
    }

}

$rating = new Rating();
$rating->saveRatingToDatabase();
$records = $rating->displayRatings();
echo "<pre>";
print_r($records);


?>
