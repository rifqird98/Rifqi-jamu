@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Post') }}</div>
                    <div class="card-body">
                        <form action="{{ route('produk.update',$data->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <input type="text" placeholder="nama produk" name="nama" class="m-3 form-control" value="{{ $data->nama }}">
                            <input type="file" placeholder="foto" name="foto" class="m-3 form-control" value="{{ $data->foto }}">
                            <input type="number" placeholder="harga" name="harga" class="m-3 form-control" value="{{ $data->harga }}">
                            @if (Auth::user()->role=='admin')
                            <select name="tampil" id="" class="m-3 form-control">

                                <option value="{{ $data->tampil }}">{{ $data->tampil }}</option>
                                <option >=pilih kondisi=</option>
                                <option value="tampil">Tampil</option>
                                <option value="tidak tampil">Tidak Tampil</option>
                                
                            </select>    
                            @else
                                
                            @endif
                            <select name="id_category" id="" class="form-control">
                                <option value="{{ $data->category->id }}">{{ $data->category->nama }}</option>
                                <option value="">===Pilih Category Produk===</option>
                                @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                            <textarea name="deskripsi"  cols="30" rows="10" class="form-control m-3">{{ $data->deskripsi }}</textarea>
                            <button class="btn-primary btn">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
