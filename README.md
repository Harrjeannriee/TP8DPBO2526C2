# Desain Program
Program ini dikembangkan menggunakan konsep Model-Viw-Controller(MVC) di mana arsitektur memisahkan beberapa tanggung jawab seperti pengelolaan data, proses aplikasi, dan tampilan antarmuka menjadi beberapa file agar program lebih terstruktur dan mudah untuk dikelola. Berikut struktur direktori dan fungsi masing-masing bagiannya:
1. View (app/view): berisi file-file tampilan antarmuka aplikasi yang digunakan untuk menampilkan data dan formulir CRUD. View dibagi menjadi 4 entitas yaitu lecturers, course, lecturer_course, dan schedule. Folder layout digunakan untuk menyimpan komponen tampilan yang digunakan bersama seperti navbar.
2. Controller (app/view): berisi file yang mengatur alur proses aplikasi. Controller menerima dan memproses permintaan pengguna, menghubungkan model dengan view serta menentukan proses crud yang dijalankan.
3. Model (app/view): Berisi file yang bertanggung jawab terhadap pengelolaan data dan komunikasi dengan database MySQL. Setiap model mewakili entitas yang dikelola aplikasi, yaitu Lecturers, Course, LecturerCourse, Schedule.
4. Database(database/): direktori untuk menyimpan berkas yang berkaitan dengan database.
5. Config(config/): berisi konfigurais aplikasi, termasuk database.php yang digunakan untuk mengatur koneksi ke database MySQL.
6. Public (public/): direktori utama yang menjadi akses aplikasi melalui browser, berisi file index.php, create.php, edit.php, dan delete.php untuk menangani permintaan CRUD, serta folder assets yang menyimpan file CSS dan JavaScript Bootsrap.

# Penjelasan Alur
Secara garis besar, alur program ini menggunakan konsep MVC dengan tahapan berikut:
1. User melakukan interaksi melalui browser, seperti melihat data yang tersedia, menambahkan, mengubah, atau menghapus data.
2. Public menerima permintaan pengguna melalui file yang terdapat pada direktori public/ kemudian diarahkan sesuai entitas dan operasi CRUS yang dipilih
3. Controller memproses permintaan dan menentukan tindakan yang perlu dilakukan dengan memanggil model
4. Model menjalankan proses pengolahan data, seperti mengambil, menyimpan, memperbarui, atau menghapus data pada database.
5. Database MySQL menyimpan data dan memberikan hasil sesuai permintaan model
6. Hasil pengolahan data tersebut diteruskan oleh Controller untuk ditampilkan melalui View
7. View menampilkan hasil proses kepada pengguna melalui browser.

# Dokumentasi

### 1. Home

![Home](Dokumentasi/1.Home.png)

### 2. Lecturers

**Data Awal Lecturers**

![Data Awal Lecturers](Dokumentasi/2.%20Data%20Awal%20Lecturers.png)

**Add Lecturer**

![Add Lecturer](Dokumentasi/3.%20Add%20Lecturer.png)

**Setelah Add Lecturer**

![Setelah Add Lecturer](Dokumentasi/4.%20Setelah%20add%20Lecturer.png)

**Edit Lecturer**

![Edit Lecturer](Dokumentasi/5.Edit%20Lecturer.png)

**Setelah Edit Lecturer**

![Setelah Edit Lecturer](Dokumentasi/6.%20Setelah%20edit%20Lecturer.png)

**Konfirmasi Hapus Data Lecturer**

![Konfirmasi Hapus Lecturer](Dokumentasi/7.%20Konfirmasi%20hapus%20data%20Lecturer.png)

**Setelah Hapus Lecturer**

![Setelah Hapus Lecturer](Dokumentasi/8.%20Setelah%20Hapus%20Lecturer.png)

### 3. Courses

**Data Awal Course**

![Data Awal Course](Dokumentasi/9.%20Data%20awal%20Course.png)

**Add Course**

![Add Course](Dokumentasi/10.%20Add%20course.png)

**Setelah Add Course**

![Setelah Add Course](Dokumentasi/11.%20Setelah%20add%20Course.png)

**Edit Course**

![Edit Course](Dokumentasi/12.%20Edit%20course.png)

**Setelah Edit Course**

![Setelah Edit Course](Dokumentasi/13.%20Setelah%20edit%20Course.png)

**Konfirmasi Hapus Data Course**

![Konfirmasi Hapus Course](Dokumentasi/14.%20Konfirmasi%20hapus%20data%20Course.png)

**Setelah Hapus Course**

![Setelah Hapus Course](Dokumentasi/15.%20Setelah%20hapus%20data%20Course.png)

### 4. Lecturer Courses

**Data Awal Lecturer Course**

![Data Awal Lecturer Course](Dokumentasi/16.%20Data%20awal%20Lecturer%20Course.png)

**Add Lecturer Course**

![Add Lecturer Course](Dokumentasi/17.%20Add%20lecturer%20course.png)

**Setelah Add Lecturer Course**

![Setelah Add Lecturer Course](Dokumentasi/18.%20Setelah%20add%20Lecturer%20Course.png)

**Edit Lecturer Course**

![Edit Lecturer Course](Dokumentasi/19.%20Edit%20Lecturer%20Course.png)

**Setelah Edit Lecturer Course**

![Setelah Edit Lecturer Course](Dokumentasi/20.%20Setelah%20edit%20Lecturer%20Course.png)

**Konfirmasi Hapus Lecturer Course**

![Konfirmasi Hapus Lecturer Course](Dokumentasi/21.%20Konfirmasi%20hapus%20data%20Lecturer%20Course.png)

**Setelah Hapus Lecturer Course**

![Setelah Hapus Lecturer Course](Dokumentasi/22.%20Setelah%20hapus%20Lecturer%20Course.png)

### 5. Schedules

**Data Awal Schedule**

![Data Awal Schedule](Dokumentasi/23.%20Data%20awal%20Schedule.png)

**Add Schedule**

![Add Schedule](Dokumentasi/24.%20Add%20Schedule.png)

**Setelah Add Schedule**

![Setelah Add Schedule](Dokumentasi/25.%20Setelah%20add%20Schedule.png)

**Edit Schedule**

![Edit Schedule](Dokumentasi/26.%20Edit%20Schedule.png)

**Setelah Edit Schedule**

![Setelah Edit Schedule](Dokumentasi/27.%20Setelah%20edit%20Schedule.png)

**Konfirmasi Hapus Schedule**

![Konfirmasi Hapus Schedule](Dokumentasi/28.%20Konfirmasi%20hapus%20data%20Schedule.png)

**Setelah Hapus Schedule**

![Setelah Hapus Schedule](Dokumentasi/29.%20Setelah%20hapus%20data%20Schedule.png)
