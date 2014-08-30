<?php
	require __DIR__ . '/SourceQuery/SourceQuery.class.php';

	$query = new SourceQuery();
	function info($ip, $port)
	{
		$ret = "Error loading server info for " . $ip . ":" . $port;
		try
		{
			$query->Connect($ip, $port, 1, SourceQuery::SOURCE);
			$info = $query->GetInfo();
			$ret = $info['Map'] . " [" . $info['Players'] . "/" $info['MaxPlayers'] . " players]";
		}
		return ret;
	}
	
	echo "Insurgency: " . info("vnbinsurgtdm.game.nfoservers.com", 27015);
	
	$Query->Disconnect( );
?>
