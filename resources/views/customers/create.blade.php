@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Customer</div>

                <div class="card-body">
                    {{ Form::open(array('url' => 'customers')) }}

                        <div class="form-group">
                            {{ Form::label('Name', 'Name') }}
                            {{ Form::text('Name', Input::old('Name'), array('class' => 'form-control')) }}
                        </div>

                        {{ Form::submit('Create Customer!', array('class' => 'btn btn-primary')) }}

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection