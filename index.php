<?php
$phrase ="La Vie aquatique (The Life Aquatic with Steve Zissou), film américain sorti en 2004, est le quatrième long-métrage réalisé par Wes Anderson. Il est dédié à l'océnographe français Jacques-Yves Cousteau et s'inspire librement de sa vie sur un ton parodique. Le film est une comédie dramatique qui, sous un aspect fantaisiste, aborde des thèmes forts comme la famille, le deuil, la vengeance, l'angoisse de vieillir ou l'échec."  ;
$antiE= str_replace("e","",$phrase,$count);
echo $antiE;
?>
