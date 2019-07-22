<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>


<div class="container">
    <form class="myform" action="backend.php" method="post">
        <table>
            <tr>
                <td colspan="2" class="formheader">Contact Us - With Subject</td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>


            <tr>
                <td class="leftcol">Full Name:</td>
                <td class="rightcol"><input required="required" class="input-group" name="full_name" type="text"
                                            placeholder="Your Full Name"></td>
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
                <td class="leftcol">Department:</td>
                <td class="rightcol">

                    <select name="department">
                        <option value="sales">Sales</option>
                        <option value="accounting">Accounting</option>
                        <option value="management">Management</option>
                        <option value="customerservice">Customer Service</option>
                        <option value="misc">Misc</option>
                    </select>

                </td>
            </tr>


            <tr>
                <td class="leftcol">Gender:</td>
                <td class="rightcol">

                    <div class="myradiobuttons">
                        <p><input value="1" name="gender" type="radio"> Male</p>
                        <p><input value="2" name="gender" type="radio"> Female</p>
                    </div>

                </td>
            </tr>


            <tr>
                <td class="leftcol">Browser Compatibility:</td>
                <td class="rightcol">
                    <div class="myradiobuttons">
                        <p><input value="chrome" name="browser" type="radio"> Google Chrome</p>
                        <p><input value="firefox" name="browser" type="radio"> Mozilla Firefox</p>
                        <p><input value="opera" name="browser" type="radio"> Opera</p>
                        <p><input value="ie" name="browser" type="radio"> IE</p>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="leftcol">Subject:</td>
                <td class="rightcol"><input required="required" class="input-group" name="subject" type="tel"
                                            placeholder="Your subject"></td>
            </tr>

            <tr>
                <td class="leftcol">Message:</td>
                <td class="rightcol">
                    <textarea name="mymessage" class="mytextarea">Your Message goes here</textarea>
                </td>
            </tr>

            <tr>
                <td class="leftcol">Upload File:</td>
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