<!DOCTYPE html>
<html>
<head>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}
#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:hover {background-color: #ddd;}
#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #242424;
    color: white;
}
</style>
</head>
<body>
<?php
$john=file_get_contents("https://fantasy.premierleague.com/drf/entry/2380724/history");
$shano=file_get_contents("https://fantasy.premierleague.com/drf/entry/1602/history");
$paddy=file_get_contents("https://fantasy.premierleague.com/drf/entry/109481/history");
$kev=file_get_contents("https://fantasy.premierleague.com/drf/entry/216816/history");
$adam=file_get_contents("https://fantasy.premierleague.com/drf/entry/190049/history");
$dan=file_get_contents("https://fantasy.premierleague.com/drf/entry/30635/history");
$steve=file_get_contents("https://fantasy.premierleague.com/drf/entry/2712318/history");

//suggested to use http://docs.guzzlephp.org/en/stable/ instead of file_get_contents

$data =  json_decode($john, true);
?>
<table id ="player_info">
<tr>
    <th>Event</th>
    <th>Total Points</th>
</tr>
<?PHP
foreach($data['history'] as $key=>$item)
{
    ?>
    <tr>
        <td><?PHP echo $item['event']; ?></td>
        <td><?PHP echo $item['total_points']; ?></td>
    </tr>
    <?PHP
}
?>
</table>
