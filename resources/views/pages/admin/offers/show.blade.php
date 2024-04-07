@extends('layouts.admin')

@section('content')
    <a href="{{route('admin.offers.index')}}">{{__('Назад')}}</a>
    <div class="card">
        <div class="card-header">
            <div class="row justify-content-between">
                <h4 class="col-7">
                    {{$offer->title}}
                </h4>
                <a href="{{route('admin.offers.edit', $offer->id)}}" class="col-3">{{__('редактировать')}}</a>
                <form method="post" action="{{route('admin.offers.delete', $offer->id)}}" class="col-2">
                    @csrf
                    @method('delete')
                    <button class="btn btn-warning">{{__('удалить')}}</button>
                </form>
            </div>
        </div>
        <div class="card-body p-0">
            <img class="w-100" style="height: 500px; object-fit: cover" src="{{$offer->image}}">
        </div>
        <div class="card-footer">
            <p>
                {{$offer->description}}
            </p>
            <div class="row justify-content-end">
                <div class="col-6">
                    <div class="card">
                        <p class="my-auto mx-2">{{$offer->link}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
