<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function tgl_indo($day){
 $day = explode ("-",$day);
 switch ($day[1]){
 case 1:
 $day[1] = "Jan";
 break;
 case 2:
 $day[1] = "Feb";
 break;
 case 3:
 $day[1] = "Mart";
 break;
 case 4:
 $day[1] = "Apr";
 break;
 case 5:
 $day[1] = "Mei";
 break;
 case 6:
 $day[1] = "Jun";
 break;
 case 7:
 $day[1] = "Jul";
 break;
 case 8:
 $day[1] = "Agust";
 break;
 case 9:
 $day[1] = "Sep";
 break;
 case 10:
 $day[1] = "Okt";
 break;
 case 11:
 $day[1] = "Nov";
 break;
 case 12:
 $day[1] = "Des";
 break;
 }
 $day_indo = $day[2]." ".$day[1]." ".$day[0];
 return $day_indo;
}
function hitunglembur($in,$out){

  list($h,$m,$s)=explode(":",$in);
$dtawal=mktime($h,$m,$s,"1","1","1");
list($h,$m,$s)=explode(":",$out);
$dtakhir=mktime($h,$m,$s,"1","1","1");
$dtselisih=$dtakhir - $dtawal;
$totalmenit=$dtselisih/60;
$jam=explode(".",$totalmenit/60);
$sisamenit=($totalmenit/60)-$jam[0];
$sisa=$sisamenit*60;
return ;

}
