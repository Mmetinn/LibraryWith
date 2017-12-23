<?php
include 'connection.php';<?
header ("Location:kitap_ver_listek.php"); ?>
if($row['kitap_sayisi']==0){echo "<script>alert ('aradığınız kitap mevcut değil')</script>"; break; }
?>