<div>


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


                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($bills as $bill)

                                <tr>
                                    <td>{{$bill->id}}</td>
                                    <td>{{$bill->expensesCategories?$bill->expensesCategories->name:''}}</td>
                                    <td> {{ $bill->price }}</td>
                                    <td>{{(new \DateTime($bill->created_at))->format('Y.m.d') }}</td>


                                </tr>

                            @empty
                                <tr>   <td>
                                        <div class='alert alert-info mt-4'>لا يوجد عناصر لعرضها </div>
                                    </td>
                                </tr>


                            @endforelse
                            <tr>
                                <td></td>
                                <td> <strong> اجمالي المطلوب  </strong> </td>
                                <td style="font-size:large"> <strong> {{ $total }} </strong> </td>
                                <td></td>


                            </tr>
                            </tbody>
                        </table>



                    </div>













