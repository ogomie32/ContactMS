@extends('layout')

@section('content')
    <section>
        <h1>Frequently Contacted</h1>
        
        <table class="table pl-3 w-100 table-borderless table-hover">
            <thead>
                <tr class="border-bottom">
                    <th style="width: 20%">Name</th>
                    <th style="width: 20%">Email</th>
                    <th style="width: 20%">Image</th>
                    <th style="width: 15%">Phone Number</th>
                    <th style="width: 5%"><i class="material-icons" title="List Settings">more_vert</i></th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    
                <tr >
                        <td>
                            <a class="contact-bar" href="/contacts/{{ $contact->id }}">{{ $contact->name }}</a>
                        </td>
                        <td class="mt-3">{{ $contact->email }}</td>
                        <td class="mt-3">
                            @if($contact->image != null )
                            <img src="{{ url('storage/'.$contact->image) }}" 
                                        alt="Your image" 
                                        class="" 
                                        width="40">
                            @endif
                        </td>
                        <td>{{ $contact->tel }}</td>
                        <td class=" mr-3 d-flex justify-content-start" >
                                        
                            <div class="d-flex" style="cursor: pointer">
                                @if($contact->frequent_contacts == 0)
                                    <form method="POST" action="/favorite/{{ $contact->id }}" class="p-0">
                                        @csrf
                                        <button class="favorBtn" type="submit"><i class="material-icons">star_outline</i></button>
                                    </form>
                                @else
                                    <div>
                                        <a href="/unfavorite/{{ $contact->id }}">
                                            <i class="material-icons">star</i>
                                        </a>
                                    </div> 
                                @endif   
                            </div>
                            
                            <div><a href="/contacts/{{ $contact->id }}/edit"><i class="material-icons">edit</i></a></div>
                        </td>
                    </tr>

                @endforeach
                
            </tbody>
        </table>
    </section>

@endsection