<?php 

$sampleData = array(
	"Salicaceae"=>"NC_008235.1,NC_024735.1,NC_024747.1,NC_024734.1,NC_027425.1,NC_028504.1,NC_009143.1,NC_024681.1,NC_028350.1,NC_026462.1",
	"Fagopyrum_cymosum"=>"NC_016729.1,NC_023358.1,NC_016728.1,NC_023359.1,NC_016727.1,NC_016730.1,NC_023357.1,NC_010776.1,NC_007977.1,NC_007578.1,NC_008096.2",
	"Solanum_commersonii"=>"NC_018552.1,NC_007943.1,NC_028069.2,NC_008096.2,NC_007898.3,NC_028070.2,NC_008535.1",
	"Capsicum_chinense_Jacq"=>"NC_018552.1,NC_026551.1,NC_007898.3,NC_007943.1,NC_008096.2,NC_007500.1,NC_007602.1,NC_026703.1"
	);



router($_REQUEST, $sampleData);


function samplesMenu($samples, $mode) {
	$re = '<ul>';
	foreach ($samples as $name => $ncs) {
		$re .= '<li><a href="index.php?mode='.$mode.'&sample='.$name.'">'.$name.' Sample by '.ucfirst($mode).' Mode</a></li>';
	}
	$re .= '</ul>';
	return $re;
}

function router($para, $sampleData) {

	if ( $para==null ) { 
		include("home.php");
		return;
	}

	include("header.php");

	$fastSample = samplesMenu($sampleData, 'fast');
	$normalSample = samplesMenu($sampleData, 'normal');

$DEFAULT_PAGE = <<<DEFAULT_PAGE
<div class="page-header">
    <h2>Service Unrecognized</h1>
	<div class="alert alert-warning">
		<strong>Warning!</strong> You need to specify the service mode. Try the entry below.
	</div>
</div>
Back to <a href="../index.php">Introduction</a>
<hr/>

<p>
<h3> Service entry: </h3>
<ul>
	<li><a href="index.php?mode=fast">Fast Mode</a></li>
	{$fastSample}
	<li><a href="index.php?mode=normal">Normal Mode</a></li>
	{$normalSample}
</ul>
<h3> Database entry: </h3>
<ul>
	<li><a href="mtdb.php">MTDB</a></li>
</ul>
</p>
DEFAULT_PAGE;

	// manual as default
	if ( !isset ($para['mode']) )
		$mode = "";
	else 
		$mode = $para['mode'];

	// step 1 as default
	if ( !isset ($para['step']) )
		$step = 1;
	else 
		$step = $para['step'];


	if ( !isset ($para['sample']) )
		$sample = "";
	else 
		$sample = $para['sample'];

	// for test only
	// if ( $mode == "test") {
	// 	include("getGeneList.php");
	// 	return;
	// } else
	
	if ( $mode == "normal" ) {
		if ( $step == 1 )
			include("getNameList.php");
		else if ( $step == 2 ) 
			include("getGeneList.php");
		else if ( $step == 3 )
			include("confirmList.php");
	} else if ( $mode == "fast" ) {
		if ( $step == 1 )
			include("getNameList.php");
		else if ( $step == 2 ) 
			include("confirmList.php");
	} else {
		echo $DEFAULT_PAGE;
	}

	include("footer.php");
}