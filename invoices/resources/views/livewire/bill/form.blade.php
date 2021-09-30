<div>

    <style>

        hr {
            width: 100%;
            border-top: 1px solid rgba(45, 41, 47, 0.3);
        }
        .form-group.required .form-label:after {
            content:"*";
            color:red;
            font-size: 18px;
            /*font-family: 'Glyphicons Halflings';*/
            font-weight: normal;
        }
        .buttonArray{
            margin-top: 21px;
            height: 37px;
        }
    </style>

<div class="container">

        <div class="row">



                <div class="card ">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="col-md-12">
                                @if($bill->id)
                                    <h5> تعديل الفواتير  </h5>
                                @else
                                <h5> اضافة فاتورة  </h5>
                                @endif
                            </div>
                            <br>
                            <div class="row">
                            <div class="col-12 col-md-9">
                            <div class="row">

                                <div class=" form-group col-md-8 required " >
                                    <div wire:ignore >
                                        <label  class="form-label">الاسم </label>
                                        @if(isset($customers))
                                            <select  class="ddlStatus  form-control"  wire:model="bill.customer_id" name="customer_id" id="customer_id">
                                                <option value="">اختر اسم الزبون </option>
                                                @foreach($customers as $customer)
                                                    <option  value="{{ $customer->id }}">{{$customer->name}}</option>
                                                @endforeach

                                            </select>
                                        @endif</div>

                                    @error('bill.customer_id') <span class="text-danger">{{ $message }}</span>@enderror

                                </div>
                                <div class="form-group col-md-4">
                                    <br>

                                    <a type="button" class="btn btn-outline-primary waves-effect waves-light"  href="{{route('customer.create')}}" >اضافة زبون جديد <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus align-middle"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a>

                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4 required " >
                                    <div wire:ignore>
                                        <label class="form-label">المحافظة</label>
                                        @if(isset($citites))
                                            <select  class="form-control select-cities"  wire:model="bill.city_id" name="city_id" id="select2">
                                                <option value="">اختر المحافظة </option>
                                                @foreach($citites as $city)
                                                    <option  value="{{ $city->id }}">{{$city->name}}</option>
                                                @endforeach

                                            </select>
                                        @endif</div>

                                    @error('bill.city_id') <span class="text-danger">{{ $message }}</span>@enderror


                                </div>
                                <div class="form-group col-md-4 required " >
                                    <div wire:ignore>
                                        <label class="form-label">العملات</label>
                                        @if(isset($coins))
                                            <select  class=" form-control"  wire:model="bill.coin_id" name="coin_id" id="coin_id" >
                                                <option value="">اختر العملة </option>
                                                @foreach($coins as $coin)
                                                    <option  value="{{ $coin->id }}">{{$coin->name}}</option>
                                                @endforeach

                                            </select>

                                        @endif</div>

                                    @error('bill.coin_id') <span class="text-danger">{{ $message }}</span>@enderror

                                </div>

                                <div class="form-group col-md-4 required">
                                    <label class="form-label">حالة الزبون ( مسلم  ام غير مسلم )</label>
                                    <select class="form-select form-control"   wire:model="bill.customerstatus" aria-label="Default select example" name="customerstatus"
                                            id="customerstatus">
                                        <option value="">حالة الزبون </option>

                                        <option {{old('customerstatus')=='recived'? 'selected': ''}} value="recived">مسلم</option>
                                        <option {{old('customerstatus')=='unrecived'? 'selected': ''}} value="unrecived"> غير مسلم </option>


                                    </select>
                                    @error('bill.customerstatus') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>


{{--                            <div class="row">--}}

                            </div>
                            <div class="row">
                                <div class="col-md-4 ">
                                    <div class="form-group required">
                                        <label class="form-label">   الحالة
                                        </label>
                                        <select class="form-select form-control"   wire:model="bill.status" aria-label="Default select example" name="status"
                                                id="status">
                                            <option value="">حالة الفاتورة (مسددة ام لا )</option>

                                            <option {{old('status')=='recived'? 'selected': ''}} value="recived">مسددة</option>
                                            <option {{old('status')=='unrecived'? 'selected': ''}} value="unrecived"> غير مسددة </option>


                                        </select>
                                        @error('bill.status') <span class="text-danger">{{ $message }}</span>@enderror

                                    </div>
                                </div>

                                @if($bill->status =="recived")
                                <div class="col-md-4">
                                    <div class="form-group">

                                        <label for="gender">طريقة الدفع
                                        </label>
                                        <select class="form-select form-control"    wire:model="bill.payment" aria-label="Default select example" name="payment"
                                                id="payment">
                                            <option value="">اختر طريقة الدفع</option>

                                            <option {{old('payment')=='money_transfer'? 'selected': ''}} value="money_transfer">حوالة</option>
                                            <option {{old('payment')=='check'? 'selected': ''}} value="check">شيك   </option>
                                            <option {{old('payment')=='cash'? 'selected': ''}} value="cash">نقدا   </option>


                                        </select>
                                        @error('bill.payment') <span class="text-danger">{{ $message }}</span>@enderror

                                    </div>

                                </div>
                                @endif
                                <div class="col-md-4">
                                    <div class="form-group required">
                                        <label class="form-label">مرتبطة بقيد مالي
                                        </label>
                                        <select class="form-select form-control"    wire:model="bill.related" aria-label="Default select example" name="related"
                                                id="related">
                                            <option value="">مرتبطة بقيد مالي ام لا </option>

                                            <option {{old('related')=='1'? 'selected': ''}} value="1">مرتبطة بقيد مالي</option>
                                            <option {{old('related')=='0'? 'selected': ''}} value="0">غير مرتبطة بقيد مالي    </option>
                                        </select>
                                        @error('bill.related') <span class="text-danger">{{ $message }}</span>@enderror

                                    </div>

                                </div>
                            </div>

                                <div class="row">
                                    <div class="col-md-4">


                                        @if($bill->payment =="check" || $bill->payment =="money_transfer")

                                                <div class="form-group" >
                                                    <label for="name">التاريخ  :</label>
                                                    <input type="date" wire:model="bill.date" class="form-control" name="date" id="date">
                                                    @error('bill.date') <span class="text-danger">{{ $message }}</span>@enderror
                                                </div>
                                        @endif
                                    </div>



                                </div>

{{--                                div for category --}}
                                <?php

                                $total=0;
                                ?>
                                @foreach($priceArray as $index => $object)
                                    <?php

                                    $priceArray[$index]['unitprice']=(float) $priceArray[$index]['amount'] * (float) $priceArray[$index]['categoryprice'];
                                        $total += $priceArray[$index]['unitprice'];

                                    ?>
                                <div class="row" >
                                        <hr>
                                    <div class="form-group col-md-4">
                                        <label for="category">الاصناف</label>
                                        <div wire:ignore>
                                            @if(isset($categories))
                                                <select  class="ddlStatus  form-control"  wire:model="priceArray.{{$index}}.category_id" name="category_id" id="category_id">
                                                    <option value="">اختر الصنف  </option>
                                                    @foreach($categories as $category)
                                                        <option  value="{{ $category->id }}">{{$category->name}}</option>
                                                    @endforeach

                                                </select>

                                            @endif
                                        </div>


                                        @error("priceArray.$index.category_id") <span class="text-danger">{{ $message }}</span>@enderror


                                    </div>


                                    <div class="form-group col-md-2">
                                        <label> الكمية  </label>
                                        <input type="text"   wire:model="priceArray.{{$index}}.amount"  name="amount" class="form-control" >
                                        @error("priceArray.$index.amount") <span class="text-danger">{{ $message }}</span>@enderror
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label> السعر للوحدة   </label>
                                        <input type="text"   wire:model="priceArray.{{$index}}.categoryprice" name="categoryprice"  class="form-control" >
                                        @error("priceArray.$index.categoryprice") <span class="text-danger">{{ $message }}</span>@enderror
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label>اجمالي السعر    </label>
                                        <input type="text" disabled   value="{{$priceArray[$index]['unitprice']}}" name="unitprice" class="form-control" >
                                    </div>
                                    @if($index==0)
                                    <div class="form-group col-md-2 buttonArray">
                                        <button  wire:click="addRow" class="btn btn-icon btn-icon  btn-primary mr-1 mb-1 waves-effect waves-light"><i class="feather icon-plus-circle"></i>
{{--                                        <button   wire:click="addRow" class="btn btn-outline-primary mr-1  mb-1 waves-effect waves-light"><i class="feather icon-plus-circle"></i>--}}

                                        </button>

                                    </div>
                                    @endif
                                    @if($index > 0)
                                    <div class="form-group col-md-2 buttonArray">
                                      <div wire:ignore.self >
                                          <button  wire:click="deleteRaw" class="btn btn-icon btn-icon  btn-danger mr-1 mb-1 waves-effect waves-light">  <i class="feather icon-trash"></i>
{{--                                          <button  wire:click="deleteRaw" class="btn btn-outline-danger mr-1  mt-1 mb-1 waves-effect waves-light">--}}


                                            </button>
                                        </div>
                                    </div>
                                    @endif
                                </div>

                                @endforeach
                                <hr>
{{--                                div for result--}}
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label> مجموع الاصناف    </label>
                                        <input type="text"  disabled value="{{$total}} "name="totalprice" class="form-control" >
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label> الضريبة   </label>
                                        <input type="text"   wire:model="tax" name="tax"  class="form-control" >
                                        @error('bill.tax') <span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                    <?php
                                    $result= $tax * $total;
                                    ?>
                                    <div class="form-group col-md-4">
                                        <label> المبلغ المطلوب (النهائي)  </label>
                                        <input disabled type="text"  value="{{ $result }}"  name="result"  class="form-control" >
                                    </div>

                              </div>
                            </div>

                           <div class="col-12 col-md-3">


    {{--                            div for image  --}}
    <div class="row">


        <div class="col-md-5 ">
            <h5>اختر صورة </h5>
            <div class="upload-btn-wrapper mx-auto">
                <div class="upload-btn">
                    @if($image)

                        <img src="{{$image->temporaryUrl()}}"  style="border: 3px solid #D3D3D3; border-radius: 15px; width:100%; height: 100%  ">
                    @else
                        @if($bill)
                            <img style="border: 3px solid #D3D3D3; border-radius: 15px; width: 100%; height: 100%" src="{{$bill->image?asset('storage/images/'.$bill->image):asset('storage/images/no-image.png')}}">
{{--                            <img  src="{{$bill->image?asset('storage/images/'.$bill->image):'#'}}"  style="border: 3px solid #D3D3D3; border-radius: 15px; width:100% ; height: 100%  ">--}}
                        @endif
                    @endif



                </div>
                <input type="file" class="form-control" wire:click wire:model="image" name="image" id="image">
                @error('bill.image') <span class="text-danger">{{ $message }}</span>@enderror

            </div>
        </div>


    </div>

    {{--                        end image div --}}



</div>
                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1" >
                                    <div class="form-group">
                                        <a href='{{route("bill")}}' class="btn btn-danger  mr-1 mb-1" type="reset"><i class="glyphicon glyphicon-repeat"></i> إلغاء </a>

                                        <button type="button" wire:click.prevent="save" class="btn btn-success  mr-1 mb-1" >حفظ</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>





</div>
</div>
@push('script')
    <script>





        $(document).ready(function() {
            $('#select2').select2();
            $('#select2').on('change', function (e) {
                var data = $('#select2').select2("val");
                    @this.set('bill.city_id', e.target.value);
            });
        });



        $(document).ready(function() {
            $('#category_id').select2();
            $('#category_id').on('change', function (e) {
                var data = $('#category_id').select2("val");
                  @this.set('priceArray.{{$index}}.category_id', e.target.value);
            });
        });
        $(document).ready(function() {
            $('#customer_id').select2();
            $('#customer_id').on('change', function (e) {
                var data = $('#customer_id').select2("val");
                   @this.set('bill.customer_id', e.target.value);
            });
        });
        $(document).ready(function() {
            $('#coin_id').select2();
            $('#coin_id').on('change', function (e) {
                var data = $('#coin_id').select2("val");
            @this.set('bill.coin_id', e.target.value);
            });
        });

    </script>
@endpush

