@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Products</div>

                <div class="card-body">
                    <table class="table table-striped task-table">

                        <!-- Table Headings -->
                        <thead>
                            <th>Code</th>
                            <th>Product</th>
                            <th>Barcode</th>
                            <th>&nbsp;</th>
                        </thead>

                        <!-- Table Body -->
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td class="table-text">
                                        <div>{{ $product->Code }}</div>
                                    </td>
                                    <!-- Task Name -->
                                    <td class="table-text">
                                        <div>{{ $product->Description1 }}</div>
                                    </td>

                                    <td class="table-text">
                                        <div>{{ $product->Barcode1 }}</div>
                                    </td>

                                    <td>
                                        <!-- TODO: Delete Button -->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection