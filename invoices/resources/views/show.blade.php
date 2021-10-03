@extends('dashboard_layout.main')
@section('content')
<div>


<div class=" col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-start align-items-center mb-1">

                <div class="col-12 d-flex flex-sm-row flex-column justify-content-between mt-1">
                    <p>   <span class="font-weight-bold ">رقم الفاتورة: الفاتورة    {{ $bill->id }}</span> <br>
                    <span class="font-weight-bold">اسم الشركة</span> <span>{{$bill->customers?$bill->customers->name:''}}</span> <br>
                <span class="font-weight-bold ">   رقم الزبون  :</span> {{$bill->customers?$bill->customers->mobile:''}} </p>
                    <p>
                        <span class="font-weight-bold ">تاريخ الفاتورة:</span>
                        <span class="font-small-2"> {{(new \DateTime($bill->created_at))->format('Y/m/d') }}</span><br>
                 <span class="font-weight-bold ">  حالة الفاتورة  :</span>{{$bill->status == "recived"?'مسددة':'غير مسددة'}} <br>
                    <span class="font-weight-bold">  المبلغ المطلوب:</span> <span style="color: #0C9A9A">   {{ $bill->result }}</span> </p>


                </div>

                <div class="ml-auto user-like text-danger">

                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
{{--                    <p class="font-weight-bold"> <span>اسم الزبون</span> <span>{{$bill->customers?->name}}</span></p></div>--}}
{{--                <div class="col-md-4">   <p class="font-weight-bold"><span>   العنوان  :</span>{{$bill->city?->name}} </p>--}}
{{--                </div>--}}
{{--                <div col-md-4>--}}

{{--                    <p class="font-weight-bold"><span>  المبلغ المطلوب:</span> <span style="color: #0C9A9A">   {{ $bill->result }}</span> </p>--}}
{{--                </div>--}}
            </div>


            {{--            <p class="font-weight-bold"> المنجزة:</p>--}}


            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">الصنف</th>
                    <th scope="col">الكمية</th>
                    <th scope="col">سعر الوحدة </th>
                    <th scope="col">اجمالي السعر </th>
                </tr>
                </thead>

                <tbody>
                @foreach($bill->orders  as $order)
                    <tr>
                        <td>{{$order->categories?$order->categories->name:''}}</td>
                        <td>{{$order->amount }}</td>
                        <td>{{$order->categoryprice}}</td>
                        <td>{{$order->unitprice}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>



        </div>
    </div>
</div>
</div>
@endsection
