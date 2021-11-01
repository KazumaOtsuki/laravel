<table class="table">
    <tbody>
        <tr>
            <th scope="row">{{ $employeeColumn['employee_code'] }}</th>            
            <td>
                {{Form::text('employee_code',$employeeCode,[
                    'id' => 'employeeCode',
                    'class' => ['employee-code','form-control']
                ])}}
            </td>
        </tr>
        <tr>
            <th scope="row">{{ $employeeColumn['employee_name'] }}</th>
            <td>
                {{Form::text('employee_name',$employeeName,[
                    'id' => 'employeeName',
                    'class' => ['employee-name','form-control']
                ])}}
            </td>
        </tr>
        <tr>
            <th scope="row">{{ $employeeColumn['department_id'] }}</th>
            <td>
                {{Form::select('department_id',$departments,$departmentId,[
                    'id' => 'departments',
                    'class' => ['departments','form-select'],
                ])}}
            </td>
        </tr>
        <tr>
            <th scope="row">{{ $employeeColumn['gender_id'] }}</th>
            <td>
                @foreach ($genders as $g)
                <div class="form-check">
                    @php
                        //初期値
                        $isSelectInit = ($genderId === $g->gender_id) ? TRUE : FALSE;
                    @endphp
                    {{Form::radio('gender_id', $g->gender_id, $isSelectInit, [
                        'id'=>'genders'. $g->gender_id,
                        'class'=>'form-check-input',
                    ])}}
                    <label class="form-check-label" for="{{ 'genders'.$g->gender_id }}">
                        {{ $g->gender_name }}
                    </label>
                </div>
                @endforeach
            </td>
        </tr>
    </tbody>
</table>
