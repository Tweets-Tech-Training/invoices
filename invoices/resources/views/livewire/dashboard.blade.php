<div>
    {{-- Do your work, then step back. --}}
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="row">
                <div class="col-12 d-flex flex-sm-row flex-column justify-content-between mt-1">
{{--                <div class="col-6">--}}
                    <a href="/billExpenses/create" class="btn btn-outline-primary mr-1 mb-1 waves-effect waves-light" >
                        <i class="feather icon-plus-circle"></i>
                                           اضافة فواتير المشتريات
                    </a>
{{--                </div>--}}
{{--                 <div class="col-6">--}}
                    <a href="/bill/create" class="btn btn-outline-success mr-1 mb-1 waves-effect waves-light" >
                        <i class="feather icon-plus-circle"></i>
                                           اضافة فواتير المبيعات
                    </a>
{{--                /--}}
{{--                </div>--}}
            </div>

        </div>
        </div>
        <br>
        <div class="row">
        <div class=" col-md-3 col-sm-6">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-warning p-50 m-0 mb-1">
                            <div class="avatar-content">
                                <i class="feather icon-users text-warning font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700">{{@$customers}}</h2>
                        <p class="mb-0 line-ellipsis">الزبائن </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-md-3 col-sm-6">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-primary p-50 m-0 mb-1">
                            <div class="avatar-content">
                                <i class="feather icon-image text-primary font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700">{{@$city}}</h2>
                        <p class="mb-0 line-ellipsis">المحافظات</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-md-3 col-sm-6">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-success p-50 m-0 mb-1">
                            <div class="avatar-content">
                                <i class="feather icon-message-square text-success font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700">{{@$category}}</h2>
                        <p class="mb-0 line-ellipsis">اصناف المبيعات</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-md-3 col-sm-6">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-danger p-50 m-0 mb-1">
                            <div class="avatar-content">
                                <i class="feather icon-server text-danger font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700">{{@$bill}}</h2>
                        <p class="mb-0 line-ellipsis"> فوتير المبيعات الاجمالية </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-md-3 col-sm-6">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-danger p-50 m-0 mb-1">
                            <div class="avatar-content">
                                <i class="feather icon-umbrella text-danger font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700">{{$billYear}}</h2>
                        <p class="mb-0 line-ellipsis"> فواتير المبيعات خلال السنة الحالية </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-md-3 col-sm-6">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-danger p-50 m-0 mb-1">
                            <div class="avatar-content">
                                <i class="feather icon-server text-danger font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700">{{$billMonth}}</h2>
                        <p class="mb-0 line-ellipsis"> فواتير المبيعات خلال الشهر الحالي </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-md-3 col-sm-6">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-danger p-50 m-0 mb-1">
                            <div class="avatar-content">
                                <i class="feather icon-server text-danger font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700">{{$billDay}}</h2>
                        <p class="mb-0 line-ellipsis"> عدد فواتير المبيعات الصادرة اليوم   </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-md-3 col-sm-6">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-danger p-50 m-0 mb-1">
                            <div class="avatar-content">
                                <i class="feather icon-credit-card text-danger font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700">{{$expensesBill}}</h2>
                        <p class="mb-0 line-ellipsis"> فواتير المصروفات </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
