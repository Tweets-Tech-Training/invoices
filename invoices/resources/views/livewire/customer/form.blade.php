<div>
    <style>

        .form-group.required .form-label:after {
            content:"*";
            color:red;
            font-size: 18px;
            /*font-family: 'Glyphicons Halflings';*/
            font-weight: normal;
        }
    </style>
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                        <h4 class="d-none d-sm-block">
                            @if($customer->id)
                            <span> تعديل الزبون </span>
                            @else
                                <span> اضافة الزبون </span>
                            @endif
                        </h4>
                        <br>
                        <form  id="sampleForm" >



                         <div class="row">
                             <div class="col-12 col-sm-8">
                             <div class="form-group  required row">
                                 <div class="col-md-2">
                                     <label  class="form-label">اسم الشركة </label>
                                 </div>
                                 <div class="col-md-8">
                                     <input type="text"  wire:model="customer.name" id="name" name="name" class="form-control" >
                                     @error('customer.name') <span class="text-danger">{{ $message }}</span>@enderror                                 </div>
                             </div>
{{--                            <div class=" form-group col-md-5 required">--}}
{{--                                <label  class="form-label">اسم الشركة </label>--}}
{{--                                <input type="text"  wire:model="customer.name" id="name" name="name" class="form-control" >--}}
{{--                                @error('customer.name') <span class="text-danger">{{ $message }}</span>@enderror--}}

{{--                            </div>--}}
{{--                       <div class=" form-group col-md-5 required">--}}
{{--                                <label for="inputAddress4" class="form-label">رقم الجوال</label>--}}
{{--                                <input type="number"  wire:model="customer.mobile" id="mobile" class="form-control" name="mobile" >--}}
{{--                                @error('customer.mobile') <span class="text-danger">{{ $message }}</span>@enderror--}}
{{--                            </div>--}}


                             <div class="form-group required row">
                                 <div class="col-md-2">
                                     <label for="inputAddress4" class="form-label">رقم الجوال</label>
                                 </div>
                                 <div class="col-md-8">
                                     <input type="number"  wire:model="customer.mobile" id="mobile" class="form-control" name="mobile" >                                     @error('user.phone') <span class="text-danger">{{ $message }}</span> @enderror
                                     @error('customer.mobile') <span class="text-danger">{{ $message }}</span>@enderror
                                 </div>
                             </div>
                             </div>
                            </div>



                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1" >
                                <div class="form-group">
                                    <br>
                                    <button type="button" wire:click.prevent="save" class="btn btn-success" >حفظ</button>
{{--                                    <a href='{{route("customer")}}' class="btn btn-outline-default round mr-1 mb-1" type="reset"><i class="glyphicon glyphicon-repeat"></i> إلغاء </a>--}}
                                    <a  href='{{route("customer")}}'  class="btn btn-outline-danger  ">الغاء</a>

                                </div>
                            </div>
                    </form>
            </div>
        </div>
    </div>
</div>
