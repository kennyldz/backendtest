@extends('front.layouts.master')
@section('TitlePage','Person Lists')
@section('content')
    <div class="page-wrapper" style="margin-top:-4%">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center ">
                    <h3 class="page-title text-truncate text-black-50 font-weight-medium mb-1">Persons</h3>
                    <div class="d-flex align-items-center">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
                <div class="card p-2 text-right bg-banner">
                    <a href="{{route('person.create')}}">
                       <span class="opacity-7 text-muted "> <h5 class="  font-weight-medium"><i data-feather="plus"></i> New Person Create</h5></span>
                    </a>
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
