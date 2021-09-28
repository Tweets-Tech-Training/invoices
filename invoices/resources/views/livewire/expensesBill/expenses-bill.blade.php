<div>
    <div class="content-body">

        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">الفواتير</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active">الفواتير </li>
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
                                                                <label for="اسم الدورة"> اسم الصنف </label>
                                                                <input type="text" wire:model.defer="search_array.name" id="name" class="form-control" placeholder="اسم الصنف " name="اسم الصنف">
                                                            </div>
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
                                    <a  href="{{route('billExpenses.create')}}"  class="btn btn-outline-primary mr-1 mb-1 waves-effect waves-light"><i class="feather icon-plus-circle"></i>
                                        اضافة فاتورة جديدة                                 </a>
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
                                     الاسم
                                </th>
                                <th rowspan="1" colspan="1">
                                    المبلغ المطلوب
                                </th>
                                <th rowspan="1" colspan="1">
                                    التاريخ
                                </th>



                                <th rowspan="1" colspan="1">
                                    الخيارات
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($bills as $bill)

                                <tr>
                                    <td>{{$bill->id}}</td>
                                    <td>{{$bill->expensesCategories?->name}}</td>
                                    <td> {{ $bill->price }}</td>
                                    <td>{{$bill->created_at}}</td>

                                    <td>
                                        <div class="inline-block whitespace-no-wrap">
                                            <a   class="btn btn-icon btn-icon rounded-circle btn-primary mr-1 mb-1 waves-effect waves-light"   href="{{ route('billExpenses.edit',$bill->id) }}" ><i class="feather icon-edit"></i></a>
                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-danger mr-1 mb-1 waves-effect waves-light" wire:click="delete({{ $bill->id }})"  ><i class="feather icon-trash"></i></button>

                                        </div>
                                    </td>

                                </tr>

                            @empty
                              <tr>   <td>
                                      <div class='alert alert-info mt-4'>لا يوجد عناصر لعرضها </div>
                                  </td>
                              </tr>


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
</div>







