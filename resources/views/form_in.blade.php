@extends('layouts.app')
@section('content')
    <div class="container-sm mt-5">
            <form action="{{route('barangmasuk.store')}}" method="POST" >
                @csrf
                <div class="row justify-content-center">
                    <div class="p-5 rounded-3 border col-xl-6" style="background-color: #C79A56">
                        <div class="mb-3 text-center">
                            <i class="bi bi-bag-plus-fill" style="font-size: 6rem"></i>
                            <h4>TAMBAH STOK</h4>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nama_barang" class="form-label">Nama Barang</label>
                                <select type="text" name="barang_id" class="form-control @error('nama_barang') is-invalid @enderror" placeholder="masukan Nama Barang">
                                    <option value="">--pilih barang--</option>
                                    @foreach ($barang as $item)
                                        <option value="{{$item->id}}">
                                            {{$item->nama_barang}}
                                        </option>
                                    @endforeach
                                </select>
                                @error('nama_barang')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="tanggal_masuk" class="form-label @error('tanggal_masuk') is-invalid @enderror">Tanggal Masuk</label>
                                <input type="date" name="tanggal_masuk" class="form-control">
                                @error('tanggal_masuk')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="amount" class="form-label">Amount</label>
                                <input type="text" name="amount" class="form-control @error('amount') is-invalid @enderror" placeholder="masukan jumblah barang">
                                @error('amount')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 d-grid">
                                <a href="{{ route('barang.index') }}" class="btn btn-light btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                            </div>
                            <div class="col-md-6 d-grid">
                                <button type="submit" type="submit" class="btn btn-dark btn-lg mt-3" style="background-color:#8C5630"></i> Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
    </div>
@endsection
