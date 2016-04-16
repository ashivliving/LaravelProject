@extends('layouts.master')
  
@section('content')
<?php 
	
	if(!empty($_GET['location'])){
		$maps_url = 'http://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($_GET['location']);

		$maps_json = file_get_contents($maps_url);
        $maps_array = json_decode($maps_json,true);
       $lat = $maps_array['results'][0]['geometry']['location']['lat'];
       $lng = $maps_array['results'][0]['geometry']['location']['lng'];

        $insta = 'https://api.instagram.com/v1/media/search?lat='.$lat.'&lng='.$lng.'&access_token=1427612163.1fb234f.a3af98b37aa847069a2e4037a8065490';

        $insta_json = file_get_contents($insta);
       $insta_array = json_decode($insta_json,true);
      // echo $insta_array['data'];
	}
?>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="welcome">
        <form action="">
			<input type="text" name="location"></input>
			<button type="submit">Submit</button>
		</form>
      </br>
       <p>
        <?php 
        if(isset($_REQUEST['location']))
        {
        	echo "Recent instagram pic of ".$_REQUEST['location'];
          
        }
        else
        	echo "Search the recent instagram pic of any location.";
        	?>
        </p>
    
<?php
	if(!empty($insta_array)){
	foreach($insta_array['data'] as $image){
		echo '<img src="'.$image['images']['low_resolution']['url'].'"';
		//echo $image['images']['low_resolution']['url'];
		// $image.'<br>';
	}
}
?>
</div>
</div>
  </div>
@endsection