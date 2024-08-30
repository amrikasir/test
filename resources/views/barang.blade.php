<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laravel</title>

	<link rel="stylesheet"
		href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.5.0/dist/semantic.min.css">
	<script src="https://cdn.tailwindcss.com/3.4.1"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"
		integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.5.0/dist/semantic.min.js"></script>
</head>

<body>
	<section class=" py-1 bg-blueGray-50" x-data="initialize">
		<div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
			<div
				class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
				<div class="rounded-t bg-white mb-0 px-6 py-6">
					<div class="text-center flex justify-between">
						<h6 class="text-blueGray-700 text-xl font-bold">
							Daftar Barang & Stok
						</h6>

						<a href="{{ route('home') }}" class="bg-cyan-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
							Kembali
						</a>
					</div>
				</div>

				@if ($errors->any())
					<div class="ui error message">
						<i class="close icon"></i>
						<div class="header">
							Data Tidak Lolos validasi
						</div>
						<ul class="list">
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

				<div class="flex-auto px-4 lg:px-10 py-10 pt-0">
					<table class="ui celled striped table">
						<thead>
							<tr>
								<th colspan="3">
									Data Barang
								</th>
								<th>Stok</th>
							</tr>
						</thead>
						<tbody>
							@foreach($items as $item)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>
									{{ $item->kode }}
								</td>
								<td class="collapsing">{{ $item->lokasi }}</td>
								<td class="right aligned collapsing">{{ $item->stok }} - {{ $item->satuan }}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<footer class="relative  pt-8 pb-6 mt-2">
				<div class="container mx-auto px-4">
					<div class="flex flex-wrap items-center md:justify-between justify-center">
						<div class="w-full md:w-6/12 px-4 mx-auto text-center">
							<div class="text-sm text-blueGray-500 font-semibold py-1">
								Made with <a href="https://www.creative-tim.com/product/notus-js"
									class="text-blueGray-500 hover:text-gray-800" target="_blank">Notus JS</a> by <a
									href="https://www.creative-tim.com"
									class="text-blueGray-500 hover:text-blueGray-800" target="_blank"> Creative Tim</a>.
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</section>
</body>
<script>
	
</script>
</html>