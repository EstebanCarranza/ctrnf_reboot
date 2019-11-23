@extends('layouts.master')
@section('body')
<div class='card-panel theme'>
    <div class="row">
        <div class='col s12 dataRandomTrack theme'></div>
        &nbsp;
        <a class="col s12 btnUpdateTrackSelector blue darken-4 waves-effect waves-light btn"><i class="material-icons right">update</i>Update</a>
    </div>
</div>
    <script>
        $(document).ready(function(){
            $('.materialboxed').materialbox();
            getRaceTracks();            
            
          
            $(".btnUpdateTrackSelector").click(function(){
                if (RaceTracks.length > 0)
                {
                    index = randomIntFromInterval(1, RaceTracks.length) - 1;
                    $(".dataRandomTrack").html("<h1>Number Track: " + RaceTracks[index].numberTrack + "<br>Name track: " + RaceTracks[index].title + "</h1><img class='materialboxed' width='100%' src='"+ RaceTracks[index].pathImg+"'>");
                }
            });
          
            
        });
        
    </script>
@stop
