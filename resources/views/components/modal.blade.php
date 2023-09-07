<!-- Modal -->
<div class="modal fade" id="Modal{{$item->id}}" tabindex="-1" aria-labelledby="productModalLabel{{$item->id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel{{$item->id}}">{{ $item->title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <x-modal_form :item="$item"></x-modal_form>

            </div>

        </div>
    </div>
</div>
