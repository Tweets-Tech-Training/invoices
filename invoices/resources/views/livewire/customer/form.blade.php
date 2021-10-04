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

                            <div class=" form-group col-md-5 required">

                                <label  class="form-label">اسم الشركة </label>
                                <input type="text"  wire:model="customer.name" id="name" name="name" class="form-control" >
                                @error('customer.name') <span class="text-danger">{{ $message }}</span>@enderror

                            </div>
                            <div class="form-group col-md-5 required">
                                <label for="inputEmail4" class="form-label">   اسم مفوض الشركة  </label>
                                <input type="text"   wire:model="customer.commissioner"  class="form-control" >
                                @error('customer.commissioner') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            </div>

                        <div class="row">
                            <div class="form-group col-md-5 required">
                                <label for="category" class="form-label">المحافظة</label>
                                @if(isset($cities))
                                    <select  class="ddlStatus  form-control"  wire:model="customer.city_id" name="city_id" id="city_id">
                                        <option value="">اختر المحافظة </option>
                                        @foreach($cities as $city)
                                            <option  value="{{ $city->id }}">{{$city->name}}</option>
                                        @endforeach

                                    </select>
                                @endif
                                @error('customer.city_id') <span class="text-danger">{{ $message }}</span>@enderror

                            </div>


                            <div class=" form-group col-md-5 required">
                                <label for="inputAddress4" class="form-label">العنوان بالتفصيل</label>
                                <input type="text"   wire:model="customer.address" name="address" id="address" class="form-control" >
                                @error('customer.address') <span class="text-danger">{{ $message }}</span>@enderror


                            </div>
                        </div>
                        <div class="row">
                            <div class=" form-group col-md-5 required">
                                <label for="inputAddress4" class="form-label">رقم الجوال</label>
                                <input type="number"  wire:model="customer.mobile" id="mobile" class="form-control" name="mobile" >
                                @error('customer.mobile') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>


                            <div class="col-sm-5">
{{--                                <div class="form-group required">--}}
{{--                                    <label for="gender" class="form-label">رقم الواتس اب--}}
{{--                                    </label>--}}
{{--                                    <input type="number"  wire:model="customer.whatsNum" id="mobile" class="form-control" name="whatsNum" >--}}
{{--                                    @error('customer.gender') <span class="text-danger">{{ $message }}</span>@enderror--}}


{{--                                </div>--}}
                            </div>
                        </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <br>
                                    <button type="button" wire:click.prevent="save" class="btn btn-success" >حفظ</button>
                                    <a href='{{route("customer")}}' class="btn btn-outline-default round mr-1 mb-1" type="reset"><i class="glyphicon glyphicon-repeat"></i> إلغاء </a>

                                </div>
                            </div>
                    </form>
            </div>
        </div>
    </div>
</div>
