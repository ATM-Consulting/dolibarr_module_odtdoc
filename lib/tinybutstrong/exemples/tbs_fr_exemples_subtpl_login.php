<?php

if (isset($this)) {
  // On est dans le mode Sous-mod�le de TBS =>
	//   les variables sont toujours locales, pas globales,
	//   et l'objet TBS est r�f�renc� par la variable locale $this.
	$TBS =& $this;
} else {
  // Ce sous-script peut aussi �tre ex�cut� en mode normal =>
  //  sont mod�le correspondant sera affich� comme un mod�le principal.
	include_once('tbs_class.php');
	$TBS = new clsTinyButStrong;
}

global $err_log; // N'oubliez pas que les variables sont toujours locales en mode Sous-mod�le.

if (isset($_POST['btn_ok'])) {
  // Imaginez que l'on v�rifie compte/mot-de-passe...
	$err_log = 1;
}	else {
	$err_log = 0;
}

$TBS->LoadTemplate('tbs_fr_exemples_subtpl_login.htm');
$TBS->Show() ;  // Quand cette m�thode est appel� en mode Sous-mod�le, le script principal n'est pas stopp�, et ce sous-mod�le fusionn� sera ins�rer dans le mod�le principal.

?>