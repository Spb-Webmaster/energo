<section class="_search_website">

    <form action="{{ route('search') }}" method="get">
        @csrf
        @honeypot

    <div class="search_website">
        <div class="_text_search_of_products">
            <div class="text_search_of_products"><span>{{  __('Поиск продукции') }}</span></div>
        </div>
        <div class="_hr">
            <div class="hr"></div>
        </div>
        <div class="d11"></div>

        <div class="_options d-flex justify-content-between align-items-center">

            <div class="w-25 select_search  pe-4 px-4">

                @include('include.selectcategories')

                <label class="form-label select-label">{{__('Выбрать  производителя')}}</label>

            </div>
            <div class="w-50 input_search  pe-4 px-4">
                <div class="form-outline">
                    <input type="text" id="text_search" name="text_search" value="{{ session('search.text') }}" class="form-control form-control-lg"/>
                    <label class="form-label" for="form12">{{ __('Номер, артикул, название') }}</label>
                </div>
            </div>
            <div class="w-auto button_search  pe-4 px-4">
                <button type="submit" class="btn btn-44 btn-danger">{{ __('Найти') }}</button>
            </div>

        </div>


    </div>
    <div class="d112"></div>
    </form>
</section>
