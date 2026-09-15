<x-layout>
  <x-slot:title>{{ $title ?? 'About' }} - Ahmad Baihaqi</x-slot>

  <div style="max-width: 800px; margin: 0 auto; padding: 20px;">
    
    <!-- Judul Halaman -->
    <div style="text-align: center; margin-bottom: 30px;">
      <h1 style="font-size: 28px; font-weight: bold; color: #333;">Tentang Saya</h1>
      <p style="color: #666; font-size: 14px;">Kenalan lebih dekat dengan profil dan latar belakang saya.</p>
    </div>

    <!-- Kotak Konten About -->
    <div style="background: #f9f9f9; padding: 25px; border: 1px solid #ddd; border-radius: 8px; line-height: 1.6;">
      
      <h3 style="font-size: 20px; color: #007bff; margin-bottom: 10px;">Halo, saya Ahmad Baihaqi! </h3>
      
      <p style="font-size: 14px; color: #444; margin-bottom: 15px;">
        Saya adalah seorang mahasiswa atau developer pemula yang sedang antusias belajar pemrograman web, khususnya menggunakan framework Laravel. Project ini dibuat sebagai bagian dari latihan praktik untuk memahami konsep dasar database, migrasi, dan Eloquent ORM.
      </p>

      <p style="font-size: 14px; color: #444; margin-bottom: 20px;">
        Melalui website blog sederhana ini, saya belajar bagaimana cara mengelola data dari database dan menampilkannya secara dinamis ke halaman web menggunakan Blade templating.
      </p>

      <hr style="border: none; border-top: 1px solid #ddd; margin: 20px 0;">

      <h4 style="font-size: 16px; color: #333; margin-bottom: 10px;">Keahlian yang Sedang Dipelajari:</h4>
      <ul style="font-size: 14px; color: #444; padding-left: 20px; line-height: 1.8;">
        <li>PHP & Laravel Framework (v11)</li>
        <li>Database Management (SQLite & MySQL)</li>
        <li>HTML, CSS, & Tailwind CSS</li>
        <li>Git & GitHub Version Control</li>
      </ul>

    </div>

  </div>
</x-layout>