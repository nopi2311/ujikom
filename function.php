<?php
function tampilkanBerita($gambar, $tanggal, $judul, $link) {
    echo "
    <div class='col-md-6'>
        <div class='card h-100 shadow-sm rounded-4'>
            <img src='$gambar' class='card-img-top' alt='Berita' style='object-fit: cover; height: 250px;'>
            <div class='card-body d-flex flex-column'>
                <p class='card-text-date mb-1'>$tanggal</p>
                <h5 class='card-title'>$judul</h5>
                <a href='$link' class='btn-baca mt-auto'>Baca Selengkapnya →</a>
            </div>
        </div>
    </div>";
}
?>
