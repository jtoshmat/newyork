<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <h1>Rustam</h1>
            <ul>
                <li><a data-page="home" href="#">Home</a></li>
                <li><a data-page="project" href="#">Project</a></li>
                <li><a data-page="contact" href="#">Contact</a></li>
                <div class="bubble"></div>
            </ul>
        </nav>
    </header>

    <main>
        <section data-index="0" class="home">
            <h2>Home</h2>
        </section>
        <section data-index="1" class="project">
            <h2>Project</h2>
        </section>
        <section data-index="2" class="contact">
            <h2>Contact</h2>
        </section>
    </main>

    <script src="script.js"></script>
</body>
</html>