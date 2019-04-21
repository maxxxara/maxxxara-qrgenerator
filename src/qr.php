<?php  
namespace QR;
require 'vendor/autoload.php';
use Endroid\QrCode\QrCode;
class QR {
	function generateQR($content, $fhand) {
		$qrCode = new QrCode($content);
		file_put_contents($fhand, $qrCode->writeString());
	}
	function randomQR($l, $path=null, $fname=null) {
		global $characters;
		$characters = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $l; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    if ($path == null){
	    	$path = './';
	    }
 	    if ($fname == null) {
	    	$fname = $path . '/' .$randomString . '.jpg';
	    }else {
	    	$fname = $path . '/' . $fname;
	    }
		$qrCode = new QrCode($randomString);
		file_put_contents($fname, $qrCode->writeString());
	}
}

$qr = new QR;
$qr->randomQR(50);


?>
