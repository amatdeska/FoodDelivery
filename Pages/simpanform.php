<?php
include 'PHP/config.php';
if(isset($_REQUEST['ok'])){
	$xml = new DOMDocument("1.0","UTF-8");
	$xml->load("penjualan.xml");

	$rootTag = $xml->getElementsByTagName("document")->item(0);
	$dataTag = $xml->createElement ("data" );

	$data_name = $xml->createElement("name",$_REQUEST['name']);
	$data_email = $xml->createElement("email",$_REQUEST['email']);
	$data_message = $xml->createElement("message",$_REQUEST['message']);


	$dataTag->appendChild($data_name);
	$dataTag->appendChild($data_email);
	$dataTag->appendChild($data_message);


	$rootTag->appendChild($dataTag);

	$xml->save("penjualan.xml");

	$q=mysqli_query($mysqli, "INSERT INTO penjualan VALUES (NULL, '".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['message']."')");

	if(!$q ){
		echo "<script>alert('Gagal di tambahkan!');</script>";
	} else{
		echo "<script>alert('Data berhasil di tambahkan!');</script>";
		echo ' <script language="javascript">
              window.location.href="http://localhost/TUGAS/Pages/display";
              </script> ';
		}
	}
?>
