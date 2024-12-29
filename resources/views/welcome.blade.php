<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 py-6 px-4">
    <div class="max-w-5xl mx-auto bg-white shadow-md rounded-lg p-6">
        <div class="mb-6">
            <p class="text-gray-600"><strong>Periode:</strong> {{$tanggal_awal}} s/d {{$tanggal_akhir}}</p>
        </div>

        <div class="mb-6">
            <h2 class="text-lg font-semibold text-gray-700 mb-2">Penerimaan</h2>
            <div class="overflow-x-auto">
                <table class="w-full table-auto border-collapse border border-gray-200">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="border border-gray-200 px-4 py-2 text-left">No</th>
                            <th class="border border-gray-200 px-4 py-2 text-left">Tanggal</th>
                            <th class="border border-gray-200 px-4 py-2 text-left">Nomor</th>
                            <th class="border border-gray-200 px-4 py-2 text-left">Pelanggan</th>
                            <th class="border border-gray-200 px-4 py-2 text-left">Diinput Oleh</th>
                            <th class="border border-gray-200 px-4 py-2 text-left">Pembayaran</th>
                            <th class="border border-gray-200 px-4 py-2 text-right">Sub Total (Rp.)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $key => $item)
                        <tr>
                            <td class="border border-gray-200 px-4 py-2">{{$key + 1}}</td>
                            <td class="border border-gray-200 px-4 py-2">{{$item->updated_at}}</td>
                            <td class="border border-gray-200 px-4 py-2">{{$item->no_pesanan}}</td>
                            <td class="border border-gray-200 px-4 py-2">{{$item->pelanggan->nama}}</td>
                            <td class="border border-gray-200 px-4 py-2">{{$item->penginput}}</td>
                            <td class="border border-gray-200 px-4 py-2 text-red-500">{{$item->status}}</td>
                            <td class="border border-gray-200 px-4 py-2 text-right">{{$item->total}}</td>
                        </tr>
                        @endforeach
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
                            <th class="border border-gray-200 px-4 py-2 text-right">Sub Total (Rp.)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dataPengeluaran as $key => $pengeluaran)
                        <tr>
                            <td class="border border-gray-200 px-4 py-2">{{$key + 1}}</td>
                            <td class="border border-gray-200 px-4 py-2">{{$pengeluaran->updated_at}}</td>
                            <td class="border border-gray-200 px-4 py-2">{{$pengeluaran->pengeluaran->nama}}</td>
                            <td class="border border-gray-200 px-4 py-2">{{$pengeluaran->tarif}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="text-right">
            <h3 class="text-xl font-semibold text-gray-700">Keuntungan Bersih: <span class="text-green-600">{{$totalKeseluruhan}}</span></h3>
        </div>
    </div>
</body>

</html>