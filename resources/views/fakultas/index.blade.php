<h2>Data fakultas</h2>
@foreach($result as $istem)
{{ $istem->nama }} - {{ $istem->singkatan }} - {{ $istem->dekan }}<br/>
@endforeach