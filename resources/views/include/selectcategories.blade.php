<select name="select_search" class="select">
<option value="0">Все</option>
@foreach($selectcategories as $category)
    @if(isset($slug))
        @php $active  = ($slug == $category->slug) ? 'active' : '' @endphp
    @else
        {{ $active = '' }}
    @endif
    <option
{{(session('search.select') == $category->id) ? 'selected' : null}}

        class="{{ $active }}" value="{{ $category->id }}">{{ $category->title }}</option>
@endforeach
</select>

