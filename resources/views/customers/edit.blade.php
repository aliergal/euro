@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Customer</div>

                <div class="card-body">
                    {{ Form::model($customer, array('route' => array('customers.update', $customer->CustomerID), 'method' => 'PUT')) }}

                        <div class="form-group">
                            {{ Form::label('Name', 'Name') }}
                            {{ Form::text('Name', Input::old('Name'), array('class' => 'form-control')) }}
                        </div>

                        {{ Form::submit('Update Customer!', array('class' => 'btn btn-primary')) }}

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection