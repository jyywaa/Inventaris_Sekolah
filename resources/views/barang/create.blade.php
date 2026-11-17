@extends('layouts.admin')

@section('title','Halaman Barang')
    
@push('styles')
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('content')


<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tambah Data Barang Inventaris</h1>
                    <p class="mb-4">silahkan isi formulir dibawah ini untuk menambahkan data barang</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-item center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">
                                Formulir Tambah Data Barang
                            </h6>
                                <a href="{{ route('barang.index') }}" class="btn btn-secondary btn-sa
                                shadow-sa">
                                    <i class="fas fa-arrow fa-sa text-white-50-mr-1"></i>
                                    Kembali

                                </a>
                        </div>
                        <div class="card-body">

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->any() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                           <!--Formulir Tambah Barang-->
                           <form action="{{  route("barang.store") }}" method="POST" enctype="multipart/form-data">
                             @csrf

                             <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kode_barang">Kode Barang<span class="text_danger">    
                                        </span></label>
                                            <input type="text" name="kode_barang" id="kode_barang"
                                            class="form-control @error('kode_barang') is-invalid @enderror"
                                            value="{{ old('kode_barang') }}" placeholder="Contoh: INV_001"
                                            required>
                                    </div>
                                     <div class="form-group">
                                        <ltanggal_masuk">Nama Barang<span class="text_danger">    
                                        </span></label>
                                            <input type="text" name="nama_barang" id="nama_barang"
                                            class="form-control @error('nama_barang') is-invalid @enderror"
                                            value="{{ old('nama_barang') }}" placeholder="Contoh: Laptop ASUS"
                                            required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="kategori">Kategori<span class="text_danger">    
                                        </span></label>
                                        <select name="kategori" id="kategori" class="form-control" required>
                                            <option value="">--Pilih Kategori--</option>
                                             <option value="Elektronik" {{ old('kategori')== 'Elektronik' ? 'selected': '' }}>
                                                Elektronik
                                            </option>
                                            <option value="Komputer & Jaringan" {{ old('kategori')== 'Komputer & Jaringan' ? 'selected': '' }}>
                                                Komputer & Jaringan
                                            </option>
                                             <option value="Furnitur" {{ old('kategori')== 'Furnitur' ? 'selected': '' }}>
                                                Furnitur
                                            </option>
                                            <option value+"ATK" {{ old('kategori')== 'ATK' ?'selected': '' }}>
                                                ATK
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="kondisi">Kondisi<span class="text_danger">    
                                        </span></label>
                                        <select name="kondisi" id="kondisi" class="form-control" required>
                                            <option value="">--Pilih kondisi--</option>
                                             <option value="Baik" {{ old('kondisi')== 'Baik' ? 'selected': '' }}>
                                                Baik
                                            </option>
                                            <option value="Rusak Ringan" {{ old('kondisi')== 'Rusak Ringan' ? 'selected': '' }}>
                                                Rusak Ringan
                                            </option>
                                             <option value="Rusak Berat" {{ old('kondisi')== 'Rusak Berat' ? 'selected': '' }}>
                                                Rusak Berat
                                            </option>
                                        </select>
                                    </div>
                                <div class="col-md-6">
                                    <div class="form-row">
                                    <div class="form-gruop col-md-7">
                                    <div class="form-group">
                                        <label for="jumlah">Jumlah<span class="text_danger">    
                                        </span></label>
                                            <input type="text" name="jumlah" id="jumlah"
                                            class="form-control @error('jumlah') is-invalid @enderror"
                                            value="{{ old('jumlah') }}" min="0" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="lokasi">Lokasi<span class="text_danger">    
                                        </span></label>
                                            <input type="text" name="lokasi" id="lokasi"
                                            class="form-control @error('lokasi') is-invalid @enderror"
                                            value="{{ old('lokasi') }}" placeholder="Contoh: Laptop ASUS"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_masuk">Tanggal masuk<span class="text_danger">    
                                        </span></label>
                                            <input type="text" name="tanggal_masuk" id="tanggal_masuk"
                                            class="form-control @error('tanggal_masuk') is-invalid @enderror"
                                            value="{{ old('tanggal_masuk', date('Y-m-d')) }}">
                                            
                                    </div>
                                    </div>
                           </div>
                           <hr>
                           <div class="d-flex justify-content-end">
                            <button type="admin" class="btn btn-primary">
                                <i class="fas fa-save ar-1"></i>
                                Simpan Data
                            </button>
                           </div>
                        </form>
          </div>
    </div>
 @endsection

<!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>