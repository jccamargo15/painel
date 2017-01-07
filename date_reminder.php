<?php
class MyDateTime extends DateTime
{
	public static function createFromFormat($format, $time, $timezone = null)
	{
		if(!$timezone) $timezone = new DateTimeZone(date_default_timezone_get());
		$version = explode('.', phpversion());
		if(((int)$version[0] >= 5 && (int)$version[1] >= 2 && (int)$version[2] > 17)){
			return parent::createFromFormat($format, $time, $timezone);
		}
		return new DateTime(date($format, strtotime($time)), $timezone);
	}
}

// database query, select all dates
$query = mysqli_query ( $conn, "SELECT * FROM tb_dates ORDER BY date_date ASC" );

// pass through all the records found
while($row = mysqli_fetch_assoc($query)) {
	/* calculate remaining days up to date */
	//$futureDate = DateTime::createFromFormat( 'd/m/Y', date("d/m/Y", strtotime($row['date_date'])) );
	//$futureDate = new DateTime( date("d/m/Y", $row['date_date']) );
	//$currentDate = new DateTime();
	//$currentDate = new DateTime( date("d/m/Y") );
	// returns a object DateInterval
	
	//$interval = $futureDate->diff($currentDate);
	
	
	//passa a data atual em formato UNIX
	$currentDate = date("U");
	
	
	//passa a data gravada para format UNIX
	//$futureDate = strtotime(date("d-m-Y", $row['date_date']));
	$date = date_create( $row['date_date'] );
	$futureDate = date_format($date, 'U');
	
	$interval = $futureDate - $currentDate; //30 dias em UNIX 2592000 -- 1 dia em UNIX 86400
	
	//echo '<br/>Hoje: ' .date("Y-m-d",$currentDate).'<br />'. 'Dia Marcado: '.date("Y-m-d",$futureDate).'<br />'. 'Diferenca: '.$interval;
	
	
	//converte a data atual em UNIX para data comum
	//$currentDate = date("Y-m-d",$currentDate);
	//converte data anterior em UNIX para formato comum
	//$mes_atras = date("Y-m-d",$mes_atras);
	
	
	// print de reminder phrase according with remaining days to date
	// if between 2 to 15 days left: remaining alert
	// 2 days = 172800 -- 15 days = 1296000
	if ( ($interval >= 172800) && ($interval <= 1296000) ) {
		echo '<div class="alert alert-danger" role="alert">Faltam ';
		$dias = (integer) $interval/86400;
		echo number_format($dias,0);
		echo ' dias para para o <strong>pagamento</strong> de ' . $row['date_name'] . '</div>';
	}
	// if 1 days remaining: tomorrow alert
	if ( ($interval >= 0) && ($interval <= 86400) ) {
		echo '<div class="alert alert-danger" role="alert">Amanhã é o dia do <strong>pagamento</strong> de ' . $row['date_name'] . '</div>';
	}
	// if 0 days remaining: today alert
	if ( ($interval >= -86400) && ($interval <= -1) ) {
		echo '<div class="alert alert-danger" role="alert">O <strong>pagamento</strong> de ' . $row['date_name'] . ' é <strong>hoje</strong>!</div>';
	}
}

?>