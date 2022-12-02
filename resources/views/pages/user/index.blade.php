@extends('layouts.app')

@section('content')
    <div class="container vh-100">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('user') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama user</th>
                                    <th>role</th>
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
                                            {{ $item->name}}
                                        </td>
                                        <td>
                                            {{ $item->role}}
                                        </td>
                                        <td>
                                            <a class="btn btn-success" href="{{ route('user.edit',$item->id) }}">Edit</a>
                                            <form action="{{route('user.destroy',$item->id )}}" method="post">
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