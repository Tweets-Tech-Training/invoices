
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
                                    المبلغ المطلوب
                                </th>
                                <th rowspan="1" colspan="1">
                                    رقم الزبون
                                </th>
                                <th rowspan="1" colspan="1">
                                    التاريخ
                                </th>


                            </tr>
                            </thead>
                            <tbody>

                            @foreach($bills as $bill)
                                <tr>
                                    <td>{{$bill->id}}</td>
                                    <td>{{$bill->customers?$bill->customers->name:''}}</td>
                                    <td>{{$bill->status == "recived"?'مستلمة':'غير مستلمة'}}</td>
                                    <td>{{$bill->result}}</td>
                                    <td>{{$bill->customers?$bill->customers->mobile:''}}</td>
                                    <td>{{(new \DateTime($bill->created_at))->format('  A h:i   Y/m/d ') }}</td>
                                </tr>

                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td> <strong> اجمالي المطلوب  </strong> </td>
                                <td style="font-size:large"> <strong> {{ $total }} </strong> </td>
                                <td></td>


                            </tr>
                            </tbody>
                        </table>








