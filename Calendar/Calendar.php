<?php 
$date = empty($_GET['date']) ? date('Y-m-d') : $_GET['date'];
$date1 = empty($_GET['date']) ? date('Y-m') : $_GET['date'];
$firstDate = date('Y-m-01',strtotime($date));
$firstDateWcode = date('w',strtotime($firstDate));
$lastDateDay = date('t', strtotime($date));
$lastDateWcode = date('w',strtotime( date('Y-m-'.$lastDateDay,strtotime($date)) ));

$prevDate = date('Y-m-d',strtotime("-1 month",strtotime($firstDate)));
$prevDate1 = date('Y-m',strtotime("-1 month",strtotime($firstDate)));
$nextDate = date('Y-m-d',strtotime("+1 month",strtotime($firstDate)));
$nextDate1 = date('Y-m',strtotime("+1 month",strtotime($firstDate)));
$prevLastDateDay = date('t', strtotime($prevDate));

$week = array();
$day = 1;
while(1){
	$subWeek = array();
	for($i=0;$i<7;$i++){
		if( $day > $lastDateDay){ 

			// 마지막 날의 날짜코드가 6이 아니라면, 다음달을 미리 넣어준다.
			if( $lastDateWcode != 6){
				for($si=0;$si < 6-$lastDateWcode; $si++){
					$thisDate = date('Y-m-'.($si+1),strtotime("+1 month",strtotime($firstDate)));
					$subWeek[] = array('type'=>'next', 'day'=>$si+1,'date'=>$thisDate,'wcode'=>date('w',strtotime($thisDate)));		
				}				
			}
			break; 
		}
		if( $day == 1 && $firstDateWcode != 0){
			for($si=($prevLastDateDay-$firstDateWcode);$si < $prevLastDateDay; $si++){
				$thisDate = date('Y-m-'.($si+1),strtotime("-1 month",strtotime($firstDate)));
				$subWeek[] = array('type'=>'prev', 'day'=>$si+1,'date'=>$thisDate,'wcode'=>date('w',strtotime($thisDate)));
			}
			$i += $firstDateWcode;
		}

		$thisDate = date('Y-m-'.$day,strtotime($firstDate));
		$subWeek[] = array('type'=>'now', 'day'=>$day,'date'=>$thisDate,'wcode'=>date('w',strtotime($thisDate)));		
		$day++;
	}
	$week[] = $subWeek;
	if( $day > $lastDateDay){ break; }
}

echo '
<body>
	<div class="action">
		<a href="?date='.$prevDate1.'">이전달</a>
		<strong>'.$date1.'</strong>
		<a href="?date='.$nextDate1.'">다음달</a>
	</div>
	<table>
		<tr>
			<th>일</th>
			<th>월</th>
			<th>화</th>
			<th>수</th>
			<th>목</th>
			<th>금</th>
			<th>토</th>
		</tr>
';

foreach($week as $k=>$v){
	echo '<tr>';
	foreach($v as $sk=>$sv){
		echo '<td class="wcode_'.$sv['wcode'].''.($sv['type'] != 'now' ? ' prevnext':'').'" title="'.$sv['date'].'">'.$sv['day'].'</td>';
	}
	echo '</tr>';
}
echo '</body>';
?>
<style>
	body{  width:450px; }
	.action{ text-align:center; margin:10px 0; }
	.action strong{ font-size:45px; }
	.action a{ text-decoration: none; color:#333; }
	h1{ text-align:center; }
	table{ width:100%;}
	table th,td{ width: 14%; text-align:center; }
	table th.wcode_0,table td.wcode_0{ color:red; }
	table th.wcode_6,table td.wcode_6{ color:blue; }
	table td.prevnext{ color:#eee; }
</style>