<x-filament-panels::page>
    <div class="max-w-5xl mx-auto bg-white shadow-md rounded-lg p-6">
      <h1 class="text-2xl font-bold mb-4 text-gray-700">Laporan Pendapatan</h1>
      <div class="mb-6">
        <p class="text-gray-600"><strong>Periode:</strong> 01 Desember 2024 s/d 29 Desember 2024</p>
        <p class="text-gray-600"><strong>Shift:</strong> Semua</p>
        <p class="text-gray-600"><strong>Pembayaran:</strong> Semua</p>
      </div>

      <div class="mb-6">
        <h2 class="text-lg font-semibold text-gray-700 mb-2">Penerimaan</h2>
        <div class="overflow-x-auto">
          <table class="w-full table-auto border-collapse border border-gray-200">
            <thead>
              <tr class="bg-gray-50">
                <th class="border border-gray-200 px-4 py-2 text-left">No</th>
                <th class="border border-gray-200 px-4 py-2 text-left">Tanggal</th>
                <th class="border border-gray-200 px-4 py-2 text-left">Shift</th>
                <th class="border border-gray-200 px-4 py-2 text-left">Nomor</th>
                <th class="border border-gray-200 px-4 py-2 text-left">Pelanggan</th>
                <th class="border border-gray-200 px-4 py-2 text-left">Diinput Oleh</th>
                <th class="border border-gray-200 px-4 py-2 text-left">Pembayaran</th>
                <th class="border border-gray-200 px-4 py-2 text-right">Sub Total (Rp.)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="border border-gray-200 px-4 py-2">1</td>
                <td class="border border-gray-200 px-4 py-2">26 Desember 2024 12:07</td>
                <td class="border border-gray-200 px-4 py-2">Pagi</td>
                <td class="border border-gray-200 px-4 py-2">PSN-000030</td>
                <td class="border border-gray-200 px-4 py-2">Agung</td>
                <td class="border border-gray-200 px-4 py-2">Imam Riyanto</td>
                <td class="border border-gray-200 px-4 py-2 text-red-500">Belum Bayar</td>
                <td class="border border-gray-200 px-4 py-2 text-right">22,500.00</td>
              </tr>
              <tr>
                <td class="border border-gray-200 px-4 py-2">2</td>
                <td class="border border-gray-200 px-4 py-2">26 Desember 2024 12:07</td>
                <td class="border border-gray-200 px-4 py-2">Pagi</td>
                <td class="border border-gray-200 px-4 py-2">PSN-000029</td>
                <td class="border border-gray-200 px-4 py-2">Agung</td>
                <td class="border border-gray-200 px-4 py-2">Imam Riyanto</td>
                <td class="border border-gray-200 px-4 py-2 text-red-500">Belum Bayar</td>
                <td class="border border-gray-200 px-4 py-2 text-right">22,500.00</td>
              </tr>
              <tr>
                <td class="border border-gray-200 px-4 py-2">3</td>
                <td class="border border-gray-200 px-4 py-2">26 Desember 2024 11:14</td>
                <td class="border border-gray-200 px-4 py-2">Pagi</td>
                <td class="border border-gray-200 px-4 py-2">PSN-000028</td>
                <td class="border border-gray-200 px-4 py-2">Agung</td>
                <td class="border border-gray-200 px-4 py-2">Imam Riyanto</td>
                <td class="border border-gray-200 px-4 py-2 text-green-500">[Lunas] Tunai</td>
                <td class="border border-gray-200 px-4 py-2 text-right">12,500.00</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="mb-6">
        <h2 class="text-lg font-semibold text-gray-700 mb-2">Pengeluaran</h2>
        <div class="overflow-x-auto">
          <table class="w-full table-auto border-collapse border border-gray-200">
            <thead>
              <tr class="bg-gray-50">
                <th class="border border-gray-200 px-4 py-2 text-left">No</th>
                <th class="border border-gray-200 px-4 py-2 text-left">Tanggal</th>
                <th class="border border-gray-200 px-4 py-2 text-left">Jenis Pengeluaran</th>
                <th class="border border-gray-200 px-4 py-2 text-left">Keterangan</th>
                <th class="border border-gray-200 px-4 py-2 text-right">Sub Total (Rp.)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="border border-gray-200 px-4 py-2" colspan="5" class="text-center">Tidak ada data</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="text-right">
        <h3 class="text-xl font-semibold text-gray-700">Keuntungan Bersih: <span class="text-green-600">Rp. 57,500.00</span></h3>
      </div>
    </div>
</x-filament-panels::page>