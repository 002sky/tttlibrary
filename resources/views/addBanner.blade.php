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
                <h1>Banner</h1>
                <button class="modal-open green-bg" data-modal="addNewBannerModal"><i class="fas fa-plus-circle"></i>&nbsp;Add
                    Banner</button>
            </div>
            <div class="header_fixed">
                <table class="table display responsive" id="dataTable">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Banner status</th>
                            <th>Banner image</th>
                            <th>Book name</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>

                        @if (!empty($allBanner))

                            @foreach ($allBanner as $banner)

                                <tr id="row{{ $loop->index }}">
                                    <input type="hidden" name="bannerID" value="{{ $banner->id }}">

                                    <td>{{ $loop->index + 1 }}</td>
                                    <td name="status">{{ $banner->status }}</td>
                                    <td>{{ $banner->bannerImage }}</td>
                                    <input type="hidden" name="bookID" value="{{ $banner->bookID }}">
                                    <td name="bkName">{{ $banner->bkName }}</td>

                                    <td>
                                        <button class="yellow-bg"
                                            onclick="getModal('row{{ $loop->index }}')">Edit</button>
                                        <a href="{{ route('DeleteBanner', ['id' => $banner->id]) }}"
                                            onClick="return confirm('Are you sure want to delete this banner?')">Delete</a>
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
        <h3>Add New book</h3>

        <form action="{{route('addBanner')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="status"> Banner Status</label>
                <br>
                <input class=" custom-radio" type="radio" id="status" name="status" value='0'required>
                <label for="">Hide</label> 
                <input class="custom-radio" type="radio" id="status" name="status" value='1' required>
                <label for="">Show</label><br>

                <label for="bookID"> Book </label>
                <select name="bookID" id="bookID" class="form-control">

                    @foreach ($BookID as $b)

                    <option value="{{$b->id}}">{{$b->bookName}}</option>
    
                    @endforeach

                </select>


                <label for="bannerImage"> Image</label>
                <input class="form-control" type="file" id="bannerImage" name="bannerImage">

                <button class="btn btn-primary" type="submit">Add New</button>
            </div>
        </form>
        <br><br>



    </div>
    <div class="col-sm-3"></div>

</div> --}}

    <!--=============== add banner modal start ===================-->

    <div class="modal" id="addNewBannerModal">
        <div class="profile-container">
            <div class="table-title border-bottom">
                <h1 class="font-white">Add banner</h1>
                <span class="modal-close"><i class="fas fa-times-circle"></i></span>

            </div>
            <form action="{{ route('addBanner') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="input">
                        <div class="label">Status</div>
                        <div class="radio-group">
                            <div class="label">
                                <label for="">Hide</label>

                            </div>
                            <input class="w-10" type="radio" id="statusEditFalse" name="statusAdd" value='0'
                                required>
                        </div>
                        <div class="radio-group">
                            <div class="label">
                                <label for="">Show</label>

                            </div>
                            <input class="w-10" type="radio" id="statusEditTrue" name="statusAdd" value='1'
                                required>
                        </div>
                    </div>
                </div>


                <div class="form-row">
                    <div class="input">
                        <div class="label">Book name</div>
                        <select name="bookIDAdd" id="bookIDAdd" class="form-control">

                            @foreach ($BookID as $b)

                                <option value="{{ $b->id }}">{{ $b->id }} - {{ $b->bookName }}</option>

                            @endforeach

                        </select>
                        <div class="select-icon">
                            <i class="fas fa-sort-down"></i>

                        </div>

                    </div>
                </div>

                <div class="form-row">
                    <div class="input">
                        <div class="label">Banner image</div>
                        <input class="form-control" type="file" id="bannerImageAdd" name="bannerImageAdd">
                    </div>
                </div>

                <div class="form-row">
                    <input type="submit" value="Add" class="btn-login">
                </div>
            </form>
        </div>
    </div>
    <!--=============== add banner modal end ===================-->

    <!--=============== edit banner modal start ===================-->

    <div class="modal" id="editBannerModal">
        <div class="profile-container">
            <div class="table-title border-bottom">
                <h1 class="font-white">Edit banner</h1>
                <span class="modal-close"><i class="fas fa-times-circle"></i></span>

            </div>
            <form action="{{ route('editBanner') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="id" name="BannerID">

                <div class="form-row">
                    <div class="input">
                        <div class="label">Status</div>
                        <div class="radio-group">
                            <div class="label">
                                <label for="">Hide</label>

                            </div>
                            <input class="w-10" type="radio" id="statusEditFalse" name="statusEdit" value='0'
                                required>
                        </div>
                        <div class="radio-group">
                            <div class="label">
                                <label for="">Show</label>

                            </div>
                            <input class="w-10" type="radio" id="statusEditTrue" name="statusEdit" value='1'
                                required>
                        </div>

                    </div>
                </div>


                <div class="form-row">
                    <div class="input">
                        <div class="label">Book name</div>
                        <select name="bookIDEdit" id="bookIDEdit" class="form-control">

                            @foreach ($BookID as $b)

                                <option value="{{ $b->id }}">{{ $b->id }} - {{ $b->bookName }}
                                </option>

                            @endforeach

                        </select>
                        <div class="select-icon">
                            <i class="fas fa-sort-down"></i>

                        </div>

                    </div>
                </div>

                <div class="form-row">
                    <div class="input">
                        <div class="label">Banner image</div>
                        <input class="form-control" type="file" id="bannerImageEdit" name="bannerImageEdit">
                    </div>
                </div>

                <div class="form-row">
                    <input type="submit" value="Edit" class="btn-login">
                </div>
            </form>
        </div>
    </div>
    <!--=============== edit banner modal end ===================-->

    <!--=============== preview banner section start ===================-->

    <div class="row">
        <div class="col-100">
            <div class="table-title" style="margin-top: 30px;">
                <h1>Banner preview section</h1>
            </div>
            <div class="col-100" style="margin-top:0;">
                <div class="carousel" id="home" style="margin-top:0;padding-top:0;">
                    <div class="carousel-01 owl-carousel owl-theme owl-loaded owl-drag">
                        @foreach ($display as $b)
                            <div class="slide"
                                style="background-image:url('{{ asset('images') }}/{{ $b->bannerImage }}')">

                                <div class="slide-content">
                                    <div class="carousel-text">
                                        <h3>By: {{ $b->aName }}</h3>
                                        <h1>{{ $b->bkName }}</h1>
                                        <h2>{{ $b->desc }}</h2>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=============== preview banner section end ===================-->


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
            var id = document.getElementById(rowid).querySelector('input[name="bannerID"]').value;
            var bkID = document.getElementById(rowid).querySelector('input[name="bookID"]').value;
            var name = document.getElementById(rowid).querySelector('td[name="bkName"]').textContent;
            var status = document.getElementById(rowid).querySelector('td[name="status"]').textContent;

            var editModal = document.getElementById('editBannerModal');
            var bookID = document.getElementById('bookIDEdit');
            var inputID = document.getElementById('id');

            var rbTrue = document.getElementById('editBannerModal').querySelector('input[id="statusEditTrue"]');
            var rbFalse = document.getElementById('editBannerModal').querySelector('input[id="statusEditFalse"]');


            bookID.value = bkID;

            inputID.value = id;
            if (status == 0) {
                rbFalse.checked = true;
            } else {
                rbTrue.checked = true;
            }

            editModal.style.display = "flex";
        }
    </script>
@endsection
