@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Konsul Jamu') }}</div>
                    <div class="card-body">

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-4">
                                    <form action="{{ route('jamu.store') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Keluahan <i>*bisa masukkan lebih dari 1 keluhan. dibatasi dgn ,</i></label>
                                            <input type="text" class="form-control" name="keluhan">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Tahun Lahir</label>
                                            <input type="number" class="form-control" name="umur">
                                        </div>
                                        <button class="btn btn-primary" type="submit">cek jamu</button>
                                    </form>
                                </div>
                                <div class="col-8">
                                    @isset($data)
                                    <div class="mb-3">
                                        <label class="form-label">Nama Jamu</label>
                                        <input type="text" class="form-control" value="{{ $data['jamu'] }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Khasiat</label>
                                        <input type="text" class="form-control" value="{{ $data['khasiat'] }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">umur</label>
                                        <input type="number" class="form-control" value="{{ $data['umur'] }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">saran</label>
                                        <input type="text" class="form-control" value="{{ $data['saran'] }}">
                                    </div>
                                    @endisset
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection