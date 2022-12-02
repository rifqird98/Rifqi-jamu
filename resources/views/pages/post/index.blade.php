@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a class="btn btn-primary m-3" href="{{ route('post.create')}}">Tambah Post Artikel</a>
                <div class="card">
                    <div class="card-header">{{ __('post') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Artikel</th>
                                    <th>Category</th>
                                    <th>Tanggal Update</th>
                                    <th>Isi</th>
                                    @if (Auth::user()->role=='admin')
                                    <th>Tampil Post</th>
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
                                            {{ $item->judul}}
                                        </td>
                                        <td>
                                            {{ $item->category->nama}}
                                        </td>
                                        <td>
                                            {{ $item->updated_at}}
                                        </td>
                                        <td>
                                            {{ $item->isi}}
                                        </td>
                                        @if (Auth::user()->role=='admin')
                                        <td>
                                            {{ $item->tampil}}
                                        </td>
                                        @else
                                            
                                        @endif
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                  Edit Post
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                  <li><a class="dropdown-item" href="{{ route('post.edit',$item->id) }}">edit</a></li>
                                                  <form action="{{route('post.destroy',$item->id )}}" method="post">
                                                    @method("DELETE")
                                                    @csrf
                                                        <button class="dropdown-item" type="submit">Delete</button>
                                                    </form>
                                                </ul>
                                              </div>
                                            
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