@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a class="btn btn-primary m-3" href="{{ route('produk.create')}}">Tambah data produk</a>
                <div class="card">
                    <div class="card-header">{{ __('produk') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Foto</th>
                                    <th>Harga</th>
                                    <th>Deskripsi</th>
                                    <th>Category</th>
                                    @if (Auth::user()->role=='admin')
                                    <th>Tampil Produk</th>
                                    @else
                                        
                                    @endif
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                        <td>
                                            {{ $i++ }}
                                        </td>
                                        <td>
                                            {{ $item->nama}}
                                        </td>
                                        <td>
                                            <img src="{{ Storage::url($item->foto) }}" alt="">
                                        </td>
                                        <td>
                                            {{ $item->harga}}
                                        </td>
                                        <td>
                                            {{ $item->deskripsi}}
                                        </td>
                                        <td>
                                            {{ $item->category->nama}}
                                        </td>
                                        @if (Auth::user()->role=='admin')
                                        <td>
                                            {{ $item->tampil}}
                                        </td>
                                        @else
                                            
                                        @endif
                                        <td>
                                            <a class="btn btn-success" href="{{ route('produk.edit',$item->id) }}">Edit</a>
                                            <form action="{{route('produk.destroy',$item->id )}}" method="post">
                                            @method("DELETE")
                                            @csrf
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection