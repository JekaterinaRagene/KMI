<?php
print '<h2>Kūno masės indekso (KMI) skaičiuoklė</h2>';
print 'KMI-tai ūgio ir svorio santykio rodiklis, leidžiantis įvertinti ar žmogaus svoris normalus ar yra antsvoris bei nutukimas.';
print 'Norėdami apskaičiuoti savo KMI įveskite žemiau esančius duomenys';
?>

<html>
        <form action='gauti.php' method='get'>
        Svoris (kg.):
        <input type='text' name='Svoris' value=''>
        <br>
        Ūgis (cm.):
        <input type='text' name='Ugis' value=''>
        <input type='submit' name='Suskaičiuoti KMI'>
    </form>
</html>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

