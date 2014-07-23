<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ART World Congress || Schedule</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <?php $page = 'schedule';
  include('../includes/css.php'); ?>  
  
</head>
<body>
	<?php include('../includes/nav.php'); ?>
	<div id="wrapper">
	
    <h2>Annual Symposium on</h2>
	<h1>Optimal Approaches to Assisted Reproductive Technology</h1>
    
    <?php
	
	$saturday = array(
		// format, time, speaker, institution, duration, session
		array('1', 'Chair：Yun FENG、Xiaoxi SUN', '', '', '', ''),
		array('5', '8:00-8:10', '', 'Shanghai Ninth Hospital', '10', 'Opening ceremony'),
		array('5', '8:10-8:50', 'Guanglun Zhuang', 'The First Affiliated Hospital of Sun Yat-sen University', '40', 'Will “Freeze all” Replace Fresh Embryo Transfer?'),
		array('5', '8:50-9:20', 'Keichi Kato', 'Kato Ladies Clinic, Japan', '40', 'Oocyte retrieval in natural cycles in IVF: the key points and treatment of cases of refractory infertility'),
		array('5', '9:20-10:00', 'Teramoto Shokichi', 'Shinbashi YUME Clinic, Tokyo, Japan', '40', 'I. Analysis of Hormonal of Hormonal Dynamics in the Natural Cycles – Why does an ovulation occur?'),
		array('2', '10:00-10:15', 'Coffee break', '', '', ''),
		array('5', '10:15-10:55', 'John Zhang', 'New Hope Fertility Center', '40', 'Natural IVF Mini IVF and Luteal Phase Stimulation'),
		array('5', '10:55-11:35', 'Hisao Osada', 'Shinjuku ART Clinic', '40', 'The clinical efficacy of natural cycle IVF vs. mild stimulation cycle IVF with letrozole (Femara) Shinjuku ART Clinic'),
		array('2', '11:35-11:45', 'Group Photo Session', '', '', ''),
		array('2', '11:45-13:30', 'Lunch Break', '', '', ''),
		array('1', 'Chair：John J. ZHANG、Yanping KUANG', '', '', '', ''),
		array('5', '13:30-14:10', 'Jacques Cohen', 'Editor of RBMO', '40', ''),
		array('5', '14:10-14:50', 'Teramoto Shokichi', 'Shinbashi YUME Clinic, Tokyo, Japan', '40', '2. What is the best way to perform IVF: is ovarian stimulation necessary?'),
		array('5', '14:10-14:50', 'Kawachiya Satoshi', 'Kobe Motomachi YUME Clinic', '40', 'Embryo Transfer Protocol in Natural Cycle IVF'),
		array('2', '15:30-15:45', 'Coffee break', '', '', ''),
		array('5', '15:45-16:25', 'Markus Nitzschke', 'Instituto Mexicano de Infertilidad, Guadalajara Mexico', '40', 'Low ovarian stimulation using tamoxifen/fsh compared to conventional IVF: a cohort comparative study from Kazakhsztan'),
		array('5', '16:25-17:05', 'Frank L. Ye', 'Life IVF Center, California', '40', 'Individualized IVF: LIFE Experience'),
		array('5', '17:05-17:45', 'Yanping Kuang', 'Shanghai Ninth Hospital', '40', 'Changing paradigms in ovarian stimulation: What can we learn from luteal-phase ovarian stimulation?'),
		array('2', '17:45-18:45', 'Dinner (on own, snacks will be provided to those who attend the following Satellite Meeting)', '', '', ''),
		array('2', '18:45-20:30', '<strong>Satellite Meeting:</strong> Clinic workshop, discussion for diminished ovarian reserver<br />
		Presented by：  Yanping Kuang and Mingxue Yang<br /><br />We welcome all specialists and colleagues to attend, listen, and discuss.  ', '', '', '')
	);
	
	$sunday = array(
		// format, time, speaker, institution, duration, session
		array('1', 'Chair：Xiaoming ZHAO、Yun SUN', '', '', '', ''),
		array('5', '8:00-8:40', 'Zhihong Yang', 'Pacific Reproductive Center, California', '40', 'Preimplantation Genetic Screening with Array Comparative Genomic Hybridization (aCGH) and Next Generation Sequencing (NGS)'),
		array('5', '8:40-9:20', 'Tadashi Okimura', 'Kato Ladies Clinic, Japan', '40', 'A newly developed desktop incubator is efficient, reduces the risk of contamination and improves cost-efficiency'),
		array('5', '9:20-10:00', 'Xiaoyan Liang', 'The Sixth Affiliated Hospital of Zhongshan University', '40', 'The comparison of modified GnRHa long and flare protocol for diminished ovarian reserve patients'),
		array('2', '10:00-10:15', 'Coffee Break', '', '', ''),
		array('5', '10:15-10:55', 'Milton Ka Hong Leong', 'IVF Centre, Hong Kong Sanatorium and Hospital', '40', ''),
		array('5', '10:55-11:35', 'Zeev Shoham', 'Reproductive Medicine and Infertility Unit, Kaplan Medical Center, Rehovot, Israel', '40', 'Can we improve implantation: clinical aspects'),
		array('2', '10:35-13:30', 'Lunch Break', '', '', ''),
		array('1', 'Chair：Zhihong YANG、Xiaoming TENG', '', '', '', ''),
		array('5', '13:30-14:10', 'Wen He/Yanping Kuang', 'Shanghai Ninth Hospital', '40', 'Does increased LH concentration during COH affect the outcomes of IVF?'),
		array('5', '14:10-14:50', 'Songying Zhang, Xiaona Lin', 'Sir Run Run Shaw Hospital, Medical school, Zhejiang University', '40', 'The value of hysteroscopic management in assisted reproduction'),
		array('2', '14:50-15:05', 'Coffee Break', '', '', ''),
		array('5', '15:05-15:45', 'Yuanhua Huang', 'IVF Center in the Hospital Affiliated to the College of Medicine of Hainan', '40', 'The effects of Cyclosporine on trophoblast and embryo implantation'),
		array('5', '15:45-16:25', 'Lars Johansson', 'IVF Clinic in SAAD Specialist Hospital', '40', 'Enhancing Outcome in Trials'),
		array('2', '16:25-17:00', 'Discussion and the Ending of Meeting', '', '', '')
	);
	
	?>
    
    <h1>Registration: Friday, September 5, 2014</h1>
    
    <h1>Saturday, September 6, 2014</h1>
    <table class="table table-striped table-bordered table-hover" style="background-color:#eee;">
    <?php 
	foreach ($saturday as $line) {
		if ($line[0] == 1) { echo '<tr class="header"><td colspan="5">'.$line[1].'</td></tr>'; }
		elseif ($line[0] == 2) { echo '<tr><td class="time">'.$line[1].'</td><td colspan="4">'.$line[2].'</td></tr>'; }
		elseif ($line[0] == 5) { echo '<tr><td class="time">'.$line[1].'</td><td>'.$line[2].'</td><td>'.$line[3].'</td><td>'.$line[4].'</td><td>'.$line[5].'</td></tr>'; }
	}
	?>
    </table>
    <br /><br />
    <h1>Sunday, September 7, 2014</h1>
    <table class="table table-striped table-bordered table-hover" style="background-color:#eee;">
    <?php 
	foreach ($sunday as $line) {
		if ($line[0] == 1) { echo '<tr class="header"><td colspan="5">'.$line[1].'</td></tr>'; }
		elseif ($line[0] == 2) { echo '<tr><td class="time">'.$line[1].'</td><td colspan="4">'.$line[2].'</td></tr>'; }
		elseif ($line[0] == 5) { echo '<tr><td class="time">'.$line[1].'</td><td>'.$line[2].'</td><td>'.$line[3].'</td><td>'.$line[4].'</td><td>'.$line[5].'</td></tr>'; }
	}
	?>
    </table>
    
  </div>
  <?php include('../includes/js.php'); ?>
</body>
</html>
