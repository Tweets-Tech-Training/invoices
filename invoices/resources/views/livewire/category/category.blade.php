<div>
    <div class="content-body">

        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">الاصناف</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active">الاصناف</li>
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
                                    <button wire:click="create" class="btn btn-outline-primary mr-1 mb-1 waves-effect waves-light"><i class="feather icon-plus-circle"></i>
                                        اضافة صنف  جديد                                 </button>

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
                                    الصنف
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
                            @forelse ($categoriess as $category)
                                 <tr>
                                                    <td>{{$category->id}}</td>
                                                    <td>{{$category->name}}</td>
                                               <td>{{(new \DateTime($category->created_at))->format('Y/m/d') }}</td>
                                                    <td>
                                                        <div class="inline-block whitespace-no-wrap">
                                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary mr-1 mb-1 waves-effect waves-light"  wire:click="edit({{ $category->id }})"><i class="feather icon-edit"></i></button>
                                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-danger mr-1 mb-1 waves-effect waves-light" wire:click="delete({{ $category->id }})" ><i class="feather icon-trash"></i></button>

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

                                {{$categoriess->links()}}

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
    <div class="modal" id="CreateCategoryModal"  wire:ignore.self >
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"> اضافة صنف جديد </h4>
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
                        <strong>Success!</strong>تمت اضافة الصنف  بنجاح
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="form-group">
                        <label for="name">الاسم  :</label>
                        <input type="text" wire:model="name" class="form-control" name="name" id="name">
                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>


                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger" data-dismiss="modal">الغاء</button>
                    <button type="button" class="btn btn-success" wire:click.prevent="store" id="SubmitCreateCategoryForm">حفظ</button>

                </div>
            </div>
        </div>
    </div>

    <div  class="modal fade" id="EditCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تعديل الاصناف </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="hidden" wire:model="coin_id">
                            <label for="exampleFormControlInput1">الاسم</label>
                            <input type="text" class="form-control" wire:model="name" id="exampleFormControlInput1" >
                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click.prevent="cancel" class="btn btn-danger" >الغاء</button>
                    <button type="button" wire:click.prevent="update" class="btn btn-success" >حفظ</button>
                </div>
            </div>
        </div>
    </div>





    <div class="modal" id="DeleteCategoryModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">حذف الصنف </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <h4>هل انت متأكد؟</h4>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="SubmitDeleteCategoryForm">نعم </button>
                    <button type="button" class="btn btn-default" data-target="#DeleteCategoryModal" id="getDeleteId" data-dismiss="modal">لا</button>
                </div>
            </div>
        </div>
    </div>
</div>
