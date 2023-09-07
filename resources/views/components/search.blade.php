<section class="_search_website">
    <div class="search_website">
        <div class="_text_search_of_products">
            <div class="text_search_of_products"><span>Поиск продукции</span></div>
        </div>
        <div class="_hr">
            <div class="hr"></div>
        </div>
        <div class="d11"></div>

        <div class="_options d-flex justify-content-between align-items-center">

            <div class="w-25 select_search  pe-4 px-4">


                @include('include.selectcategories')
                {{--

                               <select class="select">
                                    <option value="1">Все</option>
                                    <optgroup label="Label 1">
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </optgroup>
                                    <optgroup label="Label 2">
                                        <option value="4">Four</option>
                                        <option value="5">Five</option>
                                        <option value="6">Six</option>
                                    </optgroup>
                                </select>
                --}}



                <label class="form-label select-label">Example label</label>

            </div>
            <div class="w-50 input_search  pe-4 px-4">
                <div class="form-outline">
                    <input type="text" id="form12" class="form-control form-control-lg"/>
                    <label class="form-label" for="form12">Номер, артикул, название </label>
                </div>
            </div>
            <div class="w-auto button_search  pe-4 px-4">
                <button type="button" class="btn btn-44 btn-danger">Найти</button>
            </div>

        </div>


    </div>
    <div class="d112"></div>
</section>
