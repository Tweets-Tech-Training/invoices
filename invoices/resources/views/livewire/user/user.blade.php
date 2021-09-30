


<div>
    <div class="content-body">

        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">المستخدمين </h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active">المستخدمين</li>
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
                                    <a href="{{route('user.create')}}" class="btn btn-outline-primary mr-1 mb-1 waves-effect waves-light"><i class="feather icon-plus-circle"></i>
                                        اضافة مستخدم جديد                                 </a>

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
                                    الاسم
                                </th>

                                <th rowspan="1" colspan="1">
                                    الايميل
                                </th>
                                <th rowspan="1" colspan="1">
                                    الخيارات
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <div class="inline-block whitespace-no-wrap">
                                            <a   class="btn btn-icon btn-icon rounded-circle btn-primary mr-1 mb-1 waves-effect waves-light" href="{{ route('user.edit',$user->id) }}" ><i class="feather icon-edit"></i></a>
                                            <a   class="btn btn-icon btn-icon rounded-circle btn-success mr-1 mb-1 waves-effect waves-light" title="permission" href="{{ route('user.permission',$user->id) }}" ><i class="feather icon-lock"></i></a>
                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-danger mr-1 mb-1 waves-effect waves-light"  wire:click="delete({{ $user->id }})" ><i class="feather icon-trash"></i></button>
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
                                {{$users->links()}}
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
