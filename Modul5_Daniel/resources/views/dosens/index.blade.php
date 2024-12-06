<h1>Daftar Dosen</h1>
<ul>
    @foreach ($dosens as $dosen)
        <li>
            <a href="{{ route('dosens.show', $dosen->id) }}">
                {{ $dosen->nama_dosen }} ({{ $dosen->kode_dosen }})
            </a>
        </li>
    @endforeach
</ul>
