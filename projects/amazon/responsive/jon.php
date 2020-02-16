<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Responsive Design Class</title>

    <link rel='stylesheet' type='text/css' href='css/style.css'/>
    <link rel='stylesheet' media='screen and (max-width: 700px)' href='css/mobile.css'>
    <link rel='stylesheet' media='screen and (min-width: 701px) and (max-width: 900px)' href='css/tablet.css'>
    <link rel='stylesheet' media='screen and (min-width: 901px)' href='css/wide.css'/>
</head>
<body>
<div id="page-wrap">
    <div id="header">
        <img class="logo" src="https://gloria-project.eu/wp-content/uploads/2012/06/logo-256-transp.png">
    </div>
    <div class="navbar">
        <nav>
            <a href="#products">Products</a>
            <a href="#video">Video</a>
            <a href="#contact">Contact Us</a>
        </nav>
    </div>
    <div class="boxes" id="secondary-one">
        <img class="desktopimg" src="https://www.websiteprintdesigns.com/wp-content/uploads/2017/05/vertical-banner-business-design.png">
        <img class="tableimg" src="https://www.internetcreation.net/wp-content/uploads/2015/04/banner-web-design.png">
    </div>
    <div class="boxes" id="main-content">
        <div class="content_text">
            <p>
            <h3>Lorem Ipsum</h3>
            "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
            "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is
            pain..."
            What is Lorem Ipsum?
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
            make
            a type specimen book. It has survived not only five centuries, but also the leap into electronic
            typesetting,
            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
            containing
            Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
            versions
            of Lorem Ipsum.
            </p>


            <p>
            <h3>Why do we use it?</h3>
            It is a long established fact that a reader will be distracted by the readable content of a page when
            looking at
            its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
            opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing
            packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem
            ipsum'
            will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes
            by
            accident, sometimes on purpose (injected humour and the like).
            </p>

            <p>
            <h3>Where does it come from?</h3>
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
            Latin
            literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
            Hampden-Sydney
            College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage,
            and
            going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum
            comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil)
            by
            Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
            Renaissance.
            The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections
            1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact
            original
            form, accompanied by English versions from the 1914 translation by H. Rackham.
            </p>
            <p>
            <h3>Where can I get some?</h3>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
            some form, by injected humour, or randomised words which don't look even slightly believable. If you are
            going
            to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle
            of
            text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making
            this
            the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a
            handful
            of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is
            therefore always free from repetition, injected humour, or non-characteristic words etc.
            </p>
        </div>
    </div>
    <div class="boxes" id="secondary-two">
        <ul>
            <li id="products">
                <img src="https://s3.amazonaws.com/inspire-website-assets/wp-content/uploads/2019/09/20153432/inspire-walkingaround.png">
            </li>
            <li id="video">
                <iframe src="https://www.youtube.com/embed/NoZwGfUsxX4"></iframe>
            </li>
            <li id="contact">
                <form id="myform">
                    <p><label>First Name:</label></p>
                    <p><input name="first_name" type="text" placeholder="Your First Name"></p>
                    <p><label>Last Name:</label></p>
                    <p><input name="last_name" type="text" placeholder="Your Last Name"></p>
                    <p><label>Email:</label></p>
                    <p><input name="email" type="email" placeholder="Your Email Address"></p>
                    <p>
                        <button id="submit_btn" type="submit">Send</button>
                    </p>
                </form>
            </li>
            <li>FOUR</li>
        </ul>
    </div>
</div>
</body>
</html>