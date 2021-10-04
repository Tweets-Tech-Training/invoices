<div>
    <div class="content-body">

        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">فواتير المبيعات</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active"> فواتير المبيعات  </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <section id="data-thumb-view" class="data-thumb-view-header">

        <div class="row">
            <div class="col-sm-12">
                <div class="card collapse-icon accordion-icon-rotate">
                    <div class="card-body py-1">
                        <div class="default-collapse collapse-bordered">
                            <div class="card collapse-header">
                                <div  class="card-header" >
                                <h4 class="card-title">بحث</h4>
                                </div>
{{--                                <div id="collapse1" role="tabpanel" aria-labelledby="headingCollapse1" class="collapse">--}}
                                    <div class="card-content">
                                        <div class="card-body">
{{--                                            <form class="form" wire:submit.prevent="search">--}}
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="اسم الدورة"> اسم الشركة </label>
                                                                <input type="text" wire:model.defer="search_array.name" id="name" class="form-control" placeholder="اسم الشركة " name="اسم الشركة">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="اسم الدورة"> اسم مفوض الشركة </label>
                                                                <input type="text" wire:model.defer="search_array.commissioner" id="commissioner" class="form-control" placeholder="اسم مفوض الشركة " name="اسم امفوض الشركة">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="اسم الدورة">   رقم الجوال  </label>
                                                                <input type="text" wire:model.defer="search_array.mobile" id="mobile" class="form-control" placeholder="رقم الزبون " name="رقم الزبون">
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-3">
                                                            <label for="اسم الدورة">   العملة </label>
                                                            <input type="text" wire:model.defer="search_array.coinName" id="coinName" class="form-control" placeholder="ادخل العملة " name="ادخل العملة">

                                                            {{--                                                            <select class="form-control"  wire:model.defer="search_array.coinName"  name='coinName' id="coinName">--}}
{{--                                                                <option value=''>اختر العملة </option>--}}
{{--                                                                @foreach($coins as $coin)--}}
{{--                                                                    <option value='{{$coin->id}}' > {{$coin->name}}</option>--}}
{{--                                                                @endforeach--}}
{{--                                                            </select>--}}
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group" >
                                                                <label for="name">اجمالي المبلغ المطلوب  :</label>
                                                                <input type="text" value="{{$totalResult}}" class="form-control" name="totalPrice" id="totalPrice " disabled>

                                                            </div>
                                                        </div>
                                                        <div class='col-md-3'>
                                                            <label for="اسم الدورة">  حالة الفاتورة </label>
                                                            <select class="form-select form-control"   wire:model="search_array.status" aria-label="Default select example" name="status"
                                                                    id="status">
                                                                <option value="">حالة الفاتورة مسددة ام لا )</option>
                                                                <option  value="recived">مسددة</option>
                                                                <option  value="unrecived"> غير مسددة </option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group" >
                                                                <label for="name">التاريخ من  :</label>
                                                                <input type="date" wire:model="search_array.from" class="form-control" name="from" id="from">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group" >
                                                                <label for="name">التاريخ الى :</label>
                                                                <input type="date" wire:model="search_array.to" class="form-control" name="to" id="to">
                                                            </div>
                                                        </div>


                                                        <div class="col-12 mt-4 text-right">
                                                            <button wire:loading.attr="disabled" type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light search_btn" wire:click="search">
                                                                بحث
                                                                <span wire:loading="" wire:target="search">
                                                                <i class="fa fa-spinner fa-spin " aria-hidden="true"></i>
                                                                </span>
                                                            </button>
{{--                                                            <button wire:loading.attr="disabled" type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light" >--}}
{{--                                                                افراغ الحقول--}}
{{--                                                                <span wire:loading="" wire:target="resetSearch">--}}
{{--                                                                    <i class="fa fa-spinner fa-spin " aria-hidden="true"></i>--}}
{{--                                                                </span>--}}
{{--                                                            </button>--}}
                                                        </div>
                                                    </div>
                                                </div>
{{--                                            </form>--}}

                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <div class="table-responsive">

                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="top">
                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-between mt-1">

                                <div class="dt-buttons btn-group">
                                    <?php
                                    $userHas= auth()->user()->links->pluck('action_name')->toArray();
                                    ?>
                                    @if(in_array('bill_create',$userHas))

                                    <a  href="{{route('bill.create')}}"  class="btn btn-outline-primary mr-1 mb-1 waves-effect waves-light"><i class="feather icon-plus-circle"></i>
                                        اضافة فاتورة جديدة                                 </a>
                                        @endif
                                    <button wire:click="export"    class="btn btn-outline-success mr-1 mb-1 waves-effect waves-light"><i class="feather icon-plus-circle"></i>
                                       تصدير الى excel         </button>
                                </div>
                            </div>
                        </div>
{{--                                <div class='col-sm-4'>--}}
{{--                                    <select class="form-select form-control"   wire:model="status" aria-label="Default select example" name="status"--}}
{{--                                            id="status">--}}
{{--                                        <option value="">حالة الفاتورة (مستلم ام لا )</option>--}}

{{--                                        <option  value="recived">مستلم</option>--}}
{{--                                        <option  value="unrecived"> غير مستلم </option>--}}


{{--                                    </select>--}}
{{--                                    <br>--}}
{{--                                </div>--}}

{{--                            </div>--}}

{{--                            <div class="action-filters">--}}

{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="clear"></div>
                        <table class="table data-thumb-view dataTable no-footer dt-checkboxes-select" id="DataTables_Table_0" role="grid">
                            <thead>
                            <tr role="row">

                                <th rowspan="1" colspan="1">
                                    الرقم
                                </th>

                                <th rowspan="1" colspan="1">
                                    اسم الزبون
                                </th>
                                <th rowspan="1" colspan="1">
                                    الحالة
                                </th>
                                <th rowspan="1" colspan="1">
                                    التاريخ
                                </th>
                                <th rowspan="1" colspan="1">
                                    المبلغ المطلوب
                                </th>
                                <th rowspan="1" colspan="1">
                                    العملة
                                </th>
                                <th rowspan="1" colspan="1">
                                     اسم المستخدم
                                </th>

{{--                                <th rowspan="1" colspan="1">--}}
{{--                                    رقم الزبون--}}
{{--                                </th>--}}

                                <th rowspan="1" colspan="1">
                                    الخيارات
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($bills as $bill)

                                                <tr>
                                                    <td>{{$bill->id}}</td>

                                                    <td>{{$bill->customers?$bill->customers->name:''}}</td>
                                                    <td>{{$bill->status == "recived"?'مسددة':'غير مسددة'}}</td>
                                                    <td>{{(new \DateTime($bill->created_at))->format('  A h:i   Y/m/d ') }}</td>
                                                     <td>{{ (int) ($bill->result ) }}</td>
                                                    <td>{{$bill->coins?$bill->coins->name:''}}</td>
                                                    <td>{{$bill->users?$bill->users->name:''}}</td>

{{--                                                    <td>{{$bill->customers?$bill->customers->mobile:''}}</td>--}}
                                                    <td>
                                                        <div class="inline-block whitespace-no-wrap">
                                                            <?php
                                                            $user= auth()->user()->links->pluck('action_name')->toArray();
                                                            ?>
                                                                @if(in_array('bill_edit',$user))

                                                                 <a  class="btn btn-icon btn-icon rounded-circle btn-primary mr-1 mb-1 waves-effect waves-light"   href="{{ route('bill.edit',$bill->id) }}" ><i class="feather icon-edit"></i></a>
                                                                   @endif
                                                                    <a   class="btn btn-icon btn-icon rounded-circle btn-success mr-1 mb-1 waves-effect waves-light"   href="{{ route('bill.show',$bill->id) }}" ><i class="feather  icon-eye"></i></a>
                                                                 @if(in_array('bill_delete',$user))
                                                                    <button type="button" wire:click="deleteId({{ $bill->id }})" class="btn btn-icon btn-icon rounded-circle btn-danger mr-1 mb-1 waves-effect waves-light" data-toggle="modal" data-target="#exampleModal"><i class="feather icon-trash"></i></button>
{{--                                                                       <button type="button" class="btn btn-icon btn-icon rounded-circle btn-danger mr-1 mb-1 waves-effect waves-light" wire:click="deleteId({{ $bill->id }})"  ><i class="feather icon-trash"></i></button>--}}
                                                               @endif
                                                        </div>
                                                    </td>

                                                </tr>

                            @empty
                                <div class='alert alert-info mt-4'>لا يوجد عناصر لعرضها </div>
                            @endforelse
                            </tbody>
                        </table>

                        <div class="bottom">
                            <div class="actions"></div>
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">


                                {{$bills->links()}}
                                <div>
                                </div>

                            </div>
                        </div>




                    </div>
                </div>


            </section>
        </div>



    </div>


    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Confirm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>هل انت متأكد؟؟</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">الغاء</button>
                    <button type="button" wire:click.prevent="delete" class="btn btn-danger close-modal" data-dismiss="modal">نعم !! احذف </button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>







