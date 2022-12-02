@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('User Role') }}</div>
                    <div class="card-body">
                        <form action="{{ route('user.update',$data->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <select name="role" id="" class="form-control m-3">
                                <option value="{{ $data->role }}"> {{ $data->role }} </option>
                                <option >==pilih Role user==</option>
                                <option value="admin">Admin</option>
                                <option value="editor">Editor</option>
                            </select>
                            <button class="btn-primary btn">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection