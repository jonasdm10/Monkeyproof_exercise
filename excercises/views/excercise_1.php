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

<form action="action_page.php">
  <div class="imgcontainer">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

<?php

session_save_path('C:\Users\jonas\Desktop\Monkeyproof\mpacademy\excercises');
session_name('JohnDoe');
session_id(1);

session_start();  

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

?>