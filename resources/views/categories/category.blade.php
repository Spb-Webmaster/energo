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
                <h1 class="mb-3"><span class="color_blue">{{ $category->title }}</span>  <span class="fs-6">- Каталог ООО «ТК «ДизельМаш»</span></h1>
                @if($items->isNotEmpty())
                    <div class="_category">
                        @foreach($items as $item)

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="cat_h2">
                                        <h2 class="_h2 ">{{ $item->title }}</h2>
                                    </div>
                                    <div class="d-flex pt-2">
                                        <div class="w-50">
                                            <div class="_pgrey">Артикул: <span class="_pblack">{{ $item->sky }}</span>
                                            </div>
                                        </div>
                                        <div class="w-50 d-flex justify-content-end align-content-center">
                                            <div class="item_price px-3 d-flex justify-content-end">{{ $item->price }}</div>
                                            <div class="item_buy"><button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#Modal{{$item->id}}">Заказать</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <x-modal :item="$item"></x-modal>
                    @endforeach
            </div>
            @endif

            {{ $items->links('pagination::bootstrap-5') }}

        </div>
        </div>
    </section>


@endsection
