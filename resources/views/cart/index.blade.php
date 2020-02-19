@extends('layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-3">

                <h1 class="my-4">{{ $title }}</h1>

            </div>

            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                <div class="table">
                    <table>
                        <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price X1</th>
                        <th></th>
                        <th>Total</th>
                        </thead>
                        <tbody>
                        @foreach($cart as $key => $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product['name'] }}</td>
                                <td>{{ $product['quantity'] }}</td>
                                <td>{{ $product['price'] }} $</td>
                                <td>
                                    <form action="{{ route('delete.from.cart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $key }}">
                                        <input type="submit" class="btn-danger" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><b>{{ $totalSum }} $</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection
