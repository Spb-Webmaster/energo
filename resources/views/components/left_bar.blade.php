<div class="list-group list-group-light list-group-f5f5f5" id="list-tab" role="tablist">
    <a class="item1 list-group-item list-group-item-action
     {{ active_link('index') }}
     {{ active_link('catalog*') }}
     {{ active_link('list.perkins') }}
     {{ active_link('perkins*') }}
     {{ active_link('list.cummins') }}
     {{ active_link('cummins*') }}
     {{ active_link('search') }}
     p-3 " id="list-home-list"
       data-mdb-toggle="list"  href="{{ route('catalog') }}" role="tab" aria-controls="list-home">Запчасти для двигателя</a>
    <a class="item2 list-group-item list-group-item-action p-3" id="list-profile-list"
       data-mdb-toggle="list" href="#" role="tab" aria-controls="list-profile list-group-item-light">Стартеры
        и генераторы</a>
    <a class="item3 list-group-item list-group-item-action p-3" id="list-messages-list"
       data-mdb-toggle="list" href="#" role="tab" aria-controls="list-messages">Ремонт</a>
    <a class="item4 list-group-item list-group-item-action p-3" id="list-settings-list"
       data-mdb-toggle="list" href="#" role="tab" aria-controls="list-settings">Контакты</a>
</div>
