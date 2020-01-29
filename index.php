<?php

$aktion = isset($_REQUEST['aktion'])?$_REQUEST['aktion']:'homepage';
switch ($aktion) {
  case 'homepage':
    $aktion = 'Frontend/views/homepage';
    break;
  default:
    $aktion = 'Frontend/views/homepage';
    break;
}

  include $aktion.'.tpl.html';

?>
