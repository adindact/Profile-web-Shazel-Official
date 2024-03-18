// Bintang agar bisa di klik
let clickedStars = [];

// Tambahkan event listener ke setiap bintang
document.querySelectorAll('.rating-stars img').forEach((star, index) => {
    star.addEventListener('click', function() {
        // Reset semua bintang menjadi warna default
        document.querySelectorAll('.rating-stars img').forEach(star => {
            star.src = "./assets/images/Star.png"; // Mengembalikan semua bintang ke bentuk aslinya
        });

        // Beri warna ke bintang-bintang sebelum dan termasuk bintang saat ini
        for (let i = 0; i <= index; i++) {
            document.querySelectorAll('.rating-stars img')[i].src = "./assets/images/StarSelected.png"; // Mengubah gambar bintang yang diklik
        }

        // Simpan indeks bintang yang diklik
        clickedStars = Array.from(document.querySelectorAll('.rating-stars img')).slice(0, index + 1);

        // Hapus event listener setelah hasil akhir diklik
        clickedStars.forEach(clickedStar => {
            clickedStar.removeEventListener('click', arguments.callee);
        });
    });
});

// Fungsi button foto
const imageUploadButton = document.getElementById('image-upload-button');
const videoUploadButton = document.getElementById('video-upload-button');

imageUploadButton.addEventListener('click', () => {
  // Open file selection dialog for images
  const input = document.createElement('input');
  input.type = 'file';
  input.accept = 'image/*';
  input.click();
});

videoUploadButton.addEventListener('click', () => {
  // Open file selection dialog for videos
  const input = document.createElement('input');
  input.type = 'file';
  input.accept = 'video/*';
  input.click();
});

// Button Upload
// Ambil formulir review
const reviewForm = document.querySelector('form');

// Tambahkan event listener untuk saat formulir disubmit
reviewForm.addEventListener('submit', async (event) => {
    // Cegah perilaku default formulir disubmit
    event.preventDefault();

    // Dapatkan data formulir
    const formData = new FormData(reviewForm);

    try {
        // Kirim data ke backend menggunakan fetch
        const response = await fetch('{{ route("submit.crudreview") }}', {
            method: 'POST',
            body: formData
        });

        // Periksa apakah respons berhasil
        if (response.ok) {
            // Jika berhasil, tampilkan pesan sukses atau lakukan tindakan lain
            console.log('Review berhasil dikirim!');
        } else {
            // Jika gagal, tangani kesalahan (misalnya tampilkan pesan kesalahan)
            console.error('Gagal mengirim review:', response.statusText);
        }
    } catch (error) {
        // Tangani kesalahan jika ada masalah dengan fetch
        console.error('Terjadi kesalahan:', error);
    }
});