<?php
	$dbhost = "localhost";
	$dbname = "vmdb";
	$dbuser = "root";
	$dbpass = "root";

	global $vmdb;

	$vmdb = new mysqli();
	$vmdb->connect($dbhost,$dbuser,$dbpass,$dbname);
	$vmdb->set_charset("utf8");

	if ($tutorial_db->connect_errno) {
	    printf("Connection failed: %sn", $tutorial_db->connect_error);
	    exit();
	}
	$perPage = 6;

	$sql = "SELECT * from infographics GROUP BY name ORDER BY max(createtime) desc";
	$page = 1;
	if(!empty($_GET["page"])) {
		$page = $_GET["page"];
	}

	$start = ($page-1)*$perPage;
	if($start < 0) 
		$start = 0;

	$query =  $sql . " limit " . $start . "," . $perPage; 
	$infograph = $vmdb->query($query);
	while($results = $infograph->fetch_array()) {
    	$result_array[] = $results;
	}

	if(empty($_GET["rowcount"])) {
		$_GET["rowcount"] = mysqli_num_rows($vmdb->query($sql));
	}
		
	$count = count($result_array);
	$pages  = ceil($_GET["rowcount"]/$perPage);
	$output = '';
	if(!empty($infograph)) {
		$accum = 0;
		$prev = $start - 1;
		$next = $prev + 2;
		$output .= '<input type="hidden" class="pagenum" value="' . $page . '" /><input type="hidden" class="total-page" value="' . $pages . '" />';
		$output .= '<input type="hidden" name="hidden-numinfo" class="numinfo" value="' . ($start + $count) . '" />'; 
		for ($i = 0; $i < ceil($count/3); $i++) {
			$output .= '<div class="clearfix"> </div> <div class="row">';
			for ($j = 0; $j < 3 && $accum < $count; $j++, $accum++) {
				$output .= '<div class="cols-xs-4 col-sm-4 col-md-4 col-lg-4"> <div class="container-limit"> <div class="thumbnaili picitem">' .
					'<a class="img-link" href="#image-' . ($start + $accum). '"> ';
				$output .= '<img class="img-responsive portrait" src="lib/images/' . $result_array[$accum]['name'] . '.jpg" />';
				$output .= '<span> <p class="title-info">' . $result_array[$accum]['title'] . '</p> <p class="date">'; 
				$output .= date('F-d-Y', strtotime($result_array[$accum]['createtime'])) . '</p> </span> </a> </div>'; 
				$output .= '<div class="overlay-info" id="image-' . ($start + $accum) . '">';
				$output .= '<img class="img-responsive" src="lib/images/' . $result_array[$accum]['name'] . '.jpg" />';
				$output .= '<div><h3>' . $result_array[$accum]['title'] . '</h3> </span>';
				$output .= '<p>' . nl2br($result_array[$accum]['descrip']) . "</p>";
				$output .= '<a href="#image-' . $prev . '" class="btn btn-info btn-lg prev"> <span class="glyphicon glyphicon-chevron-left"></span> Previous </a>'; 
				$output .= '<a href="#image-' . $next . '" class="btn btn-info btn-lg next"> <span class="glyphicon glyphicon-chevron-right"></span> Next  </a> </div>'; 
				$output .= '<a href="#page" class="close"> CLOSE </a> </div> </div> </div>'; 
				$prev = $prev + 1;
				$next = $next + 1; 
			} 
			$output .= "</div>";
		} 
	}
	print $output;
?>
