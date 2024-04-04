@extends('layouts.user')

@section('content')
    <p>
        Offers
    </p>
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
                        <p style="overflow: hidden;
	text-overflow: ellipsis;
	display: -webkit-box;
	-webkit-line-clamp: 4;
	-webkit-box-orient: vertical;">
                            {{$offer->description}}
                        </p>
                        <a href="{{route('user.offers.show', $offer->id)}}">
                            {{__('Подробнее')}}
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
