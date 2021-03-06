@extends('layout')

@section('content')

    <div class="content">
        <div class=" contact-form mx-auto">
                <form method="POST" action="/contacts" enctype="multipart/form-data">
                    @csrf
                    <h5>Create Contact</h5>
                    <hr>
                    <div class="row ">
                        <div class="col-2  text-muted p-0 d-flexbox text-center">
                            <div class="row">
                                <div class="col-12">
                                    <div><i class="material-icons form-icon" style="font-size: 50px;" title="contacts-logo">account_circle</i></div>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-12">
                                    <div><i class="material-icons form-icon" style="font-size: 20px;" title="contacts-logo">mail_outline</i></div>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-12">
                                    <div><i class="material-icons form-icon" style="font-size: 20px;" title="contacts-logo">picture_in_picture</i></div>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-12">
                                    <div><i class="material-icons form-icon" style="font-size: 20px;" title="contacts-logo">call</i></div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="col-10 p-0">
                            <div class="row pb-2">
                                <div class="col-11">
                                    <div class="form-group ">
                                        <input
                                                type="text"
                                                id="name"
                                                name="name"
                                                placeholder="Name"
                                                class="form-control input-col @error('name') input-danger @enderror"
                                                >
                                    </div>
                                </div>
                                @error('name')
                                    <p class="is-danger">{{ $message }}</p>
                                @enderror
                                
                            </div>   
                            <div class="row pb-2">
                                <div class="col-11">
                                    <div class="form-group ">
                                        <input
                                                type="text"
                                                id="email"
                                                name="email"
                                                placeholder="Email"
                                                class="form-control input-col @error('name') input-danger @enderror"
                                               
                                                >
                                    </div>
                                </div>
                                @error('email')
                                    <p class="is-danger">{{ $message }}</p>
                                @enderror
                               
                            </div>   
                            <div class="row pb-2">
                                <div class="col-11">
                                    <div class="form-group d-flex">
                                        <input
                                                type="file"
                                                id="image"
                                                name="image"
                                                placeholder="Image"
                                                class="form-control bg-none input-col @error('image') input-danger @enderror"
                                                >
                                        {{-- <img src="/imgs/user-2.jpg" 
                                            alt="Your image" 
                                            class="" 
                                            width="40"> --}}
                                    </div>
                                     
                                </div>
                                @error('image')
                                    <p class="is-danger">{{ $message }}</p>
                                @enderror
                               
                            </div>   
                            <div class="row pb-2">
                                <div class="col-11">
                                    <div class="form-group">
                                        <input
                                                type="text"
                                                id="tel"
                                                name="tel"
                                                placeholder="Phone"
                                                class="form-control input-col @error('name') input-danger @enderror"
                                                >
                                    </div>
                                </div>
                                @error('tel')
                                    <p class="is-danger">{{ $message }}</p>
                                @enderror
                            </div>      
                        </div>
                    </div>
                    <hr class="m-0">
                    <div class=" d-flex justify-content-between my-3 mx-5">
                        <button class="btn form-btn" type="button">Show more</button>
                        <div class="d-flex">
                            <button class="btn form-btn mr-2" type="button" >Cancel</button>
                            <button class="btn form-btn" type="submit">Save</button>
                            {{-- <div class="text-muted ml-4 form-btn" type="submit">Save</div> --}}
                        </div>
                    </div>
                </form>
            </div>
    </div>

@endsection