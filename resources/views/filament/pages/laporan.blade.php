<x-filament-panels::page>
  <div class="bg-white shadow-lg rounded-lg p-8 w-full ">
    <h1 class="text-2xl font-semibold text-gray-700 text-center mb-6">Laporan Pendapatan</h1>
    <form action="/admin/laporan/kirim" method="post">
      @csrf
      <div class="mb-4">
        <label class="block text-gray-600 font-medium mb-2">Periode</label>
        <div class="flex gap-2">
          <input type="date" class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2" name="tanggal_awal">
          <span class="flex items-center text-gray-500">s/d</span>
          <input type="date" class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2" name="tanggal_akhir">
        </div>
      </div>
      <!-- Button -->
      <div>
        <button type="submit" class="w-full bg-red-500 hover:bg-red-600 text-white font-medium py-2 rounded-lg">
          Lihat Laporan
        </button>
      </div>
    </form>
  </div>

 
</x-filament-panels::page>