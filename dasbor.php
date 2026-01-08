<?php
// Query diperbaiki: nama tabel disesuaikan menjadi 'articel' (sesuai database Anda)
$sql1 = "SELECT * FROM articel ORDER BY tanggal DESC";


// Menghitung jumlah baris data dari tabel articel
// Jika kueri gagal karena tabel tidak ada, kita beri nilai default 0
$jumlah_article = ($hasil1) ? $hasil1->num_rows : 0; 

// Bagian print_r dihapus agar tidak muncul angka "mentah" di atas tampilan
?>

<h3 class="mb-4">Dashboard</h3>

<div class="row row-cols-1 row-cols-md-4 g-4 justify-content-start pt-2">
    <div class="col">
        <div class="card border border-danger mb-3 shadow" style="max-width: 18rem;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="p-2">
                        <h5 class="card-title mb-0"><i class="bi bi-newspaper"></i> Article</h5> 
                    </div>
                    <div class="p-2">
                        <span class="badge rounded-pill text-bg-danger fs-2"><?php echo $jumlah_article; ?></span>
                    </div> 
                </div>
            </div>
        </div>
    </div> 

    <div class="col">
        <div class="card border border-danger mb-3 shadow" style="max-width: 18rem;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="p-2">
                        <h5 class="card-title mb-0"><i class="bi bi-camera"></i> Gallery</h5> 
                    </div>
                    <div class="p-2">
                        <span class="badge rounded-pill text-bg-danger fs-2">0</span>
                    </div> 
                </div>
            </div>
        </div>
    </div> 
</div>