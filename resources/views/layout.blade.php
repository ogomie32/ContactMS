<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            /* @import 'variables'; */
            html, body {
                background-color: rgba(128, 0, 128, 0.041);
                color: #636b6f;
                color: rgb(53, 1, 53);
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            /* .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            } */

            /* .position-ref {
                position: relative;
            } */

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                margin: 20rem auto;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            /* SEARCH */

            .search {
                flex: 0 0 30%;

                display: flex;
                justify-content: center;
                align-items: center;
            }

            .search__input {
                width: 80%;
                background-color: rgb(201, 197, 197);
                border-radius: 80px;
                padding: .4rem 2rem;
                border: none;
                transition: all .2s;
                margin-right: -3rem;
            }

            .search__input:focus {
                outline: none;
                width: 100%;
                background-color: rgb(233, 227, 227);
            }

            .search__input::-webkit-input-placeholder {
                font-weight: 100;
                color: rgb(235, 231, 231);
            }
            .search__icon {
                height: 2rem;
                width: 2rem;
                fill: rgb(97, 95, 95);
            }

            /* HEADER */
            .header {
                font-size: 1.4rem;
                height: 3.5rem;
                border-bottom: 1px solid rgb(201, 197, 197);

                align-items: center;
                background-color: rgba(65, 2, 65, 0.945);
                display: flex;
                justify-content: space-between;
            }
            .contact-nav {
                font-size: 1rem;
                list-style: none;

                align-self: stretch;
                display: flex;
                justify-content: center;

                margin-bottom: 0px;
                align-items: center;
            }
            .contact-nav > * {
                padding: 0 2rem;
                cursor: pointer;
                height: 100%;
                display: flex;
                align-items: center;
            }

            .contact-nav__item {
                position: relative;
            }
            .contact-nav__item::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 1px;
                background-color: rgb(53, 1, 53);
                transform: scaleY(0);
                transition: transform .2s,
                            width .4s cubic-bezier(1,0,0,1) .2s,
                            background-color .1s;
            }
            .contact-nav__item:hover::before,
            .contact-nav__item--active::before {
                transform: scaleY(1);
                width: 100%;
            }

            .contact-nav__item:active::before {
            background-color: rgb(192, 6, 192);
            }

            .contact-nav__link:link,
            .contact-nav__link:visited {
                text-decoration: none;
                color: rgb(233, 227, 227);
                text-transform: uppercase;
                padding: .5rem 1rem;

                display: flex;
                align-items: center;
                position: relative;
                z-index: 10;

            }
            .contact-view {
                background-color: #fff;
                flex: 1;
            }
            /* INDEX */
            .contact-bar:link,
            .contact-bar:visited {
                text-decoration: none;
                color: rgb(53, 1, 53);
            }
            .name-icons {
                display: flex;
                align-items: center;
            }
            .contact-circle {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background: darkgreen;
                color: white;
                display: inline-flex;
                justify-content: center;
                align-items: center; 
                margin-right: 10px;
            }
            .contact-circle.active {
                visibility: hidden;
            }
            .hidden-icons.active{
                visibility: hidden;
            }
            .bg-col {
                background-color: rgba(65, 2, 65, 0.945);
            }
            /* TABLE */
            thead {
                color: rgb(53, 1, 53);
            }
            .star-icon {
                color: white;
            }
            /* SHOW */
            .search-row {
                width: 50rem;
                margin: 15rem auto;
                color: rgb(94, 92, 92);
            }
            .nameBox {
                display: flex;
                justify-content: space-between;
                padding: 20px 10px;
                font-size: 22px;
            }
            /* CREATE */
            .contact-form {
                border-radius: 20px;
                width: 50%;
                margin-top: 100px;
                background-color: #fff;
            }
            .form-icon {
                cursor: pointer;
            }
            form {
                padding: 20px;
            }
            .form-btn {
                background-color: rgba(128, 0, 128, 0.091);
                color: rgb(53, 1, 53);
            }
            .pay-btn {
                color: rgb(53, 1, 53);
                background-color: #fff;
            }
            .pay-btn:hover {
                color: #fff;
                background-color: rgb(53, 1, 53);
            }
            .input-col {
                border: none;
                padding: 15px;
                background-color: rgba(128, 0, 128, 0.091);
            }
            .input-col::-webkit-input-placeholder {
                font-weight: 100;
                color: rgb(53, 1, 53);;
            }
            i {
                color: rgb(53, 1, 53);
            }
            .is-danger {
                color: red;
                font-size: 11px;
                margin-left: 13px;
                
            }
            .input-danger {
                border: 1px solid red;
            }
            .img-round {
                width: 50px;
                border-radius: 50%;

            }   
            .favorBtn {
                background: none;
                border: none;
                outline: none;
                padding: 0;
            }
        </style>
    </head>
    <body>
        <div class="container-stretch">
            <div class="full-height">
                <header class="header">
                    <div><i class="material-icons text-white ml-2" style="font-size: 50px;">person_outline</i></div>
                    <form class="search">
                            <input type="text" class="search__input" placeholder="Search Contacts">
                            <div><i class="material-icons">search</i></div>
                        </form>
                    <nav class="contactbar">
                        <ul class="contact-nav">
                            {{-- <li class="contact-nav__item  {{ Request::path() === '/' ? 'contact-nav__item--active' : '' }}">
                                <a href="/" class="contact-nav__link">
                                    <span>Home</span>
                                </a>
                            </li> --}}
                            <li class="contact-nav__item {{ Request::path() === 'contacts/create' ? 'contact-nav__item--active' : '' }}">
                                <a href="/contacts/create" class="contact-nav__link">
                                    <span>Create Contact</span>
                                </a>
                            </li>
                            <li class="contact-nav__item {{ Request::path() === 'contacts' ? 'contact-nav__item--active' : '' }}">
                                <a href="/contacts" class="contact-nav__link">
                                    <span>Contacts</span>
                                </a>
                            </li>
                            <li class="contact-nav__item {{ Request::path() === 'favorite' ? 'contact-nav__item--active' : '' }}">
                                <a href="/favorite" class="contact-nav__link">
                                    <span>Frequently Contacted</span>
                                </a>
                            </li>
                            <li class="contact-nav__item {{ Request::path() === 'help' ? 'contact-nav__item--active' : '' }}">
                                <a href="/mail" class="contact-nav__link">
                                    <span>Send mail</span>
                                </a>
                            </li>
                            <li class="contact-nav__item {{ Request::path() === 'payments/create' ? 'contact-nav__item--active' : '' }}">
                                <a href="/payments/create" class="contact-nav__link">
                                    <span>Pay</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </header>

                @yield('content')
            </div>
        </div>
        
    </body>
</html>
