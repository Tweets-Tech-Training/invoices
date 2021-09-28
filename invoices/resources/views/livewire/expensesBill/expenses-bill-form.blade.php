<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <section class="users-edit">
        <div class="card">

            <div class="card-content">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li class="nav-item">

                            <span class="d-none d-sm-block">تعديل البيانات الشخصية </span>
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">


                            <!-- users edit account form start -->
                            <form  id="data_form_user" wire:submit.prevent="save" enctype="multipart/form-data">
                                <div class="row">

                                    <div class="col-12 col-sm-8">
{{--                                        <div class="row" style="margin-bottom: 15px;">--}}
{{--                                            <div class="col-md-12" style="background-color: #fff; padding:15px; border-radius:7px">--}}
{{--                                                <h5>Tags</h5>--}}
{{--                                                <hr>--}}
{{--                                                <select class="form-control select2 select-tags" name="tag[]" id="tags" multiple>--}}
{{--                                                    @if ($categories->count())--}}
{{--                                                        @foreach ($categories as $tag)--}}
{{--                                                            <option value="{{$tag->name}}">{{$tag->name}}</option>--}}
{{--                                                        @endforeach--}}
{{--                                                    @endif--}}
{{--                                                </select>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}

                                        <div class="form-group row " >

                                                <div class="col-md-2">الاصناف</div>
                                            <div class="form-group col-md-8" wire:ignore>
                                                @if(isset($categories))
                                                    <select  class="ddlStatus  form-control"  wire:model="bill.expenses_category_id" name="category_id" id="category_id">
                                                        <option value="">اختر الصنف  </option>
                                                        @foreach($categories as $category)
                                                            <option  value="{{ $category->id }}">{{$category->name}}</option>
                                                        @endforeach

                                                    </select>

                                                @endif

                                                @error('bill.expenses_category_id') <span class="text-danger">{{ $message }}</span>@enderror

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-2">
                                                <span>السعر</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text"  class="form-control"  name="price" wire:model="bill.price">
                                                @error('bill.price') <span class="text-danger">{{ $message }}</span> @enderror

                                            </div>
                                        </div>



                                    </div>
                                    <div class="col-12 col-sm-4">




                                    </div>


                                </div>

                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1" >
                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">حفظ
                                    </button>
                                    <button  onclick="location.href = '/dashboard';" class="btn btn-outline-danger">الغاء</button>
                                </div>
                            </form>
                            <!-- users edit account form ends -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@push('script')
    <script>


        $(document).ready(function() {
            $('#category_id').select2();
            $('#category_id').on('change', function (e) {
                var data = $('#category_id').select2("val");
            @this.set('bill.expenses_category_id', e.target.value);
            });
        });
        // $(function () {
        //     $(".select-tags").select2({
        //         placeholder: "Enter tags",
        //         tags: true,
        //         tokenSeparators: [',']
        //     });
        // });

    </script>
@endpush

