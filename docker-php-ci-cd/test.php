<?php
require 'index.php';

function testAfficherMessage() {
    $expected = "Bonjour, CI/CD !";
    $actual = afficherMessage();
    return $actual === $expected ? 'Test réussi' : 'Test échoué';
}

echo testAfficherMessage();
?>