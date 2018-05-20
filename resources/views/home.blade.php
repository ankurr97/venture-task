@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table style="border-collapse: collapse;border-spacing: 0;width: 100%;">
                      <tr>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Salary</th>
                      </tr>
                        @foreach($data as $dat)
                            <tr>
                                <td>{{ $dat->name }}</td>
                                <td>{{$dat->department}}</td>
                                <td>{{ $dat->salary }}</td>
                            </tr>
                        @endforeach
                      
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
