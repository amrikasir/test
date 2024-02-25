<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    {{-- <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css"> --}}
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <script src="https://cdn.tailwindcss.com/3.4.1"></script>
	<script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
    <section class=" py-1 bg-blueGray-50">
        <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Permintaan Barang
                        </h6>
                        <button
                            class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                            type="button">
                            Proses
                        </button>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <form>
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            User Information
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        NIK Peminta
                                    </label>
                                    <input type="text"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="1307203941235123" value="">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Tanggal Permintaan
                                    </label>
                                    <input type="date"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Nama Peminta
                                    </label>
                                    <input type="text"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow
										focus:outline-none focus:ring w-full ease-linear transition-all duration-150
										disabled:bg-gray-100"
                                        placeholder="Lucky Dimas Chaniago" disabled>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Departemen
                                    </label>
                                    <input type="text"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow
										focus:outline-none focus:ring w-full ease-linear transition-all duration-150
										disabled:bg-gray-100"
                                        placeholder="Callender" disabled>
                                </div>
                            </div>
                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300">

                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            List Barang
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full px-4">	
                                <div class="relative w-full mb-3">
                                    <table class="text-slate-900 dark:text-slate-200 border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm">
										<thead class="bg-slate-50 dark:bg-slate-700">
											<tr>
												<th class="p-4 text-left">No.</th>
												<th class="p-4 text-left">Barang</th>
												<th class="p-4 text-left">Lokasi</th>
												<th class="p-4 text-left">stok</th>
												<th class="p-4 text-left">Qty</th>
												<th class="p-4 text-left">Satuan</th>
												<th class="p-4 text-left">Keterangan</th>
												<th class="p-4 text-left">status</th>
												<th class="p-4 text-left">Act</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="p-4">1</td>
												<td>
													NPH / Cokelat Gray Ult
													<input type="hidden" value="NPH">
												</td>
												<td>GD-02-PDG</td>
												<td class="text-center">78</td>
												<td>
													<input type="number" value="0" name="qty[]">
												</td>
												<td class="text-center">BOX</td>
												<td>
													<input type="text" value="-" name="ket[]">
												</td>
												<td class="text-center">Acc</td>
												<td>
													<button> X </button>
												</td>
											</tr>
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                    </form>
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

</html>
