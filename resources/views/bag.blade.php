@extends('layouts.nav')
@section('datatables-style')
    <!--==================== data table css ====================-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

    <!--==================== responsive data table extension css ====================-->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css" />
@endsection
@section('content')

    <!--==================== content start ====================-->
    <div class="row">
        <div class="category">
            <div class="header">
                <h1>Bag</h1>
            </div>
            <div class="header_fixed">
                <table class="table display responsive" id="dataTable" >

                    <thead>
                        <tr>
                            <th>Book ID</th>
                            <th>Book name</th>
                            <th>Return due date</th>
                            <th>Available extend chance</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if (!empty($borrowTable))

                            @foreach ($borrowTable as $borrow)

                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $borrow->bkName }}</td>
                                    <td>{{ $borrow->endTime }}</td>
                                    <td>{{ $borrow->extendTime }}</td>
                                    <td>
                                        <a class="yellow-bg" href="{{ route('extendTimes', ['id' => $borrow->bookID]) }}">Extend period</a>
                                        &nbsp;
                                        <a onClick="return confirm('Are you sure want to return this books?')" href="{{ route('returnBook', ['id' => $borrow->bookID]) }}">Return</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4">Record is empty</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--==================== content end ====================-->

@endsection
@section('datatables-javascript')
    <!--=============== data table javascript ===================-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <!--=============== responsive data table extension javascript ===================-->
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        })
    </script>
@endsection
