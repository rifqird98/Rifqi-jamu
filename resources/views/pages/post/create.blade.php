@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('post') }}</div>
                    <div class="card-body">
                        <form action="{{ route('post.store') }}" method="POST">
                            @method('POST')
                            @csrf
                            <input type="text" placeholder="judul" name="judul" class="m-3 form-control">
                            <input type="text" placeholder="judul" name="tampil" class="m-3 form-control" hidden value="tampil">
                            <input type="text" placeholder="judul" name="pembuat" class="m-3 form-control" readonly value="{{ Auth::user()->name }}">
                            <select name="id_category" id="" class="m-3 form-control">
                                @foreach ($data as $item)

                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                            <textarea name="isi" cols="30" rows="10" class="form-control m-3">Isi</textarea>
                            <button class="btn-primary btn">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection