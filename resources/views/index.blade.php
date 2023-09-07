@extends('layouts.app')
@section('title' , config('app.name'))
@section('content')
    <section class="top_block">
    <x-header />
    <x-top_block />
    </section>

    <x-search />
    <section class="container bg-white">
        <div class="contaiter_content d-flex justify-content-between py-4">


            <div class="left_bar w-25 p-3">

                <x-left_bar/>

            </div>


            <div class="right_bar div_content w-75 p-3">

                <h1>ООО «ТК «ДизельМаш»</h1>
                <p><strong>Производственно-коммерческая</strong> компания «ДизельМаш»специализируется на ремонте дизельных
                    двигателей, электростанций, их обслуживанию и ремонту.</p>
                <div class="d-flex justify-content-between ">

                    <div class="_list__left pe-4">
                        <div class="_h2 px-3">
                            <h2>Поставка запчастей</h2>
                        </div>
                        <div class="_text_list">
                            <p>ООО «ТК «ДизельМаш» является поставщиком оригинальных и альтернативных запчастей для
                                двигателей:</p>
                            <ul class="content_list">
                                <li>PERKINS</li>
                                <li>CATERPILLAR</li>
                                <li>CUMMINS</li>
                                <li>DEUTZ</li>
                                <li>JOHN DEER</li>
                                <li>YANMAR</li>
                                <li>KUBOTA</li>
                                <li>DOOSAN</li>
                                <li>WAUKESHA</li>
                                <li>DETROIT DIEZEL</li>
                                <li>FG WILSON</li>
                            </ul>
                        </div>
                    </div>

                    <div class="_list__left">
                        <div class="_h2  px-3">
                            <h2>Ремонт и обслуживание</h2>
                        </div>
                        <div class="_text_list">
                            <p>Мы производим продажу, ремонт, обслуживание и поставку запасных частей для дизельных и
                                газовых электростанций:</p>
                            <ul class="content_list">

                                <li>FG WILSON</li>
                                <li>CATERPILLAR</li>
                                <li>JOHN DEERE</li>
                                <li>JCB</li>
                                <li>OLYMPIAN</li>
                                <li>DOOSAN</li>
                                <li>STAMEGNA</li>
                                <li>WARTSILA</li>
                                <li>WAUKESHA</li>
                                <li>PERKINS</li>
                            </ul>
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </section>

<section class="container contaiter_index_more_text bg-white">
    <div class="_h2 px-3">
        <h2>Сферы деятельности компании</h2>
    </div>
    <div class="_a_1">

        <div class="d-flex a_1">
            <div class="w-25 p-3">
                <img src="/images/index/01.png" alt="" loading="lazy" width="162" height="120"/>
            </div>
            <div class="w-75">
                <p>Обращаясь в нашу компанию, Вы получаете полную квалифицированную помощь <strong>в подборе запчастей
                        для двигателя, его ремонту и обслуживанию</strong>. Техническую поддержку на любом уровне. Наши
                    специалисты готовы прийти к вам на помощь. Мы производим диагностику и ремонт двигателей с выездом
                    бригады на объект.</p>
            </div>
        </div>

        <div class="d-flex a_2">
            <div class="w-25 p-3">
                <img src="/images/index/02.png" alt="" loading="lazy" width="162" height="120"/>
            </div>
            <div class="w-75">
                <p><strong>Наша компания готова взять на обслуживание Ваше оборудование, спецтехнику,
                        генераторы</strong>. Производить диагностику и своевременное ТО с выездом на объект. Мы
                    производим полный капитальный ремонт дизельных двигателей <span lang="en-US">PERKINS</span>, <span
                        lang="en-US">CATERPILLAR</span>, <span lang="en-US">CUMMINS</span>, <span
                        lang="en-US">DEUTZ</span>, <span lang="en-US">JOHN</span> <span lang="en-US">DEER</span>, <span
                        lang="en-US">YANMAR</span>, <span lang="en-US">KUBOTA</span>, <span lang="en-US">DOOSAN, WAUKESHA</span>&nbsp;и
                    прочих, любого литража и мощности.</p>
            </div>
        </div>

        <div class="d-flex a_3">
            <div class="w-25 p-3">
                <img src="/images/index/03.png" alt="" loading="lazy" width="162" height="120"/>
            </div>
            <div class="w-75">
                <p><strong>ООО «ТК «ДизельМаш» является представителем</strong> всемирно известного итальянского завода
                    <span lang="en-US">REDAT</span> крупнейшего производителя запасных частей и оборудования для ремонта
                    турбокомпрессоров и топливной аппаратуры. Официального поставщика завода <span lang="en-US"><strong>GARRETT</strong>,&nbsp;<b>Schwitzer</b></span>
                </p>
            </div>
        </div>

        <div class="d-flex a_4">
            <div class="w-25 p-3">
                <img src="/images/index/04.png" alt="" loading="lazy" width="162" height="90"/>
            </div>
            <div class="w-75">
                <p><strong>ООО «ТК «ДизельМаш» является представителем</strong> всемирно известного литовского завода
                    <span lang="en-US">JUBANA</span> крупнейшего производителя стартеров (в том числе редукционных) и
                    генераторов для всех видов спецтехники.</p>
            </div>
        </div>

        <div class="d-flex a_4">
            <div class="w-25 p-3">
                <img src="/images/index/05.png" alt="" loading="lazy" width="162" height="90"/>
            </div>
            <div class="w-75">
                <p><strong>ООО «ТК «ДизельМаш» является представителем</strong> всемирно известного американского завода
                    <span lang="en-US">MAXIFORCE</span>, крупнейшего производителя высококачественных запасных частей
                    для двигателей: <span lang="en-US">PERKINS</span>, <span lang="en-US">CATERPILLAR</span>, <span
                        lang="en-US">CUMMINS</span>, <span lang="en-US">JOHN</span> <span lang="en-US">DEER</span>,
                    <span lang="en-US">YANMAR</span>, официального поставщика американской армии.</p>
            </div>
        </div>


    </div>

</section>
@endsection
