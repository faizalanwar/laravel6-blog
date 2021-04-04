@extends('layouts.app')
@section('content')

<h1 class="h3 mb-3">Profile</h1>

<div class="row">
    <div class="col-md-4 col-xl-12">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="card-title mb-0">Profile Details</h5>
            </div>
            <div class="card-body text-center ">
                
                <img src="{{$profile->picture !=null ? asset('img/'.$user->getPicture()):$user->getGravatar()}}" alt="Christina Mason" class="  img-fluid rounded-circle mb-2"
                    width="128" height="128">
                <h2 class="mt-4">{{$user->name}}</h2>

                <div>
                    <a class="btn btn-primary btn-sm rounded" href="#" ><i class="align-middle" data-feather="star"></i> {{$user->role}}</a>
                </div>
                   <div class="mt-5">
                    <i class="align-middle" data-feather="mail"></i> {{$user->email}} &nbsp; &nbsp;
                    <i class="align-middle" data-feather="home"></i> {{$profile->facebook}} &nbsp; &nbsp;
                    <i class="align-middle" data-feather="github"></i> {{$profile->twitter}}
                   
                   </div>
                </ul>
            </div>
           
        </div>
    </div>

</div>


@endsection