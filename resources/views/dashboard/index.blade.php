@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Writer Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-sm-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-4">#Users</h5>
            <h1 class="mt-1 mb-3">{{$nbusers}}<small>postingan</small></h1>
            <div class="mb-1">
                <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                <span class="text-muted">Since last week</span>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-4">#Users</h5>
            <h1 class="mt-1 mb-3">{{$nbposts}}<small>postingan</small></h1>
            <div class="mb-1">
                <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                <span class="text-muted">Since last week</span>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-4">#Users</h5>
            <h1 class="mt-1 mb-3">{{$nbcategory}}<small>postingan</small></h1>
            <div class="mb-1">
                <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                <span class="text-muted">Since last week</span>
            </div>
        </div>
    </div>
</div>

@endsection
