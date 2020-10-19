
@extends('layout')

@section('content')

<div class=" search-row bg-light"> 
        <div class="d-flex nameBox">
            <div class="fs">Contacts Details</div>
            <div class="d-flex text-muted">
                <div><i class="material-icons pl-2">star</i></div>
                <div><i class="material-icons pl-2">more_vert</i></div>
                <div style="cursor: pointer;"><i class="material-icons pl-2" @click.prevent="del">clear</i></div> 
            </div>
        </div>
        <hr>

        @if($contact->image != null)
        <div style="width: 100px; height: 60px; object-fit:cover; border: 1ps solid red">
            <img src="{{ url('storage/'.$contact->image) }}" alt="My Image">
        </div>
        @endif

        <div class="row m-2" >
            <div class="col-12">
                <div class="pl-3">{{ $contact->name}}</div>
            </div>
            <div class="col-12">
                <div class="row m-2 fs-14">
                    <div class="col-1">
                        <i class="material-icons text-muted fs pr-0 text-right">call_outline</i>
                    </div>
                    <div class="col-8 d-flex pl-4">
                        <div class="text-primary">{{$contact->tel}}</div>
                    </div>
                </div>
                <div class="d-flex">
                    <i class="material-icons text-muted fs ml-2 pl-3 text-right">mail_outline</i>
                    <div class="text-primary pl-5">{{$contact->email}}</div>
                </div>
            </div>
        </div>
            
    </div>

    @endsection