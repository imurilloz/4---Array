<?php
$pais= array();
$pais["Mexico"]=array("Guadalajara","Monterrey","Tepic","Pachuca","D.F.");
$pais["Espa�a"]=array("Barcelona","Madrid","Valencia","Mallorca","Osasuna");
$pais["EUA"]=array("Houston","Washington","Seattle","Manhattan","San Francisco");
$pais["Francia"]=array("Par�s","Tolousse","St. Ettienne","Marsella","Nancy");
$pais["Alemania"]=array("M�nich","Colonia","Monchengladbach","Dormund","Leverkusen");
$pais["Canada"]=array("Montreal","Ottawa","Vancouver","Edmonton","Quebec");
$pais["Inglaterra"]=array("Londres","Manchester","West Ham","Liechtester","Chelsea");
$pais["Brasil"]=array("Sao Paolo","Brasilia","Rio de Janeiro","Porto Alegre","Cotia");
$pais["Italia"]=array("Roma","Mil�n","Venecia","Cagliari","Palermo");
$pais["Jap�n"]=array("Tokio","Okynawa","Hiroshima","Nagasaki","Kioto");

echo "<ul>";
foreach($pais as $pais=>$ciudades){
echo "<li>".$pais."<ul>";

foreach($ciudades as $ciudad){
echo "<li>". $ciudad."</il>";
}
 echo "</ul></li>";
}
 
?>