@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
             

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">formTransaction {{ $formtransaction->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/form-transaction') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/form-transaction/' . $formtransaction->id . '/edit') }}" title="Edit formTransaction"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/formtransaction' . '/' . $formtransaction->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete formTransaction" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $formtransaction->id }}</td>
                                    </tr>
                                    <tr><th> Created At </th><td> {{ $formtransaction->created_at }} </td></tr><tr><th> Updated At </th><td> {{ $formtransaction->updated_at }} </td></tr><tr><th> Userid </th><td> {{ $formtransaction->Userid }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
