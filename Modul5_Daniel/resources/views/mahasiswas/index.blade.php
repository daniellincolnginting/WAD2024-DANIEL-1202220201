<h1>Daftar Mahasiswa</h1>
<ul>
    @foreach ($mahasiswas as $mahasiswa)
        <li>
            <a href="{{ route('mahasiswas.show', $mahasiswa->id) }}">
                {{ $mahasiswa->nama_mahasiswa }} ({{ $mahasiswa->nim }})
            </a>
        </li>
    @endforeach
</ul>
