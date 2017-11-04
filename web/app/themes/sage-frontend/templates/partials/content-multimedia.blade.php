<?php

  /* Get latest three uploads from the MSU exponent youtube account using the Madcoda Youtube API wrapper */
  $youtube = new Madcoda\Youtube\Youtube(array('key' => 'AIzaSyBgBX-2iSGnapMVlg2Xko15QPVeUT4ZSWM'));

  $getUploadsId = $youtube->getChannelByName('ASMSUExponent');

  $uploads = json_decode(json_encode($getUploadsId), true);

  $results = $youtube->getPlaylistItemsByPlaylistIdAdvanced(array('playlistId' => $uploads['contentDetails']['relatedPlaylists']['uploads'], 'part' => 'contentDetails', 'maxResults' => 3));
  $resultsJson = json_decode(json_encode($results), true);

?>

<div id="media-carousel" class="carousel slide top10 bottom40" data-ride="carousel" data-interval="false">
    
  	<ol class="carousel-indicators">
      @php($i = 0)
      @while($i < count($results)) 
      	<li data-target="#media-carousel" data-slide-to="{!! $i !!}" class="@if($i == 0) {!! 'active' !!} @endif"></li>
        @php($i++)
      @endwhile
  	</ol>

  	<div class="carousel-inner" role="listbox">
      @php($j = 0)
      @foreach($results as $video)
        <div class="carousel-item @if($j == 0) {!! 'active' !!} @endif">
          <div class="embed-responsive embed-responsive-16by9" align="center">
             <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{!! $resultsJson[$j]['contentDetails']['videoId'] !!}" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
         @php($j++)
      @endforeach
  	</div>
  	<a class="left carousel-control" href="#media-carousel" role="button" data-slide="prev">
    	<span class="icon-prev" aria-hidden="true"></span>
    	<span class="sr-only">Previous</span>
  	</a>
  	<a class="right carousel-control" href="#media-carousel" role="button" data-slide="next">
    	<span class="icon-next" aria-hidden="true"></span>
    	<span class="sr-only">Next</span>
	</a>
</div>