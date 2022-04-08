<?php

require_once 'livre.php';
require_once 'auteur.php';

$king = new Auteur('KING', 'Stephen');
$Ca = new Livre('CA', 1138, 1986, 20, $king);
$Simetierre = new Livre('Simetierre', 1983, 374, 15, $king);
$Fleau = new Livre('Le fléau', 1978, 823, 14, $king);
$Shining = new Livre('Shining', 1977, 447, 16, $king);

$king->afficherL();
