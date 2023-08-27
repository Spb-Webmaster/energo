<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite([
    'resources/scss/app.scss',
    'resources/js/app.js',
    ])

</head>
<body class="antialiased">

<section class="top_block">
    <div class="container_head">
        <div class="header d-flex justify-content-between align-items-center">

            <a class="logo d-flex justify-content-start align-items-center" href="/">
                <span class="logo_1"><img src="/images/logo.png" alt="logo"/></span>
                <span class="logo_2"><img src="/images/logo2.png" alt="logo"/></span>
            </a>

            <div class="phones_emails_company d-flex align-items-end flex-column justify-content-between text-white">
                <div class="top_email d-flex align-items-end align-items-center">9169913@gmail.com</div>
                <div class="top_phone d-flex align-items-end align-items-center">
                    <a class="pe-3 text-white text-decoration-none" href="tel:9219169523">(812) 916-95-23</a>
                    <a class="text-white text-decoration-none" href="tel:9219169586">(812) 916-95-86</a>
                </div>
            </div>

        </div>
    </div>

    <div class="container_head_b">
        <div class="bl_top__head bg-white"></div>

        <div class="_content bg-white px-3">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolore expedita laborum nisi officiis
                perferendis quaerat ullam voluptate. Accusantium debitis deleniti eaque explicabo labore odit pariatur
                perspiciatis quis! Ipsa, recusandae.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolore expedita laborum nisi officiis
                perferendis quaerat ullam voluptate. Accusantium debitis deleniti eaque explicabo labore odit pariatur
                perspiciatis quis! Ipsa, recusandae.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolore expedita laborum nisi officiis
                perferendis quaerat ullam voluptate. Accusantium debitis deleniti eaque explicabo labore odit pariatur
                perspiciatis quis! Ipsa, recusandae.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolore expedita laborum nisi officiis
                perferendis quaerat ullam voluptate. Accusantium debitis deleniti eaque explicabo labore odit pariatur
                perspiciatis quis! Ipsa, recusandae.
            </p>
            <p class="mb-0">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolore expedita laborum nisi officiis
                perferendis quaerat ullam voluptate. Accusantium debitis deleniti eaque explicabo labore odit pariatur
                perspiciatis quis! Ipsa, recusandae.
            </p>

        </div>

    </div>
</section>

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

<section class="container bg-white">
    <div class="contaiter_content d-flex justify-content-between py-4">
        <div class="left_bar w-25 p-3">
            <div class="list-group list-group-light list-group-f5f5f5" id="list-tab" role="tablist">
                <a class="item1 list-group-item list-group-item-action active p-3 " id="list-home-list"
                   data-mdb-toggle="list" href="#" role="tab" aria-controls="list-home">Запчасти для двигателя</a>
                <a class="item2 list-group-item list-group-item-action p-3" id="list-profile-list"
                   data-mdb-toggle="list" href="#" role="tab" aria-controls="list-profile list-group-item-light">Стартеры
                    и генераторы</a>
                <a class="item3 list-group-item list-group-item-action p-3" id="list-messages-list"
                   data-mdb-toggle="list" href="#" role="tab" aria-controls="list-messages">Ремонт</a>
                <a class="item4 list-group-item list-group-item-action p-3" id="list-settings-list"
                   data-mdb-toggle="list" href="#" role="tab" aria-controls="list-settings">Контакты</a>
            </div>
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

<section class="contaiter_footer">
    <div class="contaiter_top container text-white">
        <div class="_text_footer">CATERPILLAR® и CAT® Green Power, FG Wilson, Stamegna, Deutz, PERKINS, Kubota, Doosan, CUMMINS, Detroit Diesel - являются зарегистрированными торговыми марками. Все номера, названия, символы и описания изготовителя приводятся только в справочных целях, при этом не подразумевается, что какая-то часть является изделиями изготовителя.
        </div>
    </div>
<div class="contaiter_bottom container ">
    <div class="contaiter_bottom_flex d-flex justify-content-between items-center">
        <div class="spb-webmaster pt-3">
        <img class="listok" src="/images/listok.png" width="12" height="13"> Поддержка <a class="text-white" rel="nofollow" target="_blank" href="https://spb-webmaster.ru">Spb-Webmaster </a>
        </div>
        <div class="metrica d-flex justify-content-end items-center pt-3">
            <div class="counter_1 pe-2">
                <!-- Yandex.Metrika informer -->
                <a href="https://metrika.yandex.ru/stat/?id=93257638&amp;from=informer"
                   target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/93257638/3_0_20207BFF_00005BFF_1_pageviews"
                                                       style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="93257638" data-lang="ru" /></a>
                <!-- /Yandex.Metrika informer -->
                <!-- Yandex.Metrika counter -->
                <script type="text/javascript" >(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};m[i].l=1*new Date();for(var j=0;j<document.scripts.length;j++){if(document.scripts[j].src===r){return;}}
                        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
                    (window,document,"script","https://mc.yandex.ru/metrika/tag.js","ym");ym(93257638,"init",{clickmap:true,trackLinks:true,accurateTrackBounce:true,webvisor:true});</script>
                <noscript><div><img src="https://mc.yandex.ru/watch/93257638" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
                <!-- /Yandex.Metrika counter -->
            </div>
            <div class="counter_2 pe-2">
                <!-- Rating@Mail.ru counter -->
                <script type="text/javascript">var _tmr=_tmr||[];_tmr.push({id:"2497199",type:"pageView",start:(new Date()).getTime()});(function(d,w){var ts=d.createElement("script");ts.type="text/javascript";ts.async=true;ts.src=(d.location.protocol=="https:"?"https:":"http:")+"//top-fwz1.mail.ru/js/code.js";var f=function(){var s=d.getElementsByTagName("script")[0];s.parentNode.insertBefore(ts,s);};if(w.opera=="[object Opera]"){d.addEventListener("DOMContentLoaded",f,false);}else{f();}})(document,window);</script><noscript><div style="position:absolute;left:-10000px;">
                        <img src="//top-fwz1.mail.ru/counter?id=2497199;js=na" style="border:0;" height="1" width="1" alt="Рейтинг@Mail.ru" />
                    </div></noscript>
                <!-- //Rating@Mail.ru counter -->
                <!-- Rating@Mail.ru logo -->
                <a href="http://top.mail.ru/jump?from=2497199">
                    <img src="//top-fwz1.mail.ru/counter?id=2497199;t=479;l=1"
                         style="border:0;" height="31" width="88" alt="Рейтинг@Mail.ru" /></a>
                <!-- //Rating@Mail.ru logo -->
            </div>
            <div class="counter_3">
                <!--LiveInternet counter--><script type="text/javascript">document.write("<a href='http://www.liveinternet.ru/click' "+"target=_blank><img src='//counter.yadro.ru/hit?t14.6;r"+
                        escape(document.referrer)+((typeof(screen)=="undefined")?"":";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+";"+Math.random()+"' alt='' title='LiveInternet: показано число просмотров за 24"+" часа, посетителей за 24 часа и за сегодня' "+"border='0' width='88' height='31'><\/a>")</script><!--/LiveInternet-->
            </div>

        </div>
    </div>
</div>
</section>

</body>
</html>
