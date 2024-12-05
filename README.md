
# Aplikasi Group Chat  

**Aplikasi Group Chat** adalah aplikasi chatting berbasis web yang memungkinkan komunikasi waktu nyata antara pengguna. Dibangun menggunakan PHP dan MySQL, aplikasi ini menyediakan fitur-fitur canggih untuk mendukung pengalaman pengguna yang menyenangkan.  

---

## Daftar Isi  

- [Pendahuluan](#pendahuluan)  
- [Fitur](#fitur)  
- [Instalasi](#instalasi)  
- [Penggunaan](#penggunaan)  
- [Kontribusi](#kontribusi)  
- [Lisensi](#lisensi)  

---

## Pendahuluan  

**Aplikasi Group Chat** dirancang untuk memungkinkan pengguna berkomunikasi dengan lancar melalui pesan teks dan gambar. Aplikasi ini cocok untuk digunakan dalam komunitas, organisasi, atau tim kecil yang memerlukan platform komunikasi internal yang sederhana namun efisien.  

---

## Fitur  

- **Real-Time Chatting**: Kirim dan terima pesan secara instan.  
- **Dukungan Pesan Gambar**: Unggah dan bagikan gambar dengan pengguna lain.  
- **Profil Pengguna**: Setiap pengguna memiliki halaman profil yang dapat dilihat dan diedit.  
- **Edit Profil**: Pengguna dapat mengubah informasi pribadi mereka dengan mudah.  

---

## Instalasi  

Ikuti langkah-langkah di bawah ini untuk menginstal aplikasi pada server lokal Anda:  

1. **Clone Repositori**:  
   ```bash  
   git clone https://github.com/furiscom/chat.git  
   ```  

2. **Instalasi Dependensi**:  
   Jalankan perintah berikut untuk menginstal dependensi:  
   ```bash  
   php install.php  
   ```  

3. **Konfigurasi Database**:  
   - Buat basis data baru di MySQL.  
   - Impor file `database.sql` yang terdapat di dalam repositori ke basis data Anda.  
   - Konfigurasi kredensial basis data di file `config.php`.  

4. **Jalankan Aplikasi**:  
   Gunakan perintah berikut untuk memulai aplikasi:  
   ```bash  
   php start.php  
   ```  

5. **Akses Aplikasi**:  
   Buka browser Anda dan navigasikan ke `http://localhost/viruszzhkp-group-chat`.  

---

## Penggunaan  

1. **Masuk atau Mendaftar**:  
   - Masukkan kredensial Anda untuk masuk atau daftar jika belum memiliki akun.  

2. **Mulai Mengobrol**:  
   - Cari pengguna lain dan mulai mengirim pesan teks atau gambar.  

3. **Edit Profil**:  
   - Akses halaman profil Anda untuk memperbarui informasi pribadi.  

---

## Kontribusi  

Kami menyambut kontribusi dari siapa pun yang ingin membantu meningkatkan aplikasi ini.  

### Cara Berkontribusi  
1. **Fork Repositori Ini**: Klik tombol "Fork" di GitHub.  
2. **Buat Cabang Baru**:  
   ```bash  
   git checkout -b fitur-baru-anda  
   ```  
3. **Lakukan Perubahan**: Pastikan untuk menguji perubahan Anda.  
4. **Kirim Pull Request**: Kirimkan perubahan Anda ke repositori utama.  

Kami akan meninjau perubahan Anda sesegera mungkin!  

---

## Lisensi  

Aplikasi ini dilisensikan di bawah **MIT License**. Lihat file [LICENSE](LICENSE) untuk detail lebih lanjut.  

---

Semoga aplikasi ini bermanfaat! Jangan ragu untuk memberikan saran atau melaporkan masalah melalui *issue tracker* di GitHub. 😊
