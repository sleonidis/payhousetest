@extends('layouts.user')

@section('content')
    <a href="{{route('user.offers.index')}}">{{__('Назад')}}</a>
    <div class="card">
        <div class="card-header">
            {{$offer->title}}
        </div>
        <div class="card-body p-0">
            <img class="w-100" style="height: 500px; object-fit: cover" src="{{$offer->image}}">
        </div>
        <div class="card-footer">
            <p>
                {{$offer->description}}
            </p>
            <div class="row justify-content-end">
                <div class="col-12 d-flex justify-content-end">
                    @if(!$has_offer)
                        <a class="btn btn-primary" href="{{route('user.offers.get_link', $offer->id)}}">{{__('Получить ссылку')}}</a>
                    @else
                        <div class="card w-100">
                            <p class="my-auto mx-2">{{route('redirector',$personal_link)}}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
