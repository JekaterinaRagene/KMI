<?php
$svorisKg=$_GET['Svoris'];
$ugisCm=$_GET['Ugis'];

$ugisM = $ugisCm / 100;
$kmi = $svorisKg / ($ugisM ** 2);
?>
<html>
    Jūsų KMI:
        <p><?php echo round ($kmi, 2); ?> </p>
    <head>
        <style>
            table, th, td {
                border: 1px solid black;
                            }
        </style>
    </head>
    <body>
        
        <table style='width:100%'>
            <tr>
                <th>KMI</th>
                <th>Išvada</th>
            </tr>
            <tr>
                <td><18,5</td>
                <td>Per mažas svoris/mitybos nepakankamumas</td>
            </tr>
            <tr>
                <td>18,5-24,9</td>
                <td>Normalus svoris, normali kūno masė</td>
            </tr>
            <tr>
                <td>25,0-29,9</td>
                <td>Antsvoris</td>
            </tr>
            <tr>
                <td>30,0-34,9</td>
                <td>I laipsnio nutukimas<td/>
            </tr>
            <tr>
            <td>35,0-39,9</td>
            <td>II laipsnio nutukimas</td>
            </tr>
            <tr>
                <td>>40</td>
                <td>III laipsnio nutukimas</td>
            </tr>            
        </table>
    </body>
</html>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

