// // Bintang agar bisa di klik
// // let clickedStars = [];

// // Tambahkan event listener ke setiap bintang
// // document.querySelectorAll('.rating-stars img').forEach((star, index) => {
// //     star.addEventListener('click', function() {
// //         // Reset semua bintang menjadi warna default
// //         document.querySelectorAll('.rating-stars img').forEach(star => {
// //             star.src = "./assets/images/Star.png"; // Mengembalikan semua bintang ke bentuk aslinya
// //         });

// //         // Beri warna ke bintang-bintang sebelum dan termasuk bintang saat ini
// //         for (let i = 0; i <= index; i++) {
// //             document.querySelectorAll('.rating-stars img')[i].src = "./assets/images/StarSelected.png"; // Mengubah gambar bintang yang diklik
// //         }

// //         // Simpan indeks bintang yang diklik
// //         clickedStars = Array.from(document.querySelectorAll('.rating-stars img')).slice(0, index + 1);

// //         // Hapus event listener setelah hasil akhir diklik
// //         clickedStars.forEach(clickedStar => {
// //             clickedStar.removeEventListener('click', arguments.callee);
// //         });
// //     });
// // });

// document.querySelectorAll('.rating-stars img').forEach(star => {
//     star.addEventListener('click', function() {
//         const ratingValue = parseInt(this.getAttribute('data-value')); // Ambil nilai rating dari atribut data-value

//         // Set nilai rating pada input tersembunyi
//         document.getElementById('rating').value = ratingValue;

//         // Reset semua bintang menjadi warna default
//         document.querySelectorAll('.rating-stars img').forEach(star => {
//             star.src = "./assets/images/Star.png"; // Mengembalikan semua bintang ke bentuk aslinya
//         });

//         // Beri warna ke bintang-bintang sebelum dan termasuk bintang saat ini
//         for (let i = 0; i < ratingValue; i++) {
//             document.querySelectorAll('.rating-stars img')[i].src = "./assets/images/StarSelected.png"; // Mengubah gambar bintang yang diklik
//         }
//     });
// });


// // Fungsi button foto
// const imageUploadButton = document.getElementById('image-upload-button');
// const videoUploadButton = document.getElementById('video-upload-button');

// imageUploadButton.addEventListener('click', () => {
//   // Open file selection dialog for images
//   const input = document.createElement('input');
//   input.type = 'file';
//   input.accept = 'image/*';
//   input.click();
// });

// videoUploadButton.addEventListener('click', () => {
//   // Open file selection dialog for videos
//   const input = document.createElement('input');
//   input.type = 'file';
//   input.accept = 'video/*';
//   input.click();
// });

// // Button Upload
// // Ambil formulir review
// // const reviewForm = document.querySelector('form');

// // Tambahkan event listener untuk saat formulir disubmit
// // reviewForm.addEventListener('submit', async (event) => {
// //     // Cegah perilaku default formulir disubmit
// //     event.preventDefault();

// //     // Dapatkan data formulir
// //     const formData = new FormData(reviewForm);

// //     // Tambahkan CSRF token ke dalam formData
// //     const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
// //     formData.append('_token', csrfToken);

// //     try {
// //         // Kirim data ke backend menggunakan fetch
// //         const response = await fetch(processCreateReviewURL, { // Gunakan URL yang telah disimpan
// //             method: 'POST',
// //             body: formData
// //         });

// //         // Periksa apakah respons berhasil
// //         if (response.ok) {
// //             // Jika berhasil, arahkan pengguna ke halaman showReview
// //             window.location.href = showReviewURL;
// //         } else {
// //             // Jika gagal, tangani kesalahan (misalnya tampilkan pesan kesalahan)
// //             console.error('Gagal mengirim review:', response.statusText);
// //             // Tampilkan pesan kesalahan di sini
// //         }
// //     } catch (error) {
// //         // Tangani kesalahan jika ada masalah dengan fetch
// //         console.error('Terjadi kesalahan:', error);
// //         // Tampilkan pesan kesalahan di sini
// //     }
// // });

// // Tambahkan event listener untuk saat formulir disubmit
// // Tambahkan event listener untuk saat formulir disubmit
// // reviewForm.addEventListener('submit', async (event) => {
// //     // Cegah perilaku default formulir disubmit
// //     event.preventDefault();

// //     // Dapatkan data formulir
// //     const formData = new FormData(reviewForm);

// //     // Tambahkan CSRF token ke dalam formData
// //     const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
// //     formData.append('_token', csrfToken);

// //     try {
// //         // Kirim data ke backend menggunakan fetch
// //         const response = await fetch(processCreateReviewURL, { // Gunakan URL yang telah disimpan
// //             method: 'POST',
// //             body: formData
// //         });

// //         // Periksa apakah respons berhasil
// //         if (response.ok) {
// //             // Jika berhasil, tampilkan pesan sukses atau lakukan tindakan lain
// //             console.log('Review berhasil dikirim!');
// //             // Redirect atau tampilkan pesan sukses di sini
// //         } else {
// //             // Jika gagal, tangani kesalahan (misalnya tampilkan pesan kesalahan)
// //             console.error('Gagal mengirim review:', response.statusText);
// //             // Tampilkan pesan kesalahan di sini
// //         }
// //     } catch (error) {
// //         // Tangani kesalahan jika ada masalah dengan fetch
// //         console.error('Terjadi kesalahan:', error);
// //         // Tampilkan pesan kesalahan di sini
// //     }
// // });

// const reviewForm = document.querySelector('form');

// reviewForm.addEventListener('submit', async (event) => {
//     event.preventDefault();

//     const formData = new FormData(reviewForm);
//     const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
//     formData.append('_token', csrfToken);

//     try {
//         const response = await fetch(processCreateReviewURL, {
//             method: 'POST',
//             body: formData
//         });

//         if (response.ok) {
//             console.log('Review berhasil dikirim!');
//             window.location.href = showReviewURL;
//         } else {
//             console.error('Gagal mengirim review:', response.statusText);
//             // Tampilkan pesan kesalahan di sini
//         }
//     } catch (error) {
//         console.error('Terjadi kesalahan:', error);
//         // Tampilkan pesan kesalahan di sini
//     }
// });

// Ambil formulir review
const reviewForm = document.querySelector('form');

// Tambahkan event listener untuk saat formulir disubmit
reviewForm.addEventListener('submit', async (event) => {
    event.preventDefault();

    const formData = new FormData(reviewForm);
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    formData.append('_token', csrfToken);

    try {
        const response = await fetch(processCreateReviewURL, {
            method: 'POST',
            body: formData
        });

        if (response.ok) {
            console.log('Review berhasil dikirim!');
            window.location.href = showReviewURL;
        } else {
            console.error('Gagal mengirim review:', response.statusText);
            // Tampilkan pesan kesalahan di sini
        }
    } catch (error) {
        console.error('Terjadi kesalahan:', error);
        // Tampilkan pesan kesalahan di sini
    }
});
