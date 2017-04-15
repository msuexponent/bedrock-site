<?php
  $youtube = new Madcoda\Youtube\Youtube(array('key' => 'AIzaSyBgBX-2iSGnapMVlg2Xko15QPVeUT4ZSWM'));
  //  $channel = $youtube->getChannelByName('ASMSUExponent');
  $results = $youtube->searchAdvanced(array(
      'q' => 'msu exponent',
      'part' => 'snippet',
      'maxResults' => 3,
      'order' => 'date',
      'type' => 'video'
  ));
?>

<div id="media-carousel" class="carousel slide top10 bottom40" data-ride="carousel">
    
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
             <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{!! $video->id->videoId !!}" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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
<?php 

//https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UCP51_C7GUpefVEbAQHPCMew&maxResults=3&order=date&type=video&key=AIzaSyBgBX-2iSGnapMVlg2Xko15QPVeUT4ZSWM
?>