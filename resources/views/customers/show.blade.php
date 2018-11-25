@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">View Customer</div>

                <div class="card-body">
                    {{$customer->Name}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection