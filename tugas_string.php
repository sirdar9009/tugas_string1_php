<?php
$paragraf
= "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";


function toUp($paragraf){
  return strtoupper($paragraf);
}

function toCap($paragraf){
  return ucfirst($paragraf);
}

function lc_first($paragraf){
  return lcfirst($paragraf);
}


echo "<br>", toLow($paragraf);

echo "<br>", toUp($paragraf);

echo "<br>", toCap($paragraf);

echo "<br>", lc_first($paragraf);
echo "<br>";
echo toCap(toUp($paragraf)),"<br><br>";
echo toCap(toLow($paragraf)),"<br><br>";
echo toLow($paragraf),"<br><br>";
echo toUp($paragraf),"<br><br>";
?>
