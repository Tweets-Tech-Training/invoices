<div>
    {{-- Do your work, then step back. --}}
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
                        <p class="mb-0 line-ellipsis">الاصناف</p>
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
                        <p class="mb-0 line-ellipsis"> الفواتير الاجمالية </p>
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
                        <h2 class="text-bold-700">{{$billYear}}</h2>
                        <p class="mb-0 line-ellipsis"> عدد الفواتير خلال السنة الحالية </p>
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
                        <p class="mb-0 line-ellipsis"> عدد الفواتير خلال الشهر الحالي </p>
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
                        <p class="mb-0 line-ellipsis"> عدد الفواتير الصادرة اليوم   </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
