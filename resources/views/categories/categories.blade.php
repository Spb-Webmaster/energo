@extends('layouts.app')
@section('content')

    <section class="top_block">
        <x-header/>
    </section>

    <x-search/>


    <section class="container bg-white">
        <div class="contaiter_content d-flex justify-content-between py-4">
            <div class="left_bar w-25 p-3">
                <x-left_bar/>
            </div>
            <div class="right_bar div_content w-75 p-3">
                <h1>Каталог ООО «ТК «ДизельМаш»</h1>
                @if($categories->isNotEmpty())
                    <div class="_categories">
                    @foreach($categories as $category)

                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="_h2  px-3">
                                    <h2 class="_h2">{{ $category->title }}</h2>
                                </div>
                                <p class="card-text">{{ $category->short_description }}</p>


                                <p class="_pgrey"><span>{{__('В раздел ') }} </span> <a href="{{ route('category', ($category->slug)?:$category->id) }}">{{ $category->title }}</a></p>
                            </div>
                        </div>
                    @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>

@endsection
