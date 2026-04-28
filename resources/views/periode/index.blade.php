<h2>Data Periode</h2>
@foreach ($result as $istem)
{{ $istem->tahun_akademik }} - {{ $istem->kode_smt }}  <br/>
@endforeach