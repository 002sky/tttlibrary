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
                <h1>Book</h1>
                <button class="modal-open green-bg" data-modal="addNewBookModal"><i class="fas fa-plus-circle"></i>&nbsp;Add
                    Book</button>
            </div>
            <div class="header_fixed">
                <table class="table display responsive" id="dataTable" >

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Book name</th>
                            <th>Book category</th>
                            <th>Published Date</th>
                            <th>Book author</th>
                            <th>Book description</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    {{ Session::get('error') }}
                    <tbody>

                        @if (!empty($Books))
                            @foreach ($Books as $book)
                                <tr id="row{{ $loop->index }}">
                                    <td>{{ $loop->index + 1 }}</td>
                                    <input type="hidden" name="bookID" value="{{ $book->id }}">
                                    <td><img src="{{ asset('images') }}/{{ $book->image }}" alt=""></td>
                                    <td name='bookName'>{{ $book->bookName }}</td>
                                    <input type="hidden" name="cID" value="{{ $book->categoryID }}">
                                    <td name='catname'>{{ $book->catName }}</td>
                                    <td name='publishedDate'>{{ $book->publishingDate }}</td>
                                    <input type="hidden" name="aID" value="{{ $book->authorID }}">
                                    <td name='aName'>{{ $book->aName }}</td>

                                    <td name='desc'>{{ $book->description }}</td>

                                    <td>

                                        <button class="yellow-bg"
                                            onclick="getModal('row{{ $loop->index }}')">Edit</button>

                                    </td>
                                </tr>


                            @endforeach
                        @else
                            <tr>
                                <td colspan="6">Record is empty</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--==================== table end ====================-->

    <!--=============== add book modal start ===================-->

    <div class="modal" id="addNewBookModal">
        <div class="profile-container">
            <div class="table-title border-bottom">
                <h1 class="font-white">Add new book</h1>
                <span class="modal-close"><i class="fas fa-times-circle"></i></span>

            </div>
            <form action="{{ route('addBook') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="input">
                        <div class="label">Book name</div>
                        <input class="form-control" type="text" id="bookName" name="bookNameAdd" required>

                    </div>
                </div>


                <div class="form-row">
                    <div class="input">
                        <div class="label">Book description</div>
                        <textarea class="form-control" id="bookDescription" name="bookDescriptionAdd" rows="4" cols="50" required></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="input">
                        <div class="label">Book published date</div>
                        <input class="form-control" type="textArea" id="publishedDate" name="publishedDateAdd" required>
                    </div>
                </div>


                <div class="form-row">
                    <div class="input">
                        <div class="label">Book category</div>
                        <select name="categoryIDAdd" id="categoryID" class="form-control">
                            @foreach ($CategoryID as $c)

                                <option value="{{ $c->id }}">{{ $c->id }} - {{ $c->category }}</option>

                            @endforeach

                        </select>
                        <div class="select-icon">
                            <i class="fas fa-sort-down"></i>

                        </div>

                    </div>
                </div>

                <div class="form-row">
                    <div class="input">
                        <div class="label">Book author</div>
                        <select name="AuthorIDAdd" id="AuthorID" class="form-control">


                            @foreach ($AuthorID as $b)

                                <option value="{{ $b->id }}">{{$b->id}} - {{ $b->authorName }}</option>

                            @endforeach

                        </select>
                        <div class="select-icon">
                            <i class="fas fa-sort-down"></i>

                        </div>

                    </div>

                </div>


                <div class="form-row">
                    <div class="input">
                        <div class="label" style="margin-right: 5px;">Image</div>
                        <input class="form-control" type="file" id="bookImage" name="bookImageAdd">
                    </div>
                </div>

                <div class="form-row">
                    <input type="submit" value="Add" class="btn-login">
                </div>
            </form>
        </div>
    </div>
    <!--=============== add book modal end ===================-->

    <!--=============== edit book modal start ===================-->
    <div class="modal" id="editBookModal">
        <div class="profile-container">
            <div class="table-title border-bottom">
                <h1 class="font-white">Edit book</h1>
                <span class="modal-close"><i class="fas fa-times-circle"></i></span>

            </div>
            <form action="{{route('editBook')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="id" name="ID">
                <div class="form-row">
                    <div class="input">
                        <div class="label">Book name</div>
                        <input class="form-control" type="text" id="bookNameEdit" name="bookNameEdit" value="" required>
                    </div>
                </div>


                <div class="form-row">
                    <div class="input">
                        <div class="label">Book description</div>
                        <textarea class="form-control" id="bookDescriptionEdit" name="bookDescriptionEdit" rows="4" cols="50" required></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="input">
                        <div class="label">Book published date</div>
                        <input class="form-control" type="text" id="publishedDateEdit" name="publishedDateEdit" value="" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="input">
                        <div class="label">Book category</div>
                        <select name="categoryIDEdit" id="categoryIDEdit" class="form-control">

                            @foreach ($CategoryID as $c)

                                <option value="{{ $c->id }}">{{ $c->id }} - {{ $c->category }}</option>

                            @endforeach

                        </select>
                        <div class="select-icon">
                            <i class="fas fa-sort-down"></i>

                        </div>

                    </div>
                </div>

                <div class="form-row">
                    <div class="input">
                        <div class="label">Book author</div>
                        <select name="AuthorIDEdit" id="AuthorIDEdit" class="form-control">

                            @foreach ($AuthorID as $b)

                                <option value="{{ $b->id }}">{{$b->id}} - {{ $b->authorName }}</option>

                            @endforeach

                        </select>
                        <div class="select-icon">
                            <i class="fas fa-sort-down"></i>

                        </div>

                    </div>

                </div>


                <div class="form-row">
                    <div class="input">
                        <div class="label" style="margin-right: 5px;">Image</div>
                        <input class="form-control" type="file" id="bookImageEdit" name="bookImageEdit">
                    </div>
                </div>

                <div class="form-row">
                    <input type="submit" value="Edit" class="btn-login">
                </div>
            </form>
        </div>
    </div>
    <!--=============== edit book modal end ===================-->
    




@endsection
@section('datatables-javascript')
    <!--=============== data table javascript ===================-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <!--=============== responsive data table extension javascript ===================-->
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                responsive: true
            });

        })
    </script>

    <script>
        function getModal(rowid) {
            var id = document.getElementById(rowid).querySelector('input[name="bookID"]').value;
            var name = document.getElementById(rowid).querySelector('td[name="bookName"]').textContent;
            var category = document.getElementById(rowid).querySelector('input[name="cID"]').value;
            var author = document.getElementById(rowid).querySelector('input[name="aID"]').value;
            var desc = document.getElementById(rowid).querySelector('td[name="desc"]').textContent;
            var date = document.getElementById(rowid).querySelector('td[name="publishedDate"]').textContent;


            var editModal = document.getElementById('editBookModal');
            var bookName = document.getElementById('bookNameEdit');
            var bookDescription = document.getElementById('bookDescriptionEdit');
            var categoryID = document.getElementById('categoryIDEdit');
            var AuthorID = document.getElementById('AuthorIDEdit');
            var publishedDate = document.getElementById('publishedDateEdit');
            var inputID = document.getElementById('id');


            bookName.value = name;
            bookDescription.value = desc;
            categoryID.value = category;
            AuthorID.value = author;
            publishedDate.value = date;
            inputID.value = id;


            editModal.style.display = "flex";

        }
    </script>


@endsection
