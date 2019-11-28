<?php
class Kategori extends Database {
    
    // Menampilkan semua data
    public function index() {
        $datakategori = mysqli_query($this->koneksi,"SELECT * FROM kategori");
        //var_dump($datakategori);
        return $datakategori;
    }

    // Menambahkan data
    public function create($nama,$slug) {
        mysqli_query($this->koneksi,"INSERT INTO kategori VALUES(null,'$nama',$slug')");
    }

    // Menampilkan data berdasarkan id
    public function show($id) {
        $datakategori = mysqli_query($this->koneksi,"SELECT * FROM  kategori WHERE id='$id'");
        return $datakategori;
    }

    // Mengedit data
    public function edit($id) {
        $datakategori = mysqli_query($this->koneksi,"SELECT * FROM kategori WHERE id='$id'");
        return $datakategori;
    }

    // Mengupdate berdasarkan id
    public function update($id,$nama,$slug) {
        mysqli_query($this->koneksi,"UPDATE kategori SET nama='$nama',slug='$slug' WHERE id='$id'");
    }

    // Menghapus data berdasarkan id
    public function delete($id) {
        mysqli_query($this->koneksi,"DELETE FROM kategori WHERE id='$id'");
    }
}
?>