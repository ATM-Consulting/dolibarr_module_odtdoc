<?php

include_once('tbs_class.php');
include_once('tbs_plugin_cache.php'); // Plug-in Cache System

$TBS = new clsTinyButStrong;

// Appel le Syst�me de Cache qui va d�cider si il continue et enregistre le r�sultat dans un fichier cache, ou s'il affiche une page en cache.
$TBS->PlugIn(TBS_CACHE,'testcache',10);

$TBS->LoadTemplate('tbs_fr_exemples_cache.htm');
$TBS->Show();

?>