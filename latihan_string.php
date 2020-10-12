<?php
// $kalimat = "Saya Mau Makan";
// function toLow($kalimat){
//   return strtolower($kalimat);
// }
//
// function toUp($kalimat){
//   return strtoupper($kalimat);
// }
//
// function uc_first($kalimat){
//   return ucfirst($kalimat);
// }
//
// function lc_first($kalimat){
//   return lcfirst($kalimat);
// }
//
// echo "===== STRING - ToLowerCase =====";
// echo "<br>", toLow($kalimat);
// echo "<br><br> ===== STRING - ToUpperCase =====";
// echo "<br>", toUp($kalimat);
// echo "<br><br> ===== STRING - UpperCaseFirst =====";
// echo "<br>", ucfirst($kalimat);
// echo "<br><br> ===== STRING - LowerCaseFisrt=====";
// echo "<br>", lcfirst($kalimat);

$paragraf
= "  ada spasi  ";

//untuk menghitung jumlah karakter
function kata_len($paragraf){
  return strlen($paragraf);
}
//untuk menghilangkan spasi diawal dan akhir kalimat(menghapus kesalahan input)
function del_spasi($paragraf){
  return trim($paragraf);
}
//mengilagkan spasi di kiri
function l_spasi($paragraf){
  return ltrim($paragraf);
}
//mengilagkan spasi di kanan
function r_spasi($paragraf){
  return rtrim($paragraf);
}
//mengganti karakter dengan karakter lain
function ganti_karakter($paragraf){
  return str_replace(" ","",$paragraf);
}
//mengganti karakter dengan karakter lain
function pad_($paragraf){
  return str_pad($paragraf,20,"*");
}
function pad_kiri($paragraf){
  return str_pad($paragraf,20,"*",STR_PAD_LEFT);
}
//menghilangkan tag HTML, berfungsi untuk keamanan di website karena semua tag html akan hilang
function del_tag($text){
  return strip_tags($text);
}

echo "<br>",kata_len($paragraf);
echo "<br>",del_spasi($paragraf);
echo "<br>",kata_len(del_spasi($paragraf));
echo "<br>spasi",l_spasi($paragraf),"spasi";
echo "<br>",kata_len(l_spasi($paragraf));
echo "<br>spasi",r_spasi($paragraf),"spasi";
echo "<br>",kata_len(r_spasi($paragraf));
echo "<br>spasi",ganti_karakter($paragraf),"spasi";
echo "<br>",kata_len(ganti_karakter($paragraf));
echo "<br>spasi",pad_($paragraf),"spasi";
echo "<br>",kata_len(pad_($paragraf));
echo "<br>spasi",pad_kiri($paragraf),"spasi";
echo "<br>",kata_len(pad_kiri($paragraf));
$text="<b>Saya Mengandung tag html bold</b>";
echo "<br>",$text;
echo "<br>",del_tag($text);
echo "<br>",str_shuffle($text);
$uang=1000000;
echo "<br><br> Rp.",number_format($uang,0,",",".");
echo "<br>Rp.",number_format($uang,1,",",".");
echo "<br>Rp.",number_format($uang,2,",",".");
echo "<br>Rp.",number_format($uang,3,",",".");

$kata="Saya belajar php dengan serius";
echo "<br><br>",substr($kata, 16,7),"<br><br>";


  for($a=0;$a<strlen($kata);$a++){
    if(substr($kata,$a,1)!=" "){
      echo substr($kata,$a,1);
    }
  }

echo "<br>",ganti_karakter($kata);
echo "<br>",strpos($kata,"serius");

//merubah string menjadi array
$kata2=explode(" ",$kata);
echo "<br>";
print_r($kata2);
echo "<br>", $kata2[1];

//merubah array menjadi STRING
echo "<br>", implode("_",$kata2);



?>
