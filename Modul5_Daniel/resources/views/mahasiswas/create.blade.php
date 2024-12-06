<h1>Tambah Mahasiswa</h1>
<form action="{{ route('mahasiswas.store') }}" method="POST">
    @csrf
    <label>NIM:</label>
    <input type="text" name="nim" required><br>
    <label>Nama Mahasiswa:</label>
    <input type="text" name="nama_mahasiswa" required><br>
    <label>Email:</label>
    <input type="email" name="email" required><br>
    <label>Jurusan:</label>
    <input type="text" name="jurusan" required><br>
    <label>Dosen Pembimbing:</label>
    <select name="dosen_id" required>
        @foreach ($dosens as $dosen)
            <option value="{{ $dosen->id }}">{{ $dosen->nama_dosen }}</option>
        @endforeach
    </select><br>
    <button type="submit">Simpan</button>
</form>
