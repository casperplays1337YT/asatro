<?php include 'assets/template/header.php'; ?>
<h2>Journal</h2>
<form method="post" action="journal.php">
<textarea name="entry" placeholder="Skriv dina tankar, ritualer och drömmar här" required></textarea>
<br><br>
<input type="submit" value="Spara" style="padding:10px 20px; border-radius:10px; border:none; background:#facc15; color:#0b0f1a; font-weight:bold; cursor:pointer;">
</form>
<?php
if(isset($_POST['entry'])) {
    $text = $_POST['entry'];
    file_put_contents('journal.txt', date('Y-m-d H:i:s').' - '.$text."
", FILE_APPEND);
    echo '<div class="card">Inlägg sparat!</div>';
}
if(file_exists('journal.txt')) {
    $entries = file('journal.txt');
    foreach(array_reverse($entries) as $line) {
        echo '<div class="card">'.htmlspecialchars($line).'</div>';
    }
}
?>