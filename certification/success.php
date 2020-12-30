<?php
session_start();
$serial = $_SESSION['certnumber'];
$event = $_SESSION['event'];
require_once 'config.php';
require_once 'vendor/autoload.php';

$query = mysql_query("SELECT * FROM $event WHERE `cert_number` = '$serial'");
$row = mysql_fetch_array($query);

function hackathon4()
{
$serial = $_SESSION['certnumber'];
$event = $_SESSION['event'];
$query = mysql_query("SELECT * FROM $event WHERE `cert_number` = '$serial'");
$row = mysql_fetch_array($query);
$pdf = new FPDF('L');
$pdf->AddPage();
$pdf->Image('templates/hck4.jpg',0,0,297,210);

$pdf->AddFont('Lucida Console','','Lucida Console.php');
$pdf->SetTextColor(190,140,39);
$pdf->SetFont('Lucida Console','',60);
$pdf->SetXY(10, 85);
$pdf->Cell(0,10,$row['name'],0,0,'C');
//$pdf->Write(0, $row['name']);


$pdf->AddFont('Montserrat-Medium','','Montserrat-Medium.php');
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Montserrat-Medium','',14);
$pdf->SetXY(248, 52);
$pdf->Write(0, $row['cert_number']);

$pdf->Output('',$serial.".pdf",'');
}

function ihack()
{
$serial = $_SESSION['certnumber'];
$event = $_SESSION['event'];
$query = mysql_query("SELECT * FROM $event WHERE `cert_number` = '$serial'");
$row = mysql_fetch_array($query);
$pdf = new FPDF('L');
$pdf->AddPage();
$pdf->Image('templates/ihack.jpg',0,0,297,210);

$pdf->AddFont('Raphtalia DEMO','','Raphtalia DEMO.php');
$pdf->SetTextColor(225,255,255);
$pdf->SetFont('Raphtalia DEMO','',56);
$pdf->SetXY(9, 97);
$pdf->Cell(0,10,$row['name'],0,0,'C');
//$pdf->Write(0, $row['name']);


$pdf->AddFont('ADAM.CG-PRO','','ADAM.CG-PRO.php');
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('ADAM.CG-PRO','',11);
$pdf->SetXY(247, 41);
$pdf->Write(0, $row['cert_number']);

$pdf->Output('',$serial.".pdf",'');
}

function ihackwinner()
{
$serial = $_SESSION['certnumber'];
$event = $_SESSION['event'];
$query = mysql_query("SELECT * FROM $event WHERE `cert_number` = '$serial'");
$row = mysql_fetch_array($query);
$pdf = new FPDF('L');
$pdf->AddPage();
$pdf->Image('templates/ihackwinner.jpg',0,0,297,210);

$pdf->AddFont('Raphtalia DEMO','','Raphtalia DEMO.php');
$pdf->SetTextColor(225,255,255);
$pdf->SetFont('Raphtalia DEMO','',56);
$pdf->SetXY(9, 99);
$pdf->Cell(0,10,$row['name'],0,0,'C');
//$pdf->Write(0, $row['name']);


$pdf->AddFont('ADAM.CG-PRO','','ADAM.CG-PRO.php');
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('ADAM.CG-PRO','',11);
$pdf->SetXY(247, 41);
$pdf->Write(0, $row['cert_number']);

$pdf->AddFont('Gothic','','Gothic.php');
$pdf->SetTextColor(225,255,255);
$pdf->SetFont('Gothic','',17);
$pdf->SetXY(94, 123);
$pdf->Write(0, $row['position']);

$pdf->Output('',$serial,'');

}

function codeintine()
{
$serial = $_SESSION['certnumber'];
$event = $_SESSION['event'];
$query = mysql_query("SELECT * FROM $event WHERE `cert_number` = '$serial'");
$row = mysql_fetch_array($query);
$pdf = new FPDF('L');
$pdf->AddPage();
$pdf->Image('templates/codeintine19.jpg',0,0,297,210);

$pdf->AddFont('Raphtalia DEMO','','Raphtalia DEMO.php');
$pdf->SetTextColor(225,166,40);
$pdf->SetFont('Raphtalia DEMO','',56);
$pdf->SetXY(10, 99);
$pdf->Cell(0,10,$row['name'],0,0,'C');
//$pdf->Write(0, $row['name']);


$pdf->AddFont('ADAM.CG-PRO','','ADAM.CG-PRO.php');
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('ADAM.CG-PRO','',12);
$pdf->SetXY(248, 40);
$pdf->Write(0, $row['cert_number']);

$pdf->Output('',$serial.".pdf",'');
}
/*
function codeintinewinner()
{
$serial = $_SESSION['certnumber'];
$event = $_SESSION['event'];
$query = mysql_query("SELECT * FROM $event WHERE `cert_number` = '$serial'");
$row = mysql_fetch_array($query);
$pdf = new FPDF('L');
$pdf->AddPage();
$pdf->Image('templates/codeintinewinner.jpg',0,0,297,210);

$pdf->AddFont('Raphtalia DEMO','','Raphtalia DEMO.php');
$pdf->SetTextColor(225,166,40);
$pdf->SetFont('Raphtalia DEMO','',56);
$pdf->SetXY(10, 99);
$pdf->Cell(0,10,$row['name'],0,0,'C');
//$pdf->Write(0, $row['name']);


$pdf->AddFont('ADAM.CG-PRO','','ADAM.CG-PRO.php');
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('ADAM.CG-PRO','',12);
$pdf->SetXY(248, 40);
$pdf->Write(0, $row['cert_number']);

$pdf->AddFont('Gothic','','Gothic.php');
$pdf->SetTextColor(225,166,40);
$pdf->SetFont('Gothic','',17);
$pdf->SetXY(87.4, 123);
$pdf->Write(0, $row['position']);

$pdf->Output('',$serial,'');

}*/
/*

function webdev()
{
$serial = $_SESSION['certnumber'];
$event = $_SESSION['event'];
$query = mysql_query("SELECT * FROM $event WHERE `cert_number` = '$serial'");
$row = mysql_fetch_array($query);
$pdf = new FPDF('L');
$pdf->AddPage();
$pdf->Image('templates/WEB.jpg',0,0,297,210);

$pdf->AddFont('Raphtalia DEMO','','Raphtalia DEMO.php');
$pdf->SetTextColor(190,140,39);
$pdf->SetFont('Raphtalia DEMO','',60);
$pdf->SetXY(10, 100);
$pdf->Cell(0,10,$row['name'],0,0,'C');
//$pdf->Write(0, $row['name']);


$pdf->AddFont('ADAM.CG-PRO','','ADAM.CG-PRO.php');
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('ADAM.CG-PRO','',12);
$pdf->SetXY(233, 13.9);
$pdf->Write(0, $row['cert_number']);

$pdf->Output('',$serial,'');
}

*/

function yugmak19()
{
$serial = $_SESSION['certnumber'];
$event = $_SESSION['event'];
$query = mysql_query("SELECT * FROM $event WHERE `cert_number` = '$serial'");
$row = mysql_fetch_array($query);
$pdf = new FPDF('L');
$pdf->AddPage();
$pdf->Image('templates/yugmak19.jpg',0,0,297,210);

$pdf->AddFont('Back to Black Demo','','Back to Black Demo.php.');
$pdf->SetTextColor(188,148,27);
$pdf->SetFont('Times');
$pdf->SetFont('Back to Black Demo','',60);
$pdf->SetXY(10, 105);
$pdf->Cell(0,10,$row['name'],0,0,'C');
//$pdf->Write(0, $row['name']);

$pdf->AddFont('Lucida Console','','Lucida Console.php');
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Lucida Console','',16);
$pdf->SetXY(170, 141);
$pdf->Write(0, $row['event']);

$pdf->AddFont('BebasNeue','','BebasNeue.php');
$pdf->SetTextColor(22,70,91);
$pdf->SetFont('BebasNeue','',24);
$pdf->SetXY(245, 58);
$pdf->Write(0, $row['cert_number']);

$pdf->Output('',$serial.".pdf",'');
}

/*function yugmak19winner()
{
$serial = $_SESSION['certnumber'];
$event = $_SESSION['event'];
$query = mysql_query("SELECT * FROM $event WHERE `cert_number` = '$serial'");
$row = mysql_fetch_array($query);
$pdf = new FPDF('L');
$pdf->AddPage();
$pdf->Image('templates/yugmak2.jpg',0,0,297,210);

$pdf->AddFont('Back to Black Demo','','Back to Black Demo.php.');
$pdf->SetTextColor(188,148,27);
$pdf->SetFont('Times');
$pdf->SetFont('Back to Black Demo','',60);
$pdf->SetXY(45, 115);
$pdf->Cell(0,10,$row['name'],0,0,'C');

$pdf->AddFont('Gothic','','Gothic.php');
$pdf->SetTextColor(22,70,91);
$pdf->SetFont('Gothic','',20);
$pdf->SetXY(198, 147);
$pdf->Write(0, $row['event']);

$pdf->AddFont('Gothic','','Gothic.php');
$pdf->SetTextColor(22,70,91);
$pdf->SetFont('Gothic','',20);
$pdf->SetXY(120, 147);
$pdf->Write(0, $row['position']);

$pdf->AddFont('BebasNeue','','BebasNeue.php');
$pdf->SetTextColor(22,70,91);
$pdf->SetFont('BebasNeue','',24);
$pdf->SetXY(250, 90);
$pdf->Write(0, $row['cert_number']);

$pdf->Output('',$serial,'');
}*/

function faceofcsi()
{
$serial = $_SESSION['certnumber'];
$event = $_SESSION['event'];
$query = mysql_query("SELECT * FROM $event WHERE `cert_number` = '$serial'");
$row = mysql_fetch_array($query);
$pdf = new FPDF('L');
$pdf->AddPage();
$pdf->Image('templates/FOC Certi.jpg',0,0,297,210);

$pdf->AddFont('PRISTINA','','PRISTINA.php');
$pdf->SetTextColor(190,140,39);
$pdf->SetFont('PRISTINA','',58);
$pdf->SetXY(20, 80);
$pdf->Cell(0,10,$row['name'],0,0,'C');
//$pdf->Write(0, $row['name']);


$pdf->AddFont('Montserrat-Medium','','Montserrat-Medium.php');
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Montserrat-Medium','',12);
$pdf->SetXY(50, 10);
$pdf->Write(0, $row['cert_number']);

$pdf->Output('',$serial.".pdf",'');
}
function csr19()
{
$serial = $_SESSION['certnumber'];
$event = $_SESSION['event'];

$query = mysql_query("SELECT * FROM $event WHERE `cert_number` = '$serial'");
$row = mysql_fetch_array($query);
$pdf = new FPDF('L');
$pdf->AddPage();
$pdf->Image('templates/csr19.jpg',0,0,297,210);

$pdf->AddFont('PRISTINA','','PRISTINA.php');
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('PRISTINA','',60);
$pdf->SetXY(15, 110);
$pdf->Cell(0,10,$row['name'],0,0,'C');
//$pdf->Write(0, $row['name']);


$pdf->AddFont('Montserrat-Medium','','Montserrat-Medium.php');
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Montserrat-Medium','',12);
$pdf->SetXY(255, 55);
$pdf->Write(0, $row['cert_number']);

$pdf->Output('',$serial.".pdf",'');
}
function csi_core_19_20()
{
$serial = $_SESSION['certnumber'];
$event = $_SESSION['event'];
$query = mysql_query("SELECT * FROM $event WHERE `cert_number` = '$serial'");
$row = mysql_fetch_array($query);
$pdf = new FPDF('L');
$pdf->AddPage();
$pdf->Image('templates/core.jpg',0,0,297,210);

$pdf->AddFont('Raphtalia DEMO','','Raphtalia DEMO.php');
$pdf->SetTextColor(225,255,255);
$pdf->SetFont('Raphtalia DEMO','',46);
$pdf->SetXY(9, 94);
$pdf->Cell(0,10,$row['name'],0,0,'C');
//$pdf->Write(0, $row['name']);

$pdf->AddFont('ADAM.CG-PRO','','ADAM.CG-PRO.php');
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('ADAM.CG-PRO','',17);
$pdf->SetXY(155,125);
$pdf->Write(0, $row['committee']." Committee");

$pdf->AddFont('ADAM.CG-PRO','','ADAM.CG-PRO.php');
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('ADAM.CG-PRO','',11);
$pdf->SetXY(247, 41);
$pdf->Write(0, $row['cert_number']);

$pdf->Output('',$serial.".pdf",'');
}

function csi_head_19_20()
{
$serial = $_SESSION['certnumber'];
$event = $_SESSION['event'];
$query = mysql_query("SELECT * FROM $event WHERE `cert_number` = '$serial'");
$row = mysql_fetch_array($query);
$pdf = new FPDF('L');
$pdf->AddPage();
$pdf->Image('templates/head.jpg',0,0,297,210);

$pdf->AddFont('Raphtalia DEMO','','Raphtalia DEMO.php');
$pdf->SetTextColor(225,255,255);
$pdf->SetFont('Raphtalia DEMO','',46);
$pdf->SetXY(9, 94);
$pdf->Cell(0,10,$row['name'],0,0,'C');
//$pdf->Write(0, $row['name']);

$pdf->AddFont('ADAM.CG-PRO','','ADAM.CG-PRO.php');
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('ADAM.CG-PRO','',17);
$pdf->SetXY(90,128);
$pdf->Write(0, $row['committee']);

$pdf->AddFont('ADAM.CG-PRO','','ADAM.CG-PRO.php');
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('ADAM.CG-PRO','',11);
$pdf->SetXY(247, 41);
$pdf->Write(0, $row['cert_number']);

$pdf->Output('',$serial.".pdf",'');
}





function email()
{
$serial = $_SESSION['certnumber'];
$event = $_SESSION['event'];

$query = mysql_query("SELECT * FROM $event WHERE `cert_number` = '$serial'");
$row = mysql_fetch_array($query);
$pdf = new FPDF('L');
$pdf->AddPage();
$pdf->Image('templates/coupon.jpg',0,0,297,210);



$pdf->AddFont('ADAM.CG-PRO','','ADAM.CG-PRO.php');
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('ADAM.CG-PRO','',9);
$pdf->SetXY(49.5,118);
$pdf->Write(0, $row['code2']);

$pdf->AddFont('ADAM.CG-PRO','','ADAM.CG-PRO.php');
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('ADAM.CG-PRO','',9);
$pdf->SetXY(51, 32);
$pdf->Write(1, $row['code1']);


$pdf->Output('',$row['name'].".pdf",'');
}
function RPA()
{
$serial = $_SESSION['certnumber'];
$event = $_SESSION['event'];
$query = mysql_query("SELECT * FROM $event WHERE `cert_number` = '$serial'");
$row = mysql_fetch_array($query);
$pdf = new FPDF('L');
$pdf->AddPage();
$pdf->Image('templates/rpa.jpg',0,0,297,210);

$pdf->AddFont('Raphtalia DEMO','','Raphtalia DEMO.php');
$pdf->SetTextColor(225,255,255);
$pdf->SetFont('Raphtalia DEMO','',46);
$pdf->SetXY(9, 94);
$pdf->Cell(0,10,$row['name'],0,0,'C');
//$pdf->Write(0, $row['name']);



$pdf->AddFont('ADAM.CG-PRO','','ADAM.CG-PRO.php');
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('ADAM.CG-PRO','',11);
$pdf->SetXY(247, 41);
$pdf->Write(0, $row['cert_number']);

$pdf->Output('',$serial.".pdf",'');
}

function rpa2()
{
$serial = $_SESSION['certnumber'];
$event = $_SESSION['event'];
$query = mysql_query("SELECT * FROM $event WHERE `cert_number` = '$serial'");
$row = mysql_fetch_array($query);
$pdf = new FPDF('L');
$pdf->AddPage();
$pdf->Image('templates/RPA-Certificate.jpg',0,0,297,210);

$pdf->AddFont('Raphtalia DEMO','','Raphtalia DEMO.php');
$pdf->SetTextColor(225,255,255);
$pdf->SetFont('Raphtalia DEMO','',46);
$pdf->SetXY(9, 94);
$pdf->Cell(0,10,$row['name'],0,0,'C');
//$pdf->Write(0, $row['name']);



$pdf->AddFont('ADAM.CG-PRO','','ADAM.CG-PRO.php');
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('ADAM.CG-PRO','',11);
$pdf->SetXY(247, 41);
$pdf->Write(0, $row['cert_number']);

$pdf->Output('',$serial.".pdf",'');
}

switch($event)
{
	case"ihack":ihack();
	break;
    case"csr19":csr19();
	break; 
    case"faceofcsi":faceofcsi();
	break;

	case"ihackwinner":ihackwinner();
	break;

	case"codeintine":codeintine();
	break;

	case"codeintinewinner":codeintinewinner();
	break;

	case"hackathon4":hackathon4();
	break;

	case"yugmak19":yugmak19();
	break;

	case"yugmak19winner":yugmak19winner();
	break;

	case"csi_head_19_20":csi_head_19_20();
	break;

	case"csi_core_19_20":csi_core_19_20();
	break;

	case"webdev":webdev();
	break;
    case"email":email();
	break;
        
    case"RPA2020":RPA();
	break;
        
    case"ihackwinner":ihackwinner();
	break;
        
    case"rpa2":rpa2();
	break;

	}
