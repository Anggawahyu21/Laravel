<x-template-layout>
    <div class="border-b p-3">
        <font size="5" class="font-bold pl-2">{{ $title }}</font>
  </div>
      <main>
        <form action="{{(isset($datguru))?route('dataguru.update',$datguru->id):route('dataguru.store') }}" method="POST" enctype="multipart/form-data">
            
            @csrf
            @if (isset($datguru))
                @method('PUT')
            @endif

            <div class="shadow sm:rounded-md sm:overflow-hidden">
              <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <div class="grid grid-cols-3 gap-6">
                  <div class="col-span-3 sm:col-span-2">
                    <label for="nip" class="block text-sm font-medium text-gray-700">
                     NIP
                    </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                      <input type="text" name="nip" value="{{ (isset($datguru))?$datguru->nip:old('nip') }}" class="focus:ring-indigo-500 border border-gray-300 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm" placeholder="Masukan NIP">
                    </div><br>

                    <label for="nama" class="block text-sm font-medium text-gray-700">
                        Nama Guru
                       </label>
                       <div class="mt-1 flex rounded-md shadow-sm">
                         <input type="text" name="nama" value="{{ (isset($datguru))?$datguru->nama:old('nama') }}" class="focus:ring-indigo-500 border border-gray-300 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm" placeholder="Masukan Nama Lengkap">
                       </div><br>

                       <div class="col-span-2 sm:col-span-2">
                        <label for="status" class="block text-sm font-medium text-gray-700">Status Guru</label>
                        <select name="status" value="{{ (isset($datguru))?$datguru->status:old('status') }}" class="mt-1 block w-full py-1 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                          <option>Active</option>
                          <option>Deactive</option>
                        </select>
                      </div><br>

                      <label for="profesi" class="block text-sm font-medium text-gray-700">
                        Profesi
                       </label>
                       <div class="mt-1 flex rounded-md shadow-sm">
                         <input type="text" name="profesi" value="{{ (isset($datguru))?$datguru->profesi:old('profesi') }}" class="focus:ring-indigo-500 border border-gray-300 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm" placeholder="Masukan Profesi">
                       </div><br>


                  </div>
                </div>

              <div class="px-4 py-3 text-right sm:px-6">
                <button type="submit" class="px-4 py-1 text-sm rounded text-green-600 font-semibold border border-green-200 hover:text-white hover:bg-green-600 hover:border-transparent focus:outline-none">
                  Simpan
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

          </form>
      </main>
</x-template-layout>