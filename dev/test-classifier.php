<?php
// Test af kategorireglerne uden WordPress: php dev/test-classifier.php
function get_option($k){return false;}
$src=__DIR__."/../wp-content/plugins/playform-feeds/src/";
require $src.'Config.php'; require $src.'Classifier.php';
use Playform\Feeds\{Classifier,Config};
$cases=[
['Moccamaster KBG Select kaffemaskine','kaffemaskiner'],['Sage Barista Express espressomaskine','espressomaskiner'],['DeLonghi Magnifica S fuldautomatisk','espressomaskiner'],
['Nespresso Vertuo Pop kapselmaskine','kaffemaskiner'],['Wilfa Svart kaffekværn','kaffekvaerne'],['Comandante C40 håndkværn','kaffekvaerne'],
['Bialetti Moka Express 6 kopper','kaffebrygning'],['Bodum Chambord stempelkande 1 L','kaffebrygning'],['Hario V60 dripper 02','kaffebrygning'],
['Fellow Stagg EKG svanehals elkedel','kaffebrygning'],['Aerolatte mælkeskummer','maelkeskummere'],['Motta mælkekande 500 ml','maelkeskummere'],
['Espresso Tools tamper 58 mm','baristaudstyr'],['Timemore Black Mirror kaffevægt','baristaudstyr'],['Knock box i rustfrit stål','baristaudstyr'],
['Kähler espressokop 2 stk','kopper-termo'],['Stelton EM77 termokande','kopper-termo'],['Køge Kafferisteri kaffebønner 500 g','kaffe'],
['Salt og peberkværn i eg','exclude'],['Tekande i glas 1,2 L','exclude'],['Reservedel pakning til espressomaskine','exclude'],
];
$bad=0;foreach($cases as [$n,$want]){ $got=Classifier::classify(['name'=>$n,'brand'=>'','shop_category'=>'','price'=>100,'shop'=>'x']); if($got!==$want){$bad++; echo "FAIL: $n -> $got (ville have $want)\n";}}
echo count($cases)-$bad."/".count($cases)." ok\n";
