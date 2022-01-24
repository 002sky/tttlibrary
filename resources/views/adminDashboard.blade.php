@extends('layouts.nav')
@section('datatables-style')
    <!--==================== data table css ====================-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

    <!--==================== responsive data table extension css ====================-->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css" />
@endsection
@section('content')



    <div class="row">
        <div class="col-25">
            <div class="counter bg-primary">
                <p>
                    <i class="fas fa-book"></i>
                </p>

                <h3>{{ $status['bookCountTotal'] }}</h3>
                <p>Total books</p>
            </div>
        </div>
        <div class="col-25">
            <div class="counter bg-warning">
                <p>
                    <i class="fas fa-spinner"></i>
                </p>
                <h3>{{ $status['bookCountBorrowed'] }}</h3>
                <p>Borrowed book</p>
            </div>
        </div>
        <div class="col-25">
            <div class="counter bg-success">
                <p>
                    <i class="fas fa-check-circle"></i>
                </p>
                <h3>{{ $status['bookCountAvailable'] }}</h3>
                <p>Available books</p>
            </div>
        </div>
        <div class="col-25">
            <div class="counter bg-blue">
                <p>
                    <i class="fas fa-user-circle"></i>
                </p>
                <h3>{{ $status['studentCount'] }}</h3>
                <p>Students</p>
            </div>
        </div>
    </div>

    <!--==================== table start ====================-->
    <div class="row">
        <div class="col-100">
            <div class="table-title" style="margin-top: 30px;">
                <h1>Borrowed book overview</h1>
            </div>
            <div class="header_fixed">
                <table class="table display responsive" id="dataTable">


                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Book name</th>
                            <th>Student Name</th>
                            <th>Extend time</th>
                            <th>End Time</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>

                        @if (!empty($studentBookStatus))

                            @foreach ($studentBookStatus as $c)

                                <tr id="row{{ $loop->index }}">
                                    <td>{{ $loop->index + 1 }}</td>
                                    <input type="hidden" name="cID" value="{{ $c->id }}">
                                    <td name="bkName">{{ $c->bkName }}</td>
                                    <td name="bkName">{{ $c->stName }}</td>
                                    <td name="bkName">{{ $c->extendTime }}</td>
                                    <td name="bkName">{{ $c->endTime }}</td>
                                    <td>
                                        <a class="yellow-bg" href="{{ route('adminReturnBook', ['id' => $c->bookID]) }}"
                                            onClick="return confirm('Are you sure want to update this status?')" >Update</a>
                                    </td>
                                </tr>


                            @endforeach
                        @else
                            <tr>
                                <td colspan="10">Record is empty</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--==================== table end ====================-->

@endsection
@section('datatables-javascript')
    <!--=============== data table javascript ===================-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js">
    </script>

    <!--=============== responsive data table extension javascript ===================-->
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js">
    </script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        })
    </script>


@endsection
