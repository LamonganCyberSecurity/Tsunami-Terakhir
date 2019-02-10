#!/usr/bin/php
# DataTsunamiTerakhirKaliTerjadi
# GkUsahRecode
# HargaiKaryaOrang
# Coded By Oyonk
# Thnks To Akin7

<?php
function check(){
	$url = "http://data.bmkg.go.id/lasttsunami.xml";
	$get = file_get_contents($url);
	$data = simplexml_load_string($get) or die("error: cannot create object");
	print "\033[91m";
	print " Tanggal   : ".$data->Gempa->Tanggal."\n";
	print " Jam       : ".$data->Gempa->Jam."\n";
	print "\n";
	print "\033[93m";
	print " Lintang   : ".$data->Gempa->Lintang."\n";
	print " Bujur     : ".$data->Gempa->Bujur."\n";
	print " Magnitude : ".$data->Gempa->Magnitude."\n";
	print " Kedalaman : ".$data->Gempa->Kedalaman."\n";
	print "\n";
	print "\033[92m";
	print " Area      : ". $data->Gempa->Area."\n";
	print "\n";
}
function pesan(){
	$url = "http://data.bmkg.go.id/pesan.txt";
	$get = file_get_contents($url);
/*	$data = simpletxt_load_string($get) or die("error: cannot create object"); */
	print "\033[95m";
	print " Pesan Bmkg : ".$get."\n";
}

print "\033[96m";
print " _____ Coded : Oyonk                  _ \n";
print "|_   _|__ _   _ _ __   __ _ _ __ ___ (_) \n";
print "  | |/ __| | | | '_ \ / _` | '_ ` _ \| | \n";
print "  | |\__ \ |_| | | | | (_| | | | | | | | \n";
print "  |_||___/\__,_|_| |_|\__,_|_| |_| |_|_|Terakhir \n";
print "************************************************ \n";
print "\033[96m";
check();
pesan();
?>
