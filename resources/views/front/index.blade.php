@extends('front.layouts.master')
@section('TitlePage','Person ')
@section('content')
    <div class="page-wrapper" style="margin-top:-4%">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Person List</h3>
                    <div class="d-flex align-items-center">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="card-group">
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-dark w-100 mb-1 font-weight-medium">{{count($Persons)}}</h2>
                                </div>
                               <h6 class="badge badge-warning font-weight-normal mb-0 w-100 ">Total Person</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="user"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <h2 class="text-dark mb-1 w-100  font-weight-medium"><sup class="set-doller"></sup>{{$Address}}</h2>
                               <h6 class="badge badge-warning font-weight-normal mb-0 w-100  ">Total Address</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="database"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a href="{{route('person.create')}}">
                    <div class="card-body">
                        <div class="d-flex text-center d-lg-flex d-md-block align-items-center">
                                <h5 class="text-black-50 mt-3 mb-1 font-weight-medium">New Person Create</h5>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="plus"></i></span>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>

            <!--Person List -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h4 class="card-title text-black-50">Persons</h4>
                                <div class="ml-auto">
                                </div>
                            </div>

                            <div class=" table table-responsive-lg">
                                <table id="persons" class="table  table-bordered  small">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Birthday</th>
                                        <th>Created Date</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($Persons as $person)
                                        <tr>
                                            <td>{{$person->id}}</td>
                                            <td>{{$person->name}}</td>
                                            <td>{{$person->gender}}</td>
                                            <td>{{$person->birthday}}</td>
                                            <td>{{$person->created_at}}</td>
                                            <td class="text-center" title="View"><a href="{{route('person.show',$person->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye text-white"></i></a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
@endsection
@section('js')
    <script >
        $(document).ready(function() {
            $('#persons').DataTable();
        } );
    </script>
    <script src="{{asset('front/')}}/src/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('front/')}}/src/dist/js/pages/datatable/datatable-basic.init.js"></script>
@endsection
