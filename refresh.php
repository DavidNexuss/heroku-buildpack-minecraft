<?

while(true){

	error_log("Se ha refrescado el dyno", 0);
	file_get_contents('http://mc-vanilla.herokuapp.com');
	sleep(1200);
}
?>
