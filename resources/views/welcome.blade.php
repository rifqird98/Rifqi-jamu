@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                @foreach ($data as $item)
                @if ($item->tampil == 'tampil')
                    <div class="card">
                        <div class="card-header">{{ __('Post') }}</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p>{{ $item->judul }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <textarea readonly name="" id="" cols="30" rows="10" class="form-control">
                                        {{ $item->isi }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col m-3">
                                    <a href="{{ route('detail',$item->id) }}" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                        <p><i>post disembunyikan</i></p>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
