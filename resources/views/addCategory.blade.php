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
                <h1>Book Category</h1>
                <button class="modal-open green-bg" data-modal="addBookCategoryModal"><i
                        class="fas fa-plus-circle"></i>&nbsp;Book
                    Category</button>
            </div>
            <div class="header_fixed">
                <table class="table display responsive" id="dataTable">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category name</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    {{ Session::get('error') }}
                    <tbody>

                        @if (!empty($categories))

                            @foreach ($categories as $c)

                                <tr id="row{{ $loop->index }}">
                                    <td>{{ $loop->index + 1 }}</td>
                                    <input type="hidden" name="cID" value="{{ $c->id }}">

                                    <td name="category">{{ $c->category }}</td>
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
        <h3>Add New Category</h3>

        <form action="{{route('addCategory')}}" method="POST">
            @csrf
            <div class="form-group">
            <label for="addCatergory"> add new Category</label>
            <input class="form-control" type="text" id="categoryName" name="categoryName">
            <button class="btn btn-primary" type="submit">Add New</button>
        </div>
        </form>
        <br><br>
        


    </div>
    <div class="col-sm-3"></div>

</div> --}}


    <!--=============== add book category modal start ===================-->

    <div class="modal" id="addBookCategoryModal">
        <div class="profile-container">
            <div class="table-title border-bottom">
                <h1 class="font-white">Add new book category</h1>
                <span class="modal-close"><i class="fas fa-times-circle"></i></span>

            </div>
            <form action="{{ route('addCategory') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="input">
                        <div class="label">Category name</div>
                        <input class="form-control" type="text" id="categoryNameAdd" name="categoryNameAdd" required>

                    </div>
                </div>

                <div class="form-row">
                    <input type="submit" value="Add" class="btn-login">
                </div>
            </form>
        </div>
    </div>
    <!--=============== add book category modal end ===================-->

    <!--=============== edit book category modal start ===================-->

    <div class="modal" id="editCategoryModal">
        <div class="profile-container">
            <div class="table-title border-bottom">
                <h1 class="font-white">Edit book category</h1>
                <span class="modal-close"><i class="fas fa-times-circle"></i></span>

            </div>
            <form action="{{ route('EditCategory') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="categoryID" name="categoryID">

                <div class="form-row">
                    <div class="input">
                        <div class="label">Category name</div>
                        <input class="form-control" type="text" id="categoryNameEdit" name="categoryNameEdit" required>

                    </div>
                </div>

                <div class="form-row">
                    <input type="submit" value="Edit" class="btn-login">
                </div>
            </form>
        </div>
    </div>
    <!--=============== edit book category modal end ===================-->

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
            var category = document.getElementById(rowid).querySelector('td[name="category"]').textContent;
            var categoryID = document.getElementById(rowid).querySelector('input[name="cID"]').value;

            var editModal = document.getElementById('editCategoryModal');
            var categoryN = document.getElementById('categoryNameEdit');
            var inputID = document.getElementById('categoryID');

            categoryN.value = category;
            inputID.value = categoryID;

            editModal.style.display = "flex";

        }
    </script>
@endsection
