<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Asatro Hub</title>
<link rel="stylesheet" href="assets/css/style.css">
<style>
body { margin:0; font-family: Arial, sans-serif; background:#0b0f1a; color:#f0f0e3; }
header { background:#1a1f2e; color:#facc15; padding:20px; text-align:center; font-size:28px; }
nav { background:#141a28; padding:10px; display:flex; flex-direction:column; width:200px; position:fixed; height:100%; }
nav ul { list-style:none; margin:0; padding:0; display:flex; flex-direction:column; gap:5px; }
nav li { position:relative; }
nav a { color:white; text-decoration:none; padding:12px 15px; display:block; border-radius:10px; background:#1f2937; font-weight:bold; }
nav a:hover, nav a:focus { background:#facc15; color:#0b0f1a; }
.dropdown-content { display:none; flex-direction:column; background:#1f2937; border-radius:10px; margin-top:5px; }
.dropdown-content a { padding:10px 15px; }
.container { margin-left:220px; padding:25px; max-width:900px; }
.card { background:#1f273a; padding:20px; border-radius:20px; margin-bottom:20px; box-shadow:0 4px 10px rgba(0,0,0,0.5); }
h2 { color:#facc15; font-size:26px; margin-bottom:15px; }
h3 { color:#f5d35d; margin-bottom:10px; }
footer { text-align:center; padding:15px; background:#1a1f2e; color:#facc15; margin-top:20px; font-size:14px; margin-left:220px; }
@media(max-width:768px) { nav { position:relative; width:100%; height:auto; flex-direction:row; overflow-x:auto; } .container { margin-left:0; } footer { margin-left:0; } }
</style>
</head>
<body>

<header>🪶 Asatro Hub</header>
<nav>
<ul>
  <li>
  <li><a href="index.php">Hem</a></li>
    <a href="javascript:void(0)" onclick="toggleDropdown('kunskapDropdown')">Kunskap ▼</a>
    <div class="dropdown-content" id="kunskapDropdown">
      <a href="kunskap.php#gudar">Gudar</a>
      <a href="kunskap.php#jattar">Jättar</a>
      <a href="kunskap.php#alfver">Alfer och mystiska varelser</a>
      <a href="kunskap.php#platser">Platser</a>
      <a href="kunskap.php#handelser">Händelser</a>
      <a href="kunskap.php#varelser">Varelser</a>
      <a href="kunskap.php#symboler">Symboler och magiska koncept</a>
      <a href="kunskap.php#artefakter">Artefakter</a>
      <a href="kunskap.php#kosmologi">Kosmologi</a>
      <a href="kunskap.php#djur">Djur</a>
    </div>
  </li>
  <li>
    <a href="javascript:void(0)" onclick="toggleDropdown('ritualerDropdown')">Ritualer ▼</a>
    <div class="dropdown-content" id="ritualerDropdown">
      <a href="ritualer.php#blot">Blot</a>
      <a href="ritualer.php#sumbel">Sumbel</a>
      <a href="ritualer.php#bon">Bön</a>
      <a href="ritualer.php#kvallsritual">Kvällsritual</a>
      <a href="ritualer.php#dagligritual">Daglig ritual</a>
      <a href="ritualer.php#arstidsblot">Årstidsblot</a>
      <a href="ritualer.php#forfaderradgivning">Förfäderrådgivning</a>
      <a href="ritualer.php#personliged">Personlig ed</a>
      <a href="ritualer.php#runritning">Magiska runritningar</a>
      <a href="ritualer.php#naturmeditation">Naturmeditation</a>
    </div>
  </li>
  <li><a href="kalender.php">Kalender</a></li>
  <li><a href="journal.php">Journal</a></li>
  <li><a href="quiz.php">Quiz</a></li>
</ul>
</nav>

<div class="container">
<?php
$page = $_GET['page'] ?? 'home';

if ($page == 'home' || basename($_SERVER['PHP_SELF']) == 'index.php') {
  echo "<h2>Välkommen till Asatro Hub</h2>";
  echo "<div class='card'><p>Din personliga guide inom Asatron. Utforska gudar, ritualer, högtider, quiz och din journal.</p></div>";
}
?>
</div>

<footer>© 2026 Asatro Hub</footer>

<script>
function toggleDropdown(id) {
  var element = document.getElementById(id);
  if (element.style.display === "flex") {
    element.style.display = "none";
  } else {
    element.style.display = "flex";
  }
}
</script>

</body>
</html>