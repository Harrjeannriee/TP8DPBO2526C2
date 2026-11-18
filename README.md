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
![1. Home](Dokumentasi/01-home.png)

### 2. Lecturers
<details>
<summary>View Lecturers Documentation</summary>

**2. Data Awal Lecturers**
![2. Data Awal Lecturers](Dokumentasi/02-data-awal-lecturers.png)

**3. Add Lecturer**
![3. Add Lecturer](Dokumentasi/03-add-lecturer.png)

**4. Setelah Add Lecturer**
![4. Setelah Add Lecturer](Dokumentasi/04-setelah-add-lecturer.png)

**5. Edit Lecturer**
![5. Edit Lecturer](Dokumentasi/05-edit-lecturer.png)

**6. Setelah Edit Lecturer**
![6. Setelah Edit Lecturer](Dokumentasi/06-setelah-edit-lecturer.png)

**7. Konfirmasi Hapus Data Lecturer**
![7. Konfirmasi Hapus Lecturer](Dokumentasi/07-konfirmasi-hapus-lecturer.png)

**8. Setelah Hapus Lecturer**
![8. Setelah Hapus Lecturer](Dokumentasi/08-setelah-hapus-lecturer.png)
</details>

### 3. Courses
<details>
<summary>View Courses Documentation</summary>

**9. Data Awal Course**
![9. Data Awal Course](Dokumentasi/09-data-awal-course.png)

**10. Add Course**
![10. Add Course](Dokumentasi/10-add-course.png)

**11. Setelah Add Course**
![11. Setelah Add Course](Dokumentasi/11-setelah-add-course.png)

**12. Edit Course**
![12. Edit Course](Dokumentasi/12-edit-course.png)

**13. Setelah Edit Course**
![13. Setelah Edit Course](Dokumentasi/13-setelah-edit-course.png)

**14. Konfirmasi Hapus Data Course**
![14. Konfirmasi Hapus Course](Dokumentasi/14-konfirmasi-hapus-course.png)

**15. Setelah Hapus Course**
![15. Setelah Hapus Course](Dokumentasi/15-setelah-hapus-course.png)

</details>

### 4. Lecturer Courses
<details>
<summary>View Lecturer Courses Documentation</summary>

**16. Data Awal Lecturer Course**
![16. Data Awal Lecturer Course](Dokumentasi/16-data-awal-lecturer-course.png)

**17. Add Lecturer Course**
![17. Add Lecturer Course](Dokumentasi/17-add-lecturer-course.png)

**18. Setelah Add Lecturer Course**
![18. Setelah Add Lecturer Course](Dokumentasi/18-setelah-add-lecturer-course.png)

**19. Edit Lecturer Course**
![19. Edit Lecturer Course](Dokumentasi/19-edit-lecturer-course.png)

**20. Setelah Edit Lecturer Course**
![20. Setelah Edit Lecturer Course](Dokumentasi/20-setelah-edit-lecturer-course.png)

**21. Konfirmasi Hapus Data Lecturer Course**
![21. Konfirmasi Hapus Lecturer Course](Dokumentasi/21-konfirmasi-hapus-lecturer-course.png)

**22. Setelah Hapus Lecturer Course**
![22. Setelah Hapus Lecturer Course](Dokumentasi/22-setelah-hapus-lecturer-course.png)

</details>

### 5. Schedules
<details>
<summary>View Schedules Documentation</summary>

**23. Data Awal Schedule**
![23. Data Awal Schedule](Dokumentasi/23-data-awal-schedule.png)

**24. Add Schedule**
![24. Add Schedule](Dokumentasi/24-add-schedule.png)

**25. Setelah Add Schedule**
![25. Setelah Add Schedule](Dokumentasi/25-setelah-add-schedule.png)

**26. Edit Schedule**
![26. Edit Schedule](Dokumentasi/26-edit-schedule.png)

**27. Setelah Edit Schedule**
![27. Setelah Edit Schedule](Dokumentasi/27-setelah-edit-schedule.png)

**28. Konfirmasi Hapus Data Schedule**
![28. Konfirmasi Hapus Schedule](Dokumentasi/28-konfirmasi-hapus-schedule.png)

**29. Setelah Hapus Schedule**
![29. Setelah Hapus Schedule](Dokumentasi/29-setelah-hapus-schedule.png)

</details>