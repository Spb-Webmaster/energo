<select class="select">
<option value="0">Все</option>
@foreach($selectcategories as $category)
    @if(isset($slug))
        @php $active  = ($slug == $category->slug) ? 'active' : '' @endphp
    @else
        {{ $active = '' }}
    @endif
    <option  class="{{ $active }}" value="{{ $category->id }}">{{ $category->title }}</option>
@endforeach
</select>

