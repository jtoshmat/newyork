<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Piano Moving Quote</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>


<div class="container">
    <form class="myform" action="backend.php" method="post">
        <table>
            <tr>
                <td colspan="2" class="formheader">PIANO Moving Quote</td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>


            <tr>
                <td class="leftcol">Full Name:</td>
                <td class="rightcol"><input required="required" class="input-group" name="full_name" type="text"
                                            placeholder="Your Fist name and Last name"></td>
            </tr>

            <tr>
                <td class="leftcol">Email:</td>
                <td class="rightcol"><input required="required" class="input-group" name="email" type="email"
                                            placeholder="Your Email Address"></td>
            </tr>


            <tr>
                <td class="leftcol">Tel Number:</td>
                <td class="rightcol"><input required="required" class="input-group" name="phone" type="tel"
                                            placeholder="Your Tel Number"></td>
            </tr>
            <tr>
                <td class="leftcol">How did you Hear about us?:</td>
                <td class="rightcol"><input required="required" class="input-group" name="full_name" type="text"
                                            placeholder="yelp, google, recommended, etc..."></td>
            </tr>

            <tr>
                <td class="leftcol">Tell About your Move/Storage Request:</td>
                <td class="rightcol">
                </td>
            </tr>

            <tr>
                <td class="leftcol">Will you need Storage?:</td>
                <td class="rightcol">
                    <div class="myradiobuttons">
                        <input value="yes" name="yes_no" type="radio"> yes
                        <input value="no" name="yes_no" type="radio"> no
                    </div>
                </td>
            </tr>

            <tr>
                <td class="leftcol">Will you need Move?:</td>
                <td class="rightcol">
                    <div class="myradiobuttons">
                        <input value="yes" name="yes_no1" type="radio"> yes
                        <input value="no" name="yes_no1" type="radio"> no
                    </div>
                </td>
            </tr>

            <tr>
                <td class="leftcol">Please find your Piano type:</td>
                <td class="rightcol">

                    <select name="department">
                        <option value="sales">Type</option>
                        <option value="spinet">spinet upright under 38"</option>
                        <option value="console">console upright 39"-43"</option>
                        <option value="studio">Studio upright 44"-48"</option>
                        <option value="full_sized">full sized Upright 49"-52"</option>
                        <option value="upright_grand">upright grand 52"-56"</option>
                        <option value="babygrand">babygrand piano under 5.6"</option>
                        <option value="grand">grand piano 5.7inch-6.1incht</option>
                        <option value="grandstudio">studio grand piano 6.4"-7'</option>
                        <option value="concert grand">Concert Grand 7' to 9'</option>
                        <option value="digital_upright">Digital upright</option>
                        <option value="digital_baby_grand">Digital Baby Grand</option>
                        <option value="small_h_organ">small Home Organ</option>
                        <option value="large_h_organ">Large Home Organ</option>
                        <option value="church_organ">Church Organ</option>
                        <option value="Harsichord">Harsichord/Clavichord</option>
                        <option value="Fortepiano">Forte Piano</option>
                        <option value="Squarepiano">Square Piano</option>
                    </select>
                </td>

            </tr>
            <tr>
                <td class="leftcol">Piano Type *Does the piano have a player mechanism? <br>(Ability to play on its own)
                </td>
                <td class="rightcol">
                    <div class="myradiobuttons">
                        <input value="yes" name="yes_no2" type="radio"> yes
                        <input value="no" name="yes_no2" type="radio"> no
                    </div>
                </td>
            </tr>
            <tr>
                <td class="leftcol">Piano information:</td>
            </tr>
            <tr>
                <td class="leftcol">Make and model:</td>
                <td class="rightcol"><input required="required" class="input-group" name="piano_name" type="text"
                                            placeholder="Piano make and model"></td>
            </tr>

            <tr>
                <td class="leftcol">Measurements:</td>
                <td class="rightcol"><input class="input-group" name="subject" type="text"
                                            placeholder="Piano measurements height, length"></td>
            </tr>
            <tr>
                <td class="leftcol">Pickup From:</td>
                <td class="rightcol"><input required="required" class="input-group" name="pickup" type="text"
                                            placeholder="Pickup Address"></td>
            </tr>
            <tr>
                <td class="leftcol">Delivery to:</td>
                <td class="rightcol"><input required="required" class="input-group" name="delivery" type="text"
                                            placeholder="Delivery address"></td>
            </tr>


            <tr>
                <td class="leftcol">Additional information:</td>
                <td class="rightcol">
                    <textarea name="mymessage" class="mytextarea">please type more info about your piano</textarea>
                </td>
            </tr>

            <tr>
                <td class="leftcol">Upload Piano Photos or Videos here:</td>
                <td class="rightcol">
                    <input type="file" name="uploadfile">
                </td>
            </tr>

            <tr>
                <td colspan="2" class="myfinalrow">
                    <button class="btn btn-dark" type="reset">Start Over</button>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </td>
            </tr>


        </table>
    </form>
</div>


<style>

    body {
        background-color: #d7d7d7;
        font-family: "American Typewriter";
    }

    .container {
        background-color: #fff;
    }

    .myform {
        width: 95%;
    }

    table {
        background-color: #fff;
        width: 100%;
    }

    tr {
        margin-bottom: 5px;
    }

    tr:nth-child(2n+3) {
        background: #f9f9f9
    }

    table tr:first-child {
        height: 60px;
        border-bottom: 1px solid #000;
    }

    .formheader {
        font-size: 25px;
        padding-left: 20px;
    }

    .leftcol {
        text-align: right;
        padding-right: 40px;
    }

    .rightcol input {
        margin-bottom: 10px;
        background-color: #f9f9f9;
        border: 1px solid #000;
        font-size: 16px;
        color: #934a29;
    }

    .rightcol select {
        border: 1px solid #000;
    }

    .myradiobuttons {
        position: relative;
    }

    .myclassgender input {
        margin: 0;
    }

    .mytextarea {
        background-color: #f9f9f9;
        width: 100%;
        height: 120px;
        font-size: 14px;
        color: #1e7e34;
    }

    .myfinalrow {
        text-align: center;
    }

    .myfinalrow button {
        text-align: center;
        margin: 20px;
    }
</style>


</body>
</html>
