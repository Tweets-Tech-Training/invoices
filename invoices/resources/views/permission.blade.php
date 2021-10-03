@extends('dashboard_layout.main')
@section('content')

    <div class=" col-md-12">
        <div class="card">
            <div class="card-body">
                <form class="form" action="{{route('user.postPermission',$user->id)}}" method="post" >
                    @csrf
                    @method('post')
                <div class="row">
                    <div class="top">
                        <strong class="col-12 d-flex flex-sm-row flex-column justify-content-between mt-1"> تعديل صلاحيات المستخدم {{$user->name}}  </strong>
                    <br>
                    </div>
                    <div class="table-responsive">
                    <div class="col-12">

                <table class="table data-thumb-view dataTable no-footer dt-checkboxes-select" id="DataTables_Table_0" role="grid">
                    <thead>
                    <tr role="row">

                        <th rowspan="1" colspan="1">
                            الاسم
                        </th>

                        <th rowspan="1" colspan="1">
                            عرض
                        </th>

                        <th rowspan="1" colspan="1">
                            اضافة
                        </th>
                        <th rowspan="1" colspan="1">
                            تعديل
                        </th>
                        <th rowspan="1" colspan="1">
                            حذف
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($linkse->where('parent_id',0) as $topLink)
                        <?php
                        $userHasLink = $user->links()->where('links.id',$topLink->id)->count();

//                        dd($topLink);
                        ?>
                        <tr>
                            <th> {{$topLink->title}} </th>
                            @foreach($linkse->where('parent_id',$topLink->id) as $subLink)
                                <?php
                                $link = $user->links()->where('links.id',$subLink->id)->count();
                                ?>
                                <td><div class="mb-3 form-check"><input {{ $link?"checked":"" }}  type='checkbox' name='links[]' value='{{$subLink->id}}'>
                                    </div></td>
                            @endforeach
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                    </div>
                    </div>

                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1" >
                        <div class="form-group">
                            <a href='{{route("user")}}' class="btn btn-danger  mr-1 mb-1" type="reset"><i class="glyphicon glyphicon-repeat"></i> إلغاء </a>

                            <button type="submit"  class="btn btn-success  mr-1 mb-1" >حفظ</button>

                        </div>
                    </div>

            </div>
                </form>
            </div>
        </div>
    </div>
@endsection
