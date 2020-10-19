@extends('layout')

@section('content')
<style>

    body {
        background-color: rgba(128, 0, 128, 0.041); 
    }
    .header-mail{
        text-align: center;
        padding: 40px 0;
        background-color: rgba(128, 0, 128, 0.341);
        color: #fff;
        margin-bottom: 20px;
    }
    .p-2 {
        color: rgb(53, 1, 53);
    }
    .btn-p {
        background-color: rgb(53, 1, 53);
    }
    
</style>
<body class="flex text-center justify-center">
    <div class="container-fluid m-0">
            <h3 class=" header-mail">Mail Form</h3>
        <div class="mail-box">
            <form 
            method="POST"
            action="/mail"
            class=" bg-white p-6 rounded shadow-md mx-auto"
            style="width: 300px">

            @csrf

                <div class="mb-3">
                    <label 
                        for="mail" 
                        class="block text-sm text-bold text-uppercase mb-1 mt-1"
                        >
                        Email Address
                    </label>
                    <input 
                        type="text" 
                        id="email" 
                        name="email" 
                        class=" w-full  py-1"
                        >
                    
                    @error('email') 
                        <div class="text-danger text-">{{ $message }}</div>
                    @enderror
                </div>
                <div><button type="submit" class="btn p-2 text-white py-1 w-50 rounded-pill btn-p">Email me</button></div>
            </form>
        </div>

        @if(session('sent_mail'))
            <div class="alert alert-dark mt-5 border-none">{{ session('sent_mail') }}</div>
        @endif
    </div>
</body>
@endsection