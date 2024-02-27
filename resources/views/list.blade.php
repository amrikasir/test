<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    {{-- <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css"> --}}
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.5.0/dist/semantic.min.css">
    <script src="https://cdn.tailwindcss.com/3.4.1"></script>
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.5.0/dist/semantic.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
    <section class="py-1 bg-blueGray-50">
        <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Daftar Permintaan Barang
                        </h6>
                        <a href="{{ route('new.request') }}" class="ui mini green labeled icon button">
                            <i class="plus square icon"></i>
                            New
                        </a>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    @if($items->count() < 1)
                    <h2 class="ui icon center aligned header">
                        <i class="handshake icon"></i>
                        <div class="content">
                          Permintaan Barang
                          <div class="sub header">
                            Tidak ada permintaan barang saat ini, buat permintaan baru dengan tombol  new sudut kanan atas
                          </div>
                        </div>
                      </h2> 
                    @else
                    <div class="ui very relaxed list">
                        @foreach ($items as $item)
                            <div class="item">
                                <img class="ui avatar image" src="https://api.multiavatar.com/newbie.svg?apikey=T6jRrvG2sNz4tn">
                                <div class="content">
                                    <a class="header">{{ $item->person->nama }}</a>
                                    <div class="description">
                                        Permintaan barang di buat pada tanggal <a><b>{{ $item->created_at }}</b></a> sebanyak {{ $item->detail->count() }} barang.
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @endempty
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
