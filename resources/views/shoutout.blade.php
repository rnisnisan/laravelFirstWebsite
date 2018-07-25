<h1>shoutout to :{{$text}}</h1>

@if($text=="gwapako");
	<h1>Gwapako</h1>h1>
@ilseif($text=="gwapako");
	<h1>gwapako</h1>h1>
@endif
@for each($colors as $color==>$description
 @if($color=={{$description}}
 <br/>
@endforeach

 	{{$color}}- it is the color of the sky
 @elseif
 {{ $color }}

@endif


{{ $colors[0] }}
<br/>
{{ $colors [1] }}
<br/>
{{ $color [2] }}
<br/>
@endforeach