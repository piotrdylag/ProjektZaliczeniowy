<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<head>
    <title>Wirtualna rozrywka</title>

</head>
<body>
<div class="head">
    <header>WIRUALNA ROZRYWKA CZYLI GRY KOMPUTEROWE</header>
    <nav>
        <ul>
            <li class="menu"> <a href="projekt.html"> GŁÓWNA</a></li>
            |
            <li class="menu"> <a href="ogatunku.html"> GATUNKI </a></li>
            |
            <li class="menu"><a href="wykonawcy.html">PLATFORMY </a></li>
            |
            <li class="menu"><a href="ciekawostki.html">MOJE ULUBIONE GRY</a></li>
            |
        </ul>
    </nav>
</div>

<!-- Button to open the modal login form -->
<button class="login" onclick="document.getElementById('id01').style.display='block'">Login</button>

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
        class="close" title="Close Modal">&times;</span>

    <!-- Modal Content -->
    <form class="modal-content animate" action="/action_page.php">
        <div class="imgcontainer">
            <img src="img_avatar2.png" alt="Avatar" class="avatar">
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
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>
<?php
$username = $_POST['uname'];
$password = $_POST['psw'];

?>

<div class=footer>Copyright by Piotr Dyląg UP Kraków 2019</div>
</body>
</html>
