<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Asatro Hub</title>
<link rel="stylesheet" href="assets/css/style.css">
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

<script>
function toggleDropdown(id) {
  var element = document.getElementById(id);
  if(element.style.display === "flex") {
    element.style.display = "none";
  } else {
    element.style.display = "flex";
  }
}
</script>