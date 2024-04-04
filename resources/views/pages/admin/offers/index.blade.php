@extends('layouts.admin')

@section('content')
    <div class="row mb-3">
        <div class="col">
            <a class="btn btn-primary" href="{{route('admin.offers.create')}}">
                {{__('Добавить оффер')}}
            </a>
        </div>
    </div>

    <div class="row">
        @foreach($offers as $offer)
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        {{$offer->title}}
                    </div>
                    <div class="card-body p-0">
                        <img class="w-100" style="height: 200px; object-fit: cover" src="{{$offer->image}}">
                    </div>
                    <div class="card-footer">
                        <p>
                            {{$offer->description}}
                        </p>
                        <a href="{{route('admin.offers.show', $offer->id)}}">
                            {{__('Подробнее')}}
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
