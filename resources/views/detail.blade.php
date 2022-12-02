@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card m-3">
                    <div class="card-header">{{ __('Post') }}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p><b>Judul :</b>{{ $data->judul }}</p>
                            </div>
                            <div class="col">
                                <p><b>Penulis :</b>{{ $data->pembuat }}</p>
                            </div>
                            <div class="col">
                                <p><b>Tanggal Update :</b>{{ $data->created_at }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <textarea readonly name="" id="" cols="30" rows="10" class="form-control">
                                        {{ $data->isi }}
                                    </textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <h5>Rekomendasi Produk</h5>
                <div class="card m-3">
                    <div class="card-body">
                        <div class="row">
                            @foreach ($produk as $item)
                                @if ($item->id_category == $data->id_category)
                                    <div class="col">
                                        <div class="card mr-3">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <p><b>nama Produk :</b>{{ $item->nama }}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <img src="{{ Storage::url($item->foto) }}"class="img-thumbnail"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                @endif
                            @endforeach
                    </div>
                </div>
            </div>



        </div>
    </div>
    </div>
@endsection
