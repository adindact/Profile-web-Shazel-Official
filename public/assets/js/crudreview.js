// Simpan elemen bintang yang sudah diklik
let clickedStars = [];

// Tambahkan event listener ke setiap bintang
document.querySelectorAll('.rating-stars i').forEach((star, index) => {
    star.addEventListener('click', function() {
        // Reset semua bintang menjadi warna default
        document.querySelectorAll('.rating-stars i').forEach(star => {
            star.style.color = '';
        });

        // Beri warna ke bintang-bintang sebelum dan termasuk bintang saat ini
        for (let i = 0; i <= index; i++) {
            document.querySelectorAll('.rating-stars i')[i].style.color = 'gold';
        }

        // Simpan indeks bintang yang diklik
        clickedStars = Array.from(document.querySelectorAll('.rating-stars i')).slice(0, index + 1);

        // Hapus event listener setelah hasil akhir diklik
        clickedStars.forEach(clickedStar => {
            clickedStar.removeEventListener('click', arguments.callee);
        });
    });
});

// Dungsi button foto
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
