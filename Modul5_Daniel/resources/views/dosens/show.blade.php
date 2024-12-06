<h1>Detail Dosen: {{ $dosen->nama_dosen }}</h1>
<p>Kode Dosen: {{ $dosen->kode_dosen }}</p>
<p>Email: {{ $dosen->email }}</p>
<p>No Telepon: {{ $dosen->no_telepon }}</p>

<h2>Mahasiswa Bimbingan:</h2>
<ul>
    @foreach ($dosen->mahasiswas as $mahasiswa)
        <li>{{ $mahasiswa->nama_mahasiswa }} ({{ $mahasiswa->nim }})</li>
    @endforeach
</ul>
