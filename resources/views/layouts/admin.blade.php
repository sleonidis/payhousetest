@extends('layouts.wrapper')
@section('sidebar')
    @php
        $navs=[
                [
                'link'=>'#',
                'title'=>'Профиль',
                'active'=>false
                ],
                [
                'link'=>'#',
                'title'=>'Новости',
                'active'=>false
                ],
                [
                'link'=>route('admin.offers.index'),
                'title'=>'Офферы',
                'active'=>false
                ],
                [
                'link'=>route('admin.offers.stats'),
                'title'=>'Статистика',
                'active'=>false
                ],
                [
                'link'=>route('logout.get'),
                'title'=>'Выйти',
                'active'=>false
                ],
            ];
    @endphp
@endsection
