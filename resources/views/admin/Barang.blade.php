@extends('layout.mainAdmin')
@section('content')
<div class="flex ms-8 mt-5">


    <!-- Open the modal using ID.showModal() method -->
<button class="btn" onclick="my_modal_create.showModal()">+ Tambah Barang</button>

<dialog id="my_modal_create" class="modal modal-bottom sm:modal-middle">
  <div class="modal-box">
    <h3 class="font-bold text-lg">Hello!</h3>
    <p class="py-4">Press ESC key or click the button below to close</p>
    <form action="{{ route('order.create') }}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="text" placeholder="Name" class="input input-bordered w-full max-w-xs mb-5" name="name" />
    <input type="text" placeholder="Qty" class="input input-bordered w-full max-w-xs mb-5" name="qty"/>
    <input type="text" placeholder="Price" class="input input-bordered w-full max-w-xs mb-5" name="price"/>
    <input type="text" placeholder="deskripsi" class="input input-bordered w-full max-w-xs mb-5" name="description" />
    <input type="file" class="file-input file-input-bordered w-full max-w-xs mb-5" name="picture"/>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
  </div>
</dialog>
    <input class="h-12 ms-4 pl-10 pr-4 text-base placeholder-gray-500 border rounded-full focus:shadow-outline" type="search" placeholder="Cari Barang">
</div>
<div class="overflow-x-auto ms-8 mt-5 border rounded">
    <table class="table">
        <!-- head -->
        <thead>
            <tr>
                <th>Foto</th>
                <th>Name/Brand</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- row 1 -->
            <tr>
                @foreach($order as $ord)
                <td>
                    <div class="flex gap-3">
                        <div class="avatar">
                            <div class=" w-24 h-24">
                                <img src="{{ asset($ord->picture) }}" alt="Avatar Tailwind CSS Component" />
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <span>{{ $ord -> name }}</span>
                    <br />
                    <span class="badge badge-sm">Kopi</span>
                </td>
                <td class="font-bold">Rp500.000</td>
                <td class="text-success">Available</td>
                <th>
                    <!-- You can open the modal using ID.showModal() method -->
                    <button class="btn btn-error btn-xs rounded-sm text-white" onclick="my_modal_4.showModal()">Hapus</button>
                    <dialog id="my_modal_4" class="modal">
                        <div class="modal-box">
                            <h3 class="font-bold text-lg">
                                <center>Anda yakin ingin menghapus?</center>
                            </h3>
                            <div class="flex gap-4 justify-center my-5">
                                <form method="dialog">
                                    <button class="btn rounded-sm btn-info text-white btn-sm">Batal</button>
                                </form>
                                <button class="btn rounded-sm btn-error text-white btn-sm">Hapus</button>
                            </div>
                        </div>
                    </dialog>
                    <button class="btn btn-info rounded-none btn-xs text-gray-200" onclick="my_modal_5.showModal()">Edit</button>
    <dialog id="my_modal_5" class="modal">
        <div class="modal-box">
            <p class="mt-2 font-bold">Nama Barang</p>
            <input type="text" class="input mt-1 input-bordered w-full max-w-full" />
            <p class="mt-1 font-bold">Harga</p>
            <input type="text" class="input mt-1 input-bordered w-full max-w-full" />
            <p class="mt-1 font-bold">Deskripsi</p>
            <input type="text" class="input mt-1 input-bordered w-full max-w-full" />
            <p class="mt-1 font-bold">Foto Barang</p>
            <label for="file-upload" class="flex items-center justify-center w-full mt-1 mb-5 px-1  py-1 bg-white text-black rounded-lg border border-gray-300 cursor-pointer hover:bg-blue-500 hover:text-white">
                Upload Foto
            </label>
            <input id="file-upload" type="file" class="hidden" />

            <div class="flex justify-end">
                <form method="dialog">
                    <button class=" btn btn-sm btn-error text-white w-xs right-2 top-2">Batal</button>
                </form>
                <button class="ms-2 btn btn-sm btn-success text-white w-xs right-2 top-2">Edit</button>
            </div>
        </div>
    </dialog>
                </th>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>
@endsection