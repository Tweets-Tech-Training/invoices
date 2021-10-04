<div xmlns="http://www.w3.org/1999/html">

    <div class="content-body">

        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">العملات</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active">العملات</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <section id="data-thumb-view" class="data-thumb-view-header">



                <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="top">
                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-between mt-1">

                                <div class="dt-buttons btn-group">
{{--                                    <button type="button" class="btn btn-outline-primary waves-effect waves-light"  wire:click="create">اضافة العملة جديدة </button>--}}
                                    <button  wire:click="create" class="btn btn-outline-primary mr-1 mb-1 waves-effect waves-light float-right"><i class="feather icon-plus-circle"></i>
                                        اضافة عملة  جديدة                                 </button>

                                </div>

                                <div  class="col-md-4">
                                    <input type="text" placeholder="ادخل الاسم هنا  ...." wire:model="search"  class="form-control form-control-sm mb-1"  style="padding: 1.45rem 2.8rem !important;    border: 1px solid #D6DCE1;
                               float: left;" >
                                </div>

                            </div>
                            <div class="action-filters">



                            </div>
                        </div>
                        <div class="clear"></div>
                        <table class="table data-thumb-view dataTable no-footer dt-checkboxes-select" id="DataTables_Table_0" role="grid">
                            <thead>
                            <tr role="row">

                                <th rowspan="1" colspan="1">
                                    الرقم
                                </th>

                                <th rowspan="1" colspan="1">
                                        اسم العملة
                                </th>
                                <th rowspan="1" colspan="1">
                                    رمز العملة
                                </th>

                                <th rowspan="1" colspan="1">
                                    الخيارات
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($coinss as $coin)
                                                <tr>
                                                    <td>{{$coin->id}}</td>
                                                    <td>{{$coin->name}}</td>

                                                    <td>{{$coin->code}}</td>
                                                    <td>
                                                        <div class="inline-block whitespace-no-wrap">
                                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary mr-1 mb-1 waves-effect waves-light"  wire:click="edit({{ $coin->id }})"><i class="feather icon-edit"></i></button>
{{--                                                            <button type="button" wire:click="deleteId({{ $coin->id }})" class="btn btn-icon btn-icon rounded-circle btn-danger mr-1 mb-1 waves-effect waves-light" data-toggle="modal" data-target="#exampleModal"><i class="feather icon-trash"></i></button>--}}
                                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-danger mr-1 mb-1 waves-effect waves-light" wire:click="delete({{ $coin->id }})" ><i class="feather icon-trash"></i></button>

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


                                {{$coinss->links()}}
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

    <!-- Create  Modal -->
    <div class="modal" id="CreateCoinModal"  wire:ignore.self >
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"> اضافة عملة جديدة </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                        <strong>Success!</strong>تمت اضافة العملة بنجاح
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="form-group">
                        <label for="name">اسم العملة :</label>
                        <input type="text" wire:model="name" class="form-control" name="name" id="name">
                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="name">رمز العملة :</label>
                        <input type="text" wire:model="code" class="form-control" name="code" id="code">
                        @error('code') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>

                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">الغاء</button>
                    <button type="button" class="btn btn-success" wire:click.prevent="store" id="SubmitCreateCityForm">حفظ</button>

                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="EditCoinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  wire:ignore.self>
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
                            <input type="hidden" wire:model="coin_id">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" class="form-control" wire:model="name"  name="name" id="name" >
                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                        <div class="form-group">

                            <label for="exampleFormControlInput1">الرمز</label>
                            <input type="text" class="form-control" wire:model="code"  name="code" id="code" >
                            @error('code') <span class="text-danger">{{ $message }}</span>@enderror

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button"  wire:click.prevent="cancel" class="btn btn-danger" >الغاء</button>
                    <button type="button" wire:click.prevent="update" class="btn btn-success" >حفظ</button>
                </div>
            </div>
        </div>
    </div>


{{--    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--        <div class="modal-dialog" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title" id="exampleModalLabel">Delete Confirm</h5>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true close-btn">×</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <p>هل انت متأكد؟؟</p>--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">الغاء</button>--}}
{{--                    <button type="button" wire:click.prevent="delete" class="btn btn-danger close-modal" data-dismiss="modal">نعم !! احذف </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
