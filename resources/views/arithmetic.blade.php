<head>
<h1>arithmetic</h1>
</head>

		@if($operator == "muli")
			<h1>Multiplication</h1>
			<p>&nbsp {{ $n1 }}</p>
			<p><u>* {{ $n2 }}</u></p>
			<h2><b><p>{{ $n1*$n2 }}</p></b></h2>

	   @elseif($operator == "add")
	        <h1>Addtion</h1>
			<p>&nbsp {{ $n1 }}</p>
			<p><u>+ {{ $n2 }}</u></p>
			<h2><b><p>{{ $n1+$n2 }}</p></b></h2>

	  @elseif($operator == "div")
			<h1>Division</h1>
			<p>&nbsp {{ $n1 }}</p>
			<p><u>÷ {{ $n2 }}</u></p>
			<h2><b><p>{{ $n1/$n2 }}</p></b></h2>

	 @elseif($operator == "sub")
			<h1>Subtraction</h1>
			<p>&nbsp {{ $n1 }}</p>
			<p><u>- {{ $n2 }}</u></p>
			<h2><b><p>{{ $n1-$n2 }}</p></b></h2>

@endif
