 <?php 
/**
 * This is a WebbTemp pagecontroller.
 *
 */
// Include the essential config-file which also creates the $webbtemp variable with its defaults.
include(__DIR__.'/config.php'); 


// Do it and store it all in variables in the WebbTemp container.
$webbtemp['title'] = "Redovisning";

$webbtemp['header'] = <<<EOD
<img class='background' src='img/banner3.jpg' alt='A logo"'/>
<span class='sitetitle'>Redovisning av oophp</span>
<span class='siteslogan'>Här beskriver jag hur jag löst uppgiften</span>
EOD;

$webbtemp['main'] = <<<EOD
<h1>REDOVISNING AV KURSMOMENTEN</h1>
<h2>Kmom02: Objektorienterad programmering i PHP</h2>

 <p> 
   objektorienterade delen kan jag mycket väl, så mycket att jag kände att tärningsdelen inte skulle vara så mycket problem. Så gjorde uppgiften utan gå igenom
   guiden. den gick jag igenom efter jag gjorde klart uppgiften. Skulle gärna gjort kalendern, men känner att jag måste få klart alla registeringar på kurserna så
   tror jag tar och gör kalendern senare. tänkte om jag skulle lägga till fler spelare då koden för det är nästan klart, behövs endast en array för spelare, sen 
   klarar den hantera hur många spelare som helst, men det känns inte som att folk vill spela för 2 personer på en och samma dator idag så gjorde inte den delen.
    <p>
   AI för motståndaren ansåg jag skulle vara lite mer komplicerat och ta säkert mycket mer tid och få att fungera bra så det hoppa jag även över, mest för att om jag
 gör något så vill jag göra det bra, och få till ett AI som faktist ger motstånd, tänker och slår som människor. Då kommer det nog bli en hel del jobb.
  <p>
 Jag skumläste guiden efter jag gjorde tärningen, hade ju mer eller mindre all kod klar från uppgift 1. 
  <p>
 klassena gjorde jag så att jag har en klass för "spelplan", nu i sig är det inte speciellt mycket i sig. men utvecklar man med AI och andra spelar så skulle den här 
 klassen ha hand om dom delarna. Sen har jag en klass för spelaren som har hand om all information om spelar och om spelplanen behöver något så kan den hämta det från 
 spelaren. Sen har jag en klass som har hand om själva tärningen som håller reda på värdet och lite annat.
  <p>
 Gjorde klassen för tärningen dynamsik, så den kan klara av och hantera olika tärningar. med hjälp av ett min och ett max värde. <p>
 Klassen för spelplanen tar även hand om all html kod så man slipper det i sidan utan det är bara anroppa funktionen som har hand om utskriften, detta för att det ska
 vara så rent och snyggt som möjligt och man ska lätt veta var alla kod är. 
 <p>
 Kalendern skjuter jag på framtiden, verkar som ett spännande projekt och göra en avancerad kalender där man kan lägga till events och få all info man behöver. 
 Men det får vara för ett senare projeckt, kanske när jag kommer tillbaka till den här kursen igen efter gått klart den första.
 <p> 
 Designen är lite förbättrad från första momentet, och jag är lite mer nöjd över hur det blev. Det ända som är kvar är all bakgrund färg, vet inte riktigt hur jag skulle
 kunna gjort det snyggt eftersom jag bara använder all utrymme i mitten. Men antar att det blir något som man kanske förbättrar över tiden.
 <p>
</aside>
EOD;

$webbtemp['footer'] = <<<EOD
<div id="footer">
<footer class="byline"> Copyright (c) Mattias Rosengren </footer>
<footer class="bottom"> 
<a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a>
 </footer>
</div>
EOD;


// Finally, leave it all to the rendering phase of WebbTemp.
include(WEBBTEMP_THEME_PATH);
