@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('post') }}</div>
                    <div class="card-body">
                        <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <input type="text" placeholder="nama produk" name="nama" class="m-3 form-control">
                            <input type="text" placeholder="nama produk" name="tampil" class="m-3 form-control" hidden value="tampil">
                            <input type="file" placeholder="foto" name="foto" class="m-3 form-control">
                            <input type="number" placeholder="harga" name="harga" class="m-3 form-control">
                            <select name="id_category" id="" class="form-control">
                                @foreach ($data as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                            <textarea name="deskripsi" cols="30" rows="10" class="form-control m-3">Isi</textarea>
                            <button class="btn-primary btn">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection