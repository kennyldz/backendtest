@extends('front.layouts.master')
@section('TitlePage',"Person View")
@section('content')
    <div class="page-wrapper" style="margin-top:-4%">
        <!-- Person View -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1 text-black-50">Person View</h3>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3  col-md-12">
                    <div class="card text-center bg-white">
                            <strong style="font-size: 4rem" >{{$Person->id}}</strong>
                        <p class="small">Person No</p>
                    </div>
                    <div class="card text-center">
                        <p class="small" >Created Date</p>
                        <strong class="text-black-50 small" >{{$Person->created_at}}</strong>
                        <hr>
                        <p class="small" >Updated Date</p>
                        <strong class="text-black-50 small"  >{{$Person->updated_at}}</strong>
                    </div>
                </div>

                <!--person ınfo -->
                <div class="col-lg-9 col-md-12">
                    <!--Address Add -->
                    <div class="card">
                            <a href="{{route('address.show',$Person->id)}}"  class="btn btn-default btn-sm form-control text-black-50"  ><strong>Add Address</strong></a>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{route('person.update',$Person->id)}}">
                                @method('put')
                                @csrf
                            <table class="table table-sm border-0 small">
                                <tr>
                                    <td colspan="2"><input type="text" name="name" value="{{$Person->name}}" maxlength="30" class="form-control form-control-sm "></td>
                                </tr>
                                <tr class="text-center">
                                    <td ><input type="date" name="birthday"  class="form-control form-control-sm border-0"></td>
                                    <td><input type="text" name="birthdaycurrent" value="{{$Person->birthday}}" hidden>{{$Person->birthday}}</td>
                                </tr>
                                <tr class="text-center">
                                    <td >
                                        <select class="form-control form-control-sm border-0" name="gender">
                                            <option value="{{$Person->gender}}">Change Gender</option>
                                            @if($Person->gender=="male")
                                                <option value="female">Female</option>
                                            @else
                                                <option value="male">Male</option>
                                            @endif
                                        </select>
                                    </td>
                                    <td>{{$Person->gender}}</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <button type="submit" class="btn btn-default text-center btn-sm form-control"  name="update"><strong>Update</strong></button>
                                    </td>
                                </tr>
                            </table>
                            </form>
                        </div>

                    </div>

                    <!--Address -->
                    @foreach($Address as $adres)
                    <div class="card">
                        <div class="row">

                            <div class="col-lg-2 col-md-12">
                                <div class="card text-center ">
                                 <div class="card-body bg-banner">
                                    <strong style="font-size: 2rem">{{$adres->id}}</strong>

                                 </div>
                                    <a href="{{route('address.edit',$adres->id)}}" class="btn btn-secondary btn-sm"><i class="fa fa-edit text-white"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-10 col-md-12">

                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-sm small">
                                            <tr>
                                                <td colspan="2" >{{$adres->address}}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">{{$adres->post_code}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{$adres->city_name}}</td>
                                                <td>
                                                    {{$adres->country_name}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Created Date: {{$adres->created_at}}</td>
                                                <td>Updated Date: {{$adres->updated_at}}</td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    @endforeach
                    <div class="pagination flex-m flex-w p-t-26">
                        {{$Address->links("pagination::bootstrap-4")}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
