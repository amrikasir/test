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
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
    <section class=" py-1 bg-blueGray-50" x-data="initialize">
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
                            type="submit" form="new.request">
                            Proses
                        </button>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <form method="post" action="{{ route('post.permintaan') }}" id="new.request">
                        @csrf
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
                                        placeholder="1307203941235123" name="nik" @keyup="checkNIK" maxlength="16" required>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Tanggal Permintaan
                                    </label>
                                    <input type="date" required name="req_at"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Nama Peminta
                                    </label>
                                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow
										focus:outline-none focus:ring w-full ease-linear transition-all duration-150
										disabled:bg-gray-100" placeholder="Lucky Dimas Chaniago" x-model="nama" disabled>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Departemen
                                    </label>
                                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow
										focus:outline-none focus:ring w-full ease-linear transition-all duration-150
										disabled:bg-gray-100" placeholder="Callender" x-model="depart" disabled>
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
                                    <!-- <div class="ui transparent left icon input">
                                        <input type="text" placeholder="Tambahkan Barang ... ">
                                        <i class="search icon"></i>
                                    </div> -->
                                    <div class="ui fluid multiple search selection dropdown">
                                        <input type="hidden" id="choiced" x-model="selected">
                                        <div class="default text">Pilih Barang ... </div>
                                        <i class="dropdown icon"></i>
                                        <div class="menu">
                                            
                                        </div>
                                    </div>

                                    <table class="ui striped table">
                                        <thead class="">
                                            <tr>
                                                <th class="">No.</th>
                                                <th class="">Barang</th>
                                                <th class="">Nama Barang</th>
                                                <th class="">Lokasi</th>
                                                <th class="">stok</th>
                                                <th class="">Qty</th>
                                                <th class="">Keterangan</th>
                                                <th class="">status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <template id="temporary" x-for="(item, index) in items" :key="index">
                                                <tr>
                                                    <td class="" x-text="index + 1">no.</td>
                                                    <td x-text="item.kode"> nama barang</td>
                                                    <td x-text="item.nama_barang">Nama Barang</td>
                                                    <input type="hidden" name="barang[]" x-model="item.id" required>
                                                    <td x-text="item.lokasi">lokasi</td>
                                                    <td class="center aligned" x-text="item.stok">0</td>
                                                    <td>
                                                        <div class="ui right labeled input">
                                                            <input type="number" value="0" min="0" x-model="item.qty"
                                                                placeholder="Enter Qty .." name="qty[]" required>
                                                            <div class="ui basic label" x-text="item.satuan">
                                                                satuan
                                                            </div>
                                                        </div>
                                                    <td>
                                                        <input type="text" value="-" name="ket[]">
                                                    </td>
                                                    <td class="center aligned">
                                                        <template x-if="item.stok == 0">
                                                            <span><i class="icon checkmark"></i> Kosong</span>
                                                        </template>

                                                        <template x-if="item.qty <= item.stok">
                                                            <span><i class="icon checkmark"></i> Terpenuhi</span>
                                                        </template>

                                                        <template x-if="item.qty > item.stok">
                                                            <span><i class="icon delete"></i> Sebagian</span>
                                                        </template>
                                                    </td>
                                                </tr>
                                            </template>
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
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('initialize', () => ({
            items: [],
            nama: '',
            depart: '',
            selected: '',
            checkNIK(e){
                var val = e.target.value;
                let alpn = this;
                if(val.length >= 16){
                    $.get('{{ route("fetch.peminta") }}?nik=' + val, (data) => {
                        alpn.nama = data.nama;
                        alpn.depart = data.depart;
                    })
                }
            },
            init() {
                let alpn = this;
                console.log(alpn, this)
                $('.ui.selection.dropdown')
                .dropdown({
                    clearable: true,
                    saveRemoteData: false,
                    apiSettings: {
                        cache: false,
                        url: '{{ route("api.barang") }}?search={query}',
                        beforeSend(setting){
                            let pengecualian = $('#choiced').val();
                            setting.data = {
                                except: pengecualian
                            }
                            return setting;
                        }
                    },
                    fields: {
                        remoteValues : 'results', // grouping for api results
                        values       : 'values', // grouping for all dropdown values
                        name         : 'kode',   // displayed dropdown text
                        value        : 'id'   // actual dropdown value
                    },
                    onAdd(value, text){
                        $.get('{{ route("fetch.barang") }}/'+value, (data) => {
                            alpn.items.push(data.results)
                        })
                    },
                    onRemove(value, text){
                        let index = alpn.items.findIndex(item => item.id == value)
                        if(index > -1){
                            alpn.items.splice(index, 1);
                        }
                    }
                })
            }
        }));
    });
</script>

</html>