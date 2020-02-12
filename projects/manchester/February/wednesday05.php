<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form GET</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <form method="post" name="myform" action="monday10.php">
        <p>
            <label>Username: </label>
            <input required="required" type="email" name="email" value="" placeholder="Your Email Address">
        </p>
        <p>
            <label>Password: </label>
            <input type="password" name="password" value="" placeholder="Your Password">
        </p>

        <p>
            <label>Photo/File: </label>
            <input type="file" name="fileToUpload" accept="image/x-png,image/gif,image/jpeg" >
        </p>

        <p>
            <label>Your Message: </label><br>
            <textarea  cols="40" rows="10" name="yourmessage" placeholder="Your message goes here" required="required">
        </textarea>
        </p>

        <p>
            <label>Pick your color: </label>
            <select name="colors">
                <optgroup label="Normal Colors">
                    <option value="red">Red</option>
                    <option value="green">Green</option>
                    <option value="blue">Blue</option>
                    <option value="yellow">Yellow</option>
                </optgroup>

                <optgroup label="Russian Colors">
                    <option value="krasniy">Krasniy</option>
                    <option value="zeleniy">Zeleniy</option>
                    <option value="sinniy">Sinniy</option>
                    <option value="zheltiy">Zheltiy</option>
                </optgroup>

                <optgroup label="Uzbek Colors">
                    <option value="qizil">Qizil</option>
                    <option value="yashil">Yashil</option>
                    <option value="kok">Kok</option>
                    <option value="sariq">Sariq</option>
                </optgroup>

            </select>
        </p>

        <p>
            <button type="reset">Reset</button>
            <button type="submit">Login</button>
        </p>

        <p>
            <label>Have you travelled to Samarqand?</label>
            Yes: <input type="radio" name="travel" value="yes">
            No: <input type="radio" name="travel" value="no">
        </p>

        <p>
        <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
            </select>
        </div>
        </p>

        <p>
            <label>Which football team do you like?</label>
            Manchester: <input type="checkbox" name="football_team" value="Manchester"> <br>
            Real Madrid: <input type="checkbox" name="football_team" value="Real"> <br>
            Barcelona: <input type="checkbox" name="football_team" value="Barca"> <br>
            Pakhtakor: <input type="checkbox" name="football_team" value="Pakhtakor"> <br>
        </p>
    </form>

    <a href="monday10.php?ismi=Jon&familiyasi=toshmatov&mutahasisligi=IT">Monday</a>
</div>


</body>
</html>