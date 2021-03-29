<x-template-layout>
    <div class="border-b p-3">
        <font size="5" class="font-bold pl-2">{{ $title }}</font>
  </div>
    <main>
        <div class="col-span-6 p-4">
            <a href="{{route('dataguru.create')}}"><button class="px-4 py-1 text-sm rounded bg-white text-blue-600 font-semibold border border-blue-300 hover:text-white hover:bg-blue-600 hover:border-transparent focus:outline-none">Tambah</button>
           </a>
            <a href="#"><button class="px-4 py-1 text-sm rounded bg-white text-blue-600 font-semibold border border-blue-300 hover:text-white hover:bg-blue-600 hover:border-transparent focus:outline-none">Konfirmasi</button>
            </a>
            <a href="#" target="_blank"><button class="px-4 py-1 text-sm rounded bg-red-600 text-white font-semibold border hover:text-red-600 hover:bg-white hover:border-red-300 focus:outline-none">Print to PDF</button>
            </a>
        </div>
    <div class="rounded sm:px-1 sm:px-1 sm:bg-gray-100">
        <table class="min-w-full divide-y">
        <thread class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pilih</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIP</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Profesi</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Option</th>
            </tr>
        </thread>
        <tbody class="divide-y divide-gray-200">
            <?php $no=1; ?>
            @foreach ($datguru as $guru)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap"><input type="checkbox" name="" id=""></td>
                    <td class="px-6 py-4 whitespace-nowrap">{{$guru->nip}}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{$guru->nama}}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        {{$guru->status}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">{{$guru->profesi}}</td>
                    <td class="px-6 py-4 whitespace-nowrap" >
                        <a href="{{ route('dataguru.edit',$guru->id) }}"><button class="px-4 py-1 text-sm rounded text-green-600 font-semibold border border-green-200 hover:text-white hover:bg-green-600 hover:border-transparent focus:outline-none"><i class="fas fa-edit pr-0 md:pr-3">&nbsp Edit</i></button></a>
                        
                    <form action="{{ route('dataguru.destroy',$guru->id) }}" method="POST" class="pt-2">
                        @csrf
                        @method('DELETE')
                        <button class="px-4 py-1 text-sm rounded text-red-600 font-semibold border border-red-200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none"><i class="fas fa-trash pr-0 md:pr-3">&nbsp Hapus</i></button>
                    </form>
                    </td>
                </tr>
                <?php $no++;?>
            @endforeach
        </tbody>
        </table>
     </div> 
    </main>
</x-template-layout>