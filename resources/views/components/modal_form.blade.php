<form method="post" action="{{ route('order') }}" enctype="multipart/form-data">
    @csrf
    <div class="rounded">
        <div class="form-outline pt-2 mt-3">
            <input type="text" name="name" id="name{{ $item->id }}" class="form-control" />
            <label class="form-label" for="form_name{{ $item->id }}">Ваше имя</label>
        </div>
        <div class="form-outline pt-2 mt-3">
            <input type="email"  name="email"  id="email{{ $item->id }}" class="form-control" />
            <label class="form-label" for="email{{ $item->id }}">Ваш email</label>
        </div>
        <div class="form-outline pt-2 mt-3">
            <input type="text"  name="phone"  id="phone{{ $item->id }}" class="form-control" />
            <label class="form-label" for="phone{{ $item->id }}">Ваш телефон</label>
        </div>
        <div class="mt-4">
            <input type="hidden" name="product_id" value="{{  $item->id }}">
            <input type="hidden" name="product_title" value="{{  $item->title }}">
        </div>
        <div class="mb-2">
        <button   class="btn btn-danger" type="submit">{{ __('Предварительный заказ') }}</button>
        </div>

    </div>
</form>
