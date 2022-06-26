
	<h2 class="sub-header">All Employees</h2>
	<div class="table-responsive">
    <table id="myTable" class="table table-striped">
      <thead>
        <tr>
          <th>Company name</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Phone</th>
{{--          @can('adminRole')--}}
          <th>Edit</th>
          <th>Delete</th>
{{--          @endcan--}}
        </tr>
      </thead>
      <tbody>
        @if(count($employees) > 0)
          @foreach($employees as $employee)
            <tr>
                <td>{{$employee->company}}</td>
                <td><a href="/employee/{{$employee->id}}">{{$employee->f_name}}</a></td>
                <td>{{$employee->l_name}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->phone}}</td>
                <!-- @//cannot('adminRole') -->
{{--                @can('adminRole')--}}
                <td><a href="/employee/{{$employee->id}}/edit" class="btn btn-primary">Edit</a></td>
                <td>
{{--                  {!! Form::open(['action' => ['EmployeeController@destroy', $employee->id], 'method'=>'delete']) !!}--}}
{{--                    {!! Form::submit('Del', ['class' => 'btn btn-danger']) !!}--}}
{{--                  {!! Form::close() !!}--}}
                </td>
{{--                @endcan--}}
                <!-- @//endcannot -->
            </tr>
          @endforeach
      @endif
      </tbody>
    </table>
  </div>
