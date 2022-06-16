<?php 
require_once 'date.php';

	$date = new Date('2025-12-31');
	
require_once 'interval.php';

echo $date->getYear(); echo ' ';  // выведет '2025'
echo $date->getMonth(); echo ' '; // выведет '12'
echo $date->getDay(); echo ' '; // выведет '31'	
	$date1 = new Date('2025-12-31');
	$date2 = new Date('2026-11-28');

echo '<br>';

echo $date->getWeekDay(); echo ' ';    // выведет '3'
echo $date->getWeekDay('ru'); echo ' '; // выведет 'среда'
echo $date->getWeekDay('en'); echo ' '; // выведет 'wednesday'
	$interval = new Interval($date1, $date2);

echo $interval->toDays();   // выведет разницу в днях
echo '<br>';

echo (new Date('2025-12-31'))->addYear(1); 
echo '<br>';
echo (new Date('2025-12-31'))->addDay(1);  
echo '<br>';
echo (new Date('2025-12-31'))->subDay(3); 
echo $interval->toMonths(); // выведет разницу в месяцах
echo '<br>';
echo (new Date('2025-12-28'))->addYear(1); 
echo $interval->toYears();  // выведет разницу в годах
?>