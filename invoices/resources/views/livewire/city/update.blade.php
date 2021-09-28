<!-- Modal -->
<div wire:ignore.self class="modal fade" id="EditCityModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  wire:ignore.self>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل العملات </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="hidden" wire:model="city_id">
                        <label for="exampleFormControlInput1">الاسم</label>
                        <input type="text" class="form-control" wire:model="name" id="exampleFormControlInput1" >
                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button"  wire:click.prevent="cancel" class="btn btn-danger" >الغاء</button>
                <button type="button" wire:click.prevent="update" class="btn btn-success" >حفظ</button>
            </div>
        </div>
    </div>
</div>
