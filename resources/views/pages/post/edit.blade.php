@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Post') }}</div>
                    <div class="card-body">
                        <form action="{{ route('post.update',$data->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <input type="text" placeholder="judul" name="judul" class="m-3 form-control" value="{{ $data->judul }}">
                            <input type="text" placeholder="judul" name="pembuat" class="m-3 form-control" readonly value="{{ Auth::user()->name }}">
                            <select name="id_category" id="" class="m-3 form-control">

                                <option value="{{ $data->category->id }}">{{ $data->category->nama }}</option>
                                <option >=pilih category=</option>
                                @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                            @if (Auth::user()->role=='admin')
                            <select name="tampil" id="" class="m-3 form-control">

                                <option value="{{ $data->tampil }}">{{ $data->tampil }}</option>
                                <option >=pilih kondisi=</option>
                                <option value="tampil">Tampil</option>
                                <option value="tidak tampil">Tidak Tampil</option>
                                
                            </select>
                            @else
                                
                            @endif
                            <textarea name="isi"  cols="30" rows="10" class="form-control m-3">{{ $data->isi }}</textarea>
                            <button class="btn-primary btn">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection