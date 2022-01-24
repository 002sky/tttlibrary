@extends('layouts.nav')
@section('datatables-style')
    <!--==================== data table css ====================-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

    <!--==================== responsive data table extension css ====================-->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css" />
@endsection
@section('content')


    <!--==================== table start ====================-->
    <div class="row">
        <div class="col-100">
            <div class="table-title">
                <h1>Author</h1>
                <button class="modal-open green-bg" data-modal="addNewAuthorModal"><i class="fas fa-plus-circle"></i>&nbsp;Add
                    Author</button>
            </div>
            <div class="header_fixed">
                <table class="table display responsive" id="dataTable" >

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Author name</th>
                            
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>

                        @if (!empty($AuthorList))

                            @foreach ($AuthorList as $Author)

                                <tr id="row{{ $loop->index }}">
                                    <input type="hidden" name="authorID" value="{{ $Author->id }}">

                                    <td>{{ $loop->index + 1 }}</td>
                                    <td name="authorName">{{ $Author->authorName }}</td>
                                    
                                    <td>
                                        <button class="yellow-bg"
                                            onclick="getModal('row{{ $loop->index }}')">Edit</button>

                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5">Record is empty</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--==================== table end ====================-->

    {{-- <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Add New Author</h3>

        <form action="{{route('addAuthor')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="authorName">Author Name</label>
                <input class="form-control" type="text" id="authorName" name="authorName" required>

                <label for="authorDescription"> Book Description</label>
                <input class="form-control" type="text" id="authorDescription" name="authorDescription" required>



                <button class="btn btn-primary" type="submit">Add New</button>
            </div>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>

</div> --}}

    <!--=============== add author modal start ===================-->

    <div class="modal" id="addNewAuthorModal">
        <div class="profile-container">
            <div class="table-title border-bottom">
                <h1 class="font-white">Add author</h1>
                <span class="modal-close"><i class="fas fa-times-circle"></i></span>

            </div>
            <form action="{{ route('addAuthor') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="input">
                        <div class="label">Author name</div>
                        <input class="form-control" type="text" id="authorNameAdd" name="authorNameAdd" required>
                    </div>
                </div>


               

                <div class="form-row">
                    <input type="submit" value="Add" class="btn-login">
                </div>
            </form>
        </div>
    </div>
    <!--=============== add author modal end ===================-->

    <!--=============== edit author modal start ===================-->
    <div class="modal" id="editAuthorModal">
        <div class="profile-container">
            <div class="table-title border-bottom">
                <h1 class="font-white">Edit author</h1>
                <span class="modal-close"><i class="fas fa-times-circle"></i></span>

            </div>
            <form action="{{route('EditAuthor')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="id" name="AuthorID">

                <div class="form-row">
                    <div class="input">
                        <div class="label">Author name</div>
                        <input class="form-control" type="text" id="authorNameEdit" name="authorNameEdit" required>
                    </div>
                </div>

               

                <div class="form-row">
                    <input type="submit" value="Edit" class="btn-login">
                </div>
            </form>
        </div>
    </div>
    <!--=============== edit author modal end ===================-->


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

    <script>
        function getModal(rowid) {
            var id = document.getElementById(rowid).querySelector('input[name="authorID"]').value;
            var name = document.getElementById(rowid).querySelector('td[name="authorName"]').textContent;

            var editModal = document.getElementById('editAuthorModal');
            var authorName = document.getElementById('authorNameEdit');
            var inputID = document.getElementById('id');

            authorName.value = name;

            inputID.value = id;


            editModal.style.display = "flex";

        }
    </script>
@endsection
