<?php
	require __DIR__ . '/SourceQuery/SourceQuery.class.php';

	$query = new SourceQuery();
	function ServerInfo($ip, $port)
	{
		global $query;	
		$ret = "Error loading server info for " . $ip . ":" . $port;
		try
		{
			$query->Connect($ip, $port, 1, SourceQuery::SOURCE);
			$info = $query->GetInfo();
			$ret = $info['Map'] . " [" . $info['Players'] . "/" . $info['MaxPlayers'] . " players]";
		}
		catch(Exception $e) 
		{ 
			
		}
		
		return ret;
	}
	
	echo "Insurgency: " . ServerInfo("fuckyouvilnowputyourfuckingipinhereyourself", 27015);
	
	$query->Disconnect( );
?>
