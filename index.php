<?php
require_once 'tcpdf/tcpdf.php';

$pdf = new \TCPDF("P", "mm", "A4", true, 'UTF-8', false);

//设置文档信息
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('TCPDF - 作者');
$pdf->SetTitle('TCPDF - 标题');
$pdf->SetSubject('TCPDF - 介绍');
$pdf->SetKeywords('TCPDF, PDF, PHP');
//设置页眉和页脚
$pdf->SetHeaderData('logo.jpg', 30, "头部标题", "头部介绍", array(0,64,255), array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

//设置页眉和页脚字体
$pdf->setHeaderFont(Array('stsongstdlight', '', '10'));
$pdf->setFooterFont(Array('stsongstdlight', '', '8'));

//设置默认的字体
$pdf->SetDefaultMonospacedFont('courier');

//设置间距
$pdf->SetMargins(15, 27, 15);
$pdf->SetHeaderMargin(5);
$pdf->SetFooterMargin(10);

//设置分页
$pdf->SetAutoPageBreak(TRUE, 25);

//设置图片比例
$pdf->setImageScale(1.25);

$pdf->setFontSubsetting(true);

$pdf->SetFont('stsongstdlight', '', 14, '', true);

$pdf->AddPage();
//设置文本阴影效果
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

//内容
$html = "<h1>TCPDF - html转PDF</h1>";

$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

$pdf->Output('example_001.pdf', 'I');
exit;