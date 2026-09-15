<x-layout>
  <x-slot:title>{{ $title ?? 'Contact' }} - Ahmad Baihaqi</x-slot>

  <div style="max-width: 800px; margin: 0 auto; padding: 20px;">
    
    <!-- Judul Halaman -->
    <div style="text-align: center; margin-bottom: 30px;">
      <h1 style="font-size: 28px; font-weight: bold; color: #333;">Hubungi Saya</h1>
      <p style="color: #666; font-size: 14px;">Silakan isi formulir di bawah ini atau hubungi kontak yang tersedia.</p>
    </div>

    <!-- Layout 2 Kolom Sederhana -->
    <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: space-between;">
      
      <!-- Kolom Info Kontak -->
      <div style="flex: 1; min-width: 250px; background: #f9f9f9; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
        <h3 style="font-size: 18px; margin-bottom: 15px; color: #333;">Info Kontak</h3>
        
        <ul style="list-style: none; padding: 0; line-height: 1.8; font-size: 14px;">
          <li><strong>Email:</strong> <a href="mailto:ahmad@example.com" style="color: #007bff; text-decoration: none;">ahmadbaihaqi140508@gmail.com</a></li>
          <li><strong>WhatsApp:</strong> <a href="https://wa.me/6285882631471" target="_blank" style="color: #28a745; text-decoration: none;">+62 858-8263-1471</a></li>
          <li><strong>Instagram:</strong> <a href="https://instagram.com/ahmmdbhqii" target="_blank" style="color: #e4405f; text-decoration: none;">@ahmmdbhqii</a></li>
          <li><strong>Lokasi:</strong> Bekasi, Jawa Barat, Indonesia</li>
        </ul>
      </div>

      <!-- Kolom Form Pesan -->
      <div style="flex: 1; min-width: 250px; background: #f9f9f9; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
        <h3 style="font-size: 18px; margin-bottom: 15px; color: #333;">Kirim Pesan</h3>

        <form action="https://wa.me/6285882631471" method="get" target="_blank">
          
          <div style="margin-bottom: 15px;">
            <label style="display: block; font-size: 13px; font-weight: bold; margin-bottom: 5px;">Nama Lengkap</label>
            <input type="text" name="text" placeholder="Masukkan nama Anda..." required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
          </div>

          <div style="margin-bottom: 15px;">
            <label style="display: block; font-size: 13px; font-weight: bold; margin-bottom: 5px;">Pesan</label>
            <textarea name="pesan" rows="4" placeholder="Tulis pesan Anda di sini..." required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; resize: vertical;"></textarea>
          </div>

          <button type="submit" style="background-color: #007bff; color: white; border: none; padding: 10px 15px; font-size: 14px; border-radius: 4px; cursor: pointer; width: 100%;">
            Kirim Pesan via WhatsApp
          </button>

        </form>
      </div>

    </div>

  </div>
</x-layout>