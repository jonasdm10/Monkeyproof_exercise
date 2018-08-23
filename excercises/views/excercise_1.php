<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Monkeyproof Academy</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<header>
    <h1>
        <a href="/">Monkeyproof Academy</a>
    </h1>
</header>
<section>
    <h2>JS test</h2>

    <button onclick="makeItWork()"> Make JS work</button>
    <button class="classname">test</button>

</section>
<section>
    <h2>Login</h2>
    // Toon hier een welkomsboodschap als je ingelogd bent. Iets als "Welkom, Jonas"
    <div></div>
    <h3>Login as</h3>
    <ul>
    <?php
    foreach ($data['users'] as $user) :
        ?>
        <li><a href="?=userId=<?php echo $user['id'] ?>"><?php echo $user['name'] ?></a></li>
        <?php
    endforeach
    ?>
    </ul>
    </div>
    <div>
    <h3>Login by form</h3>
    </div>
</section>
<footer></footer>
<script src="../assets/js/script.js"></script>
</body>
</html>
