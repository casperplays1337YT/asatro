<?php include 'assets/template/header.php'; ?>
<h2 id="blot-ceremoni">Blot</h2>
<div class="card">
  <p>Korta instruktioner för blotceremonin. Klicka på knappen för fulla steg och detaljer.</p>

  <button onclick="toggleInfo(this)">Visa instruktioner</button>

  <div class="extra-info" style="display:none; margin-top: 10px;">
    <p><strong>Förberedelser:</strong></p>
    <ul>
      <li>Börja med att ta ut väderstrecken.</li>
      <li>Sätt gärna upp ett litet bord med föremål i mitten eller i norr.</li>
      <li>Föremål kan vara gudabilder, smycken, frukter, blommor, kött, något personligt eller något du vill fylla med kraft inför en prövning.</li>
      <li>Om flera deltagare är närvarande ställer de sig i en stor cirkel under hela ceremonin.</li>
    </ul>

    <p><strong>Förrättaren:</strong></p>
    <ul>
      <li>Står i mitten eller vid blotbordet.</li>
      <li>Vänder sig i tur och ordning mot de olika väderstrecken samt uppåt och nedåt.</li>
      <li>Uttalar högt och tydligt följande:</li>
    </ul>

    <p><em>Exempel på inkallning:</em></p>
    <ul>
      <li><strong>Norr:</strong> "Jag vänder mig mot Norr. Jag kallar in makternas megin. Jag kallar in Oden till denna ceremoni. Hell."</li>
      <li><strong>Öster:</strong> "Jag kallar in Tor och Mjölner för beskydd under denna ceremoni. Hell."</li>
      <li><strong>Söder:</strong> "Jag kallar in Sol till denna ceremoni. Hell."</li>
      <li><strong>Väster:</strong> "Jag kallar in Frej och Freja till denna ceremoni. Hell."</li>
      <li><strong>Ovan:</strong> "Jag kallar in Ljusalver och förfädersandar till denna ceremoni. Hell."</li>
      <li><strong>Nedre:</strong> "Jag kallar in Nornor och platsens rådare till denna ceremoni. Hell."</li>
    </ul>

    <p><strong>Ceremonins gång:</strong></p>
    <ul>
      <li>Skåla till makternas ära.</li>
      <li>Skänk öl/mjöd till platsens rådare genom att hälla ut i en båge eller cirkel på marken.</li>
      <li>Om fler deltagare är närvarande ska hornet gå laget runt, med början i norr. Var och en säger högt eller tyst det man skålar för och avslutar med ett tydligt "Hell".</li>
      <li>När någon lyfter hornet och säger "Hell", svarar alla närvarande med ett ljudligt "Hell".</li>
      <li>Du kan läsa ett stycke från Poetiska Eddan eller annan text du gillar.</li>
      <li>Offra tyst eller högt till makterna genom att hälla mjöd från hornet i en cirkel framför blotbordet.</li>
      <li>Om ingen vill säga mer, kör utkallningen baklänges:</li>
      <ul>
        <li>"Hell Nedre. Jag kallar ut makternas megin. Jag kallar ut och tackar Nornor och platsens rådare för att ni varit med mig/oss under ceremonin. Hell."</li>
      </ul>
      <li>Du kan självklart byta gudar/gudinnor till de makter som passar bäst för syftet.</li>
      <li>Det viktigaste är in- och utkallning, som bör utföras med stor aktsamhet.</li>
      <li>Utför resten av ceremonin med vägledning av hjärtat. Känn vad som behöver sägas och göras – prova dig fram.</li>
    </ul>
  </div>
</div>

<script>
function toggleInfo(btn) {
  const infoDiv = btn.parentNode.querySelector('.extra-info');
  if(infoDiv.style.display === 'none') {
    infoDiv.style.display = 'block';
    btn.innerText = 'Dölj instruktioner';
  } else {
    infoDiv.style.display = 'none';
    btn.innerText = 'Visa fulla instruktioner';
  }
}
</script>
<h2 id="sumbel">Sumbel</h2>
<div class="card"><p>Ceremoni med dryck, tal och minnen av hjältar eller gudar. Modern praxis: dela historier och hylla förfäder.</p></div>
<h2 id="bon">Bön</h2>
<div class="card"><p>Korta böner till gudar, t.ex. tack, önskan om styrka, vägledning eller skydd.</p></div>

<h2 id="kvallsritual">Kvällsritual</h2>
<div class="card"><p>Reflektera över dagens handlingar, hedra lärdomar och misstag. Symbol: återhämtning och självkännedom.</p></div>

<h2 id="dagligritual">Daglig ritual</h2>
<div class="card"><p>Morgonsession med meditation och tack till gudar eller förfäder. Symbol: fokus och närvaro.</p></div>

<h2 id="arstidsblot">Årstidsblot</h2>
<div class="card"><p>Ritualer kopplade till solstånd, jämningar, skördefester och högtider. Symbol: naturens cykler och balans.</p></div>

<h2 id="forfaderradgivning">Förfäderrådgivning</h2>
<div class="card"><p>Hedra förfäder med bilder, runor eller offer. Symbol: minne, respekt och kontinuitet.</p></div>

<h2 id="personliged">Personlig ed</h2>
<div class="card"><p>Svär ett löfte under ceremoni för att stärka heder, ansvar och integritet. Symbol: personlig disciplin.</p></div>

<h2 id="runritning">Magiska runritningar</h2>
<div class="card"><p>Rita runor på papper, sten eller i sanden med intentioner. Symbol: fokus, magi och transformation.</p></div>

<h2 id="naturmeditation">Naturmeditation</h2>
<div class="card"><p>Ritual i naturen med fokus på eld, jord, vatten och luft. Symbol: balans, helhet och kontakt med naturen.</p></div>

<?php include 'assets/template/footer.php'; ?>