
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
                                    <td>{{(new \DateTime($bill->created_at))->format('Y.m.d') }}</td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>








