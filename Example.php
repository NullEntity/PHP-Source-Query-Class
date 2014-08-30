<?php
	require __DIR__ . '/SourceQuery/SourceQuery.class.php';

	$query = new SourceQuery();
	function ServerInfo($ip, $port, &$query, &$totalPlayers, &$totalMaxPlayers)
	{
		$ret = "Error loading server info for " . $ip . ":" . $port;
		try
		{
			$query->Connect($ip, $port, 1, SourceQuery::SOURCE);
			$info = $query->GetInfo();
			$ret = $info['Map'] . " [" . $info['Players'] . "/" . $info['MaxPlayers'] . " players]";
			$totalPlayers += $info['Players'];
			$totalMaxPlayers += $info['MaxPlayers'];
		}
		catch(Exception $e) 
		{ 
			
		}
		
		return $ret;
	}
	
	$totalPlayers = 0;
	$totalMaxPlayers = 0;
	echo "Insurgency: " . ServerInfo("fuckyouvilnowputyourfuckingipinhereyourself", 27015, $query, $totalPlayers, $totalMaxPlayers) . " <a href=\"steam://connect/fuckyouvilnowputyourfuckingipinhereyourself\">Join</a><br />";
	echo "Total Players: " . $totalPlayers . "/" . $totalMaxPlayers;
	
;
	
	$query->Disconnect( );
?>
