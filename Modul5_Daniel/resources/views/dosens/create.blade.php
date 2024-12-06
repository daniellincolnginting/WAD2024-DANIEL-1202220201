<h1>Tambah Dosen</h1>
<form action="{{ route('dosens.store') }}" method="POST">
    @csrf
    <label>Kode Dosen:</label>
    <input type="text" name="kode_dosen" required><br>
    <label>Nama Dosen:</label>
    <input type="text" name="nama_dosen" required><br>
    <label>NIP:</label>
    <input type="text" name="nip" required><br>
    <label>Email:</label>
    <input type="email" name="email" required><br>
    <label>No Telepon:</label>
    <input type="text" name="no_telepon"><br>
    <button type="submit">Simpan</button>
</form>
