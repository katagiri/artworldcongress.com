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
	<h2>Preliminary Program</h2>
	
    <?php
	
	$saturday = array(
		// format, time, speaker, institution, duration, session
		array('1', 'Chair：Yun FENG、Xiaoxi SUN', '', '', '', ''),
		array('5', '8:00-8:05', 'Liming Zhou', 'Shanghai Ninth hospital', '5', 'Opening ceremony'),
		array('5', '8:05-8:10', '', 'Shanghai Ninth hospital', '5', 'Opening ceremony'),
		array('5', '8:10-8:40', 'Guanglu Zhuang', 'The first affiliated hospital of Sun Yat-sen University', '30', 'Understanding the association of axis and pool to obtain mature oocytes'),
		array('5', '8:40-9:10', 'Keichi Kato', 'Kato Ladies Clinic, Japan', '30', 'Oocyte retrieval in natural cycles in IVF: the key points and treatment of cases of refractory infertility'),
		array('2', '9:10-9:25', 'Coffee break', '', '', ''),
		array('5', '9:25-9:50', 'Teramoto Shokichi', 'Shinbashi YUME clinic, Tokyo, Japan', '30', 'I. Analysis of Hormonal of Hormonal Dynamics in the Natural Cycles – Why does an ovulation occur?'),
		array('5', '9:50-10:20', 'Alejandro Chavez', 'New Hope Fertility Center', '30', 'IVF-ET using intrauterine culture device: Clinical outcome'),
		array('5', '10:20-10:50', 'John Zhang', 'New Hope Fertility Center', '30', 'Natural IVF Mini IVF and Luteal Phase Stimulation'),
		array('2', '10:50-11:20', 'Group Photo Session', '', '', ''),
		array('2', '11:20-13:00', 'Lunch break', '', '', ''),
		array('1', 'Chair：John J. ZHANG、Yanping KUANG', '', '', '', ''),
		array('5', '13:00-13:30', '', '', '30', ''),
		array('5', '13:30-14:00', '', '', '30', ''),
		array('5', '14:00-14:30', 'Hisao Osada', 'Shinjuku ART Clinic', '30', 'The clinical efficacy of natural cycle IVF vs. mild stimulation cycle IVF with letrozole (Femara) Shinjuku ART Clinic'),
		array('2', '14:30-15:00', 'Coffee break', '', '', ''),
		array('5', '15:00-15:30', 'Teramoto shokichi', 'Shinbashi YUME clinic, Tokyo, Japan', '30', '2. What is the best way to perform IVF: is ovarian stimulation necessary?'),
		array('5', '16:30-16:00', 'Xiaoyan Liang', 'The sixth Affiliated Hospital of Zhongshan University', '30', 'The understanding of LH surge at different conditions and clinical application in ovulation induction'),
		array('5', '16:00-16:30', 'Kuang, Yanping and Mingxue Yang', 'Shanghai Ninth Hospital and New Hope Fertility Center', '30', 'Interactive Session: Difficult Cases Presentation and Discussion'),
		array('2', '17:00-20:00', '                           DINNER
		The annual congresses of assisted reproductive techniques in Shanghai have been co-organized by Shanghai Ninth People’s Hospital and New hope Fertility Center of New York. for 4 years. We express our sincerely thanks and earnest respect for the presence of experts, scholars, distinguished guests. This 3-day event will enable participants to meet with outstanding world experts and to be updated on the most pressing issues facing clinicians. At the same time, the increasing impact of these meetings and extending scope in ARTs make us believe that it is necessary to hold an international congress next year in Shanghai. We are grateful to professor Zeev Shalom, he make it possible to co-ordinate our congress with the Asia Pacific Congress on Building Consensus out of Controversies in Gynecology and Infertility (BCGI-COGI) in shanghai next year. We are appreciated for his valuable experiences of holding international meeting. Tonight, it is a good opportunity to perform a preparation meeting, to be with us for discussing the topic, schedule and recommended lecturers of the meeting next year.    
		We are looking forward to your continued support and attendance in 2015.    ', '', '', '')
		
	);
	
	$sunday = array(
		// format, time, speaker, institution, duration, session
		array('1', 'Chair：Xiaoming ZHAO、Yun SUN', '', '', '', ''),
		array('5', '8:00-8:30', 'Zhihong Yang', 'Pacific Reproductive Center, California', '30', 'Selection of viable blastocysts for transfer by time-lapse monitoring and array CGH screening for PGS patients'),
		array('5', '8:30-9:00', 'Tadashi Okimura', 'Kato Ladies Clinic, Japan ', '30', 'A newly developed desktop incubator is efficient, reduces the risk of contamination and improves cost-efficiency'),
		array('5', '9:00-9:30 ', '', '', '30', ''),
		array('2', '9:30-9:45', 'Coffee Break', '', '', ''),
		array('5', '9:45-10:15', 'Songying Zhang', 'Sir Run Run Shaw Hospital, Zhejiang University School of medicine', '30', 'Modified transvaginal cervical isthmus cerclage'),
		array('5', '10:15-10:45', 'Zeev Shoham', 'Reproductive Medicine and Infertility Unit, Kaplan Medical Center, Rehovot, Israel', '30', 'Can we improve implantation: clinical aspects'),
		array('2', '10:45-13:00', 'Lunch Break', '', '', ''),
		array('1', 'Chair：Zhihong YANG、Xiaoming TENG', '', '', '', ''),
		array('5', '12:00-12:30', '', '', '30', ''),
		array('5', '12:30-13:00', '', '', '30', ''),
		array('2', '13:00-13:15', 'Coffee Break', '', '', ''),
		array('5', '13:15-13:45', '', '', '30', ''),
		array('5', '13:45-14:15', 'Lars Johansson', 'IVF clinic in SAAD Specialist Hospital', '30', 'Enhancing Outcome in Trials'),
		array('2', '0.59375', 'Free Exercise', '', '', '')
	);
	
	?>
    
    <h1>Saturday, September 6, 2014</h1>
    <table class="table table-striped table-bordered table-hover" style="background-color:#eee;">
    <?php 
	foreach ($saturday as $line) {
		if ($line[0] == 1) { echo '<tr class="header"><td colspan="5">'.$line[1].'</td></tr>'; }
		elseif ($line[0] == 2) { echo '<tr><td>'.$line[1].'</td><td colspan="4">'.$line[2].'</td></tr>'; }
		elseif ($line[0] == 5) { echo '<tr><td>'.$line[1].'</td><td>'.$line[2].'</td><td>'.$line[3].'</td><td>'.$line[4].'</td><td>'.$line[5].'</td></tr>'; }
	}
	?>
    </table>
    <br /><br />
    <h1>Sunday, September 7, 2014</h1>
    <table class="table table-striped table-bordered table-hover" style="background-color:#eee;">
    <?php 
	foreach ($sunday as $line) {
		if ($line[0] == 1) { echo '<tr class="header"><td colspan="5">'.$line[1].'</td></tr>'; }
		elseif ($line[0] == 2) { echo '<tr><td>'.$line[1].'</td><td colspan="4">'.$line[2].'</td></tr>'; }
		elseif ($line[0] == 5) { echo '<tr><td>'.$line[1].'</td><td>'.$line[2].'</td><td>'.$line[3].'</td><td>'.$line[4].'</td><td>'.$line[5].'</td></tr>'; }
	}
	?>
    </table>
    
  </div>
  <?php include('../includes/js.php'); ?>
</body>
</html>
