<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@yield('keywords')" />

    @vite([
    'resources/scss/app.scss',
    'resources/js/app.js',
    ])

</head>
<body class="antialiased">
@if(session('flash.message'))
<div class="system_message">
    <div class="alert alert-{{ session('flash.type') }} system_message alert-dismissible fade show" role="alert">
         {{ session('flash.message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif
@yield('content')

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

