@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div>
                    {{ session('mssg') }}
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in....
                

                    @if ( auth()->user()->DESIGNATION == 'CSC')
                        <p><a href = "/csc">CONTINUE  WITH RENEWAL PROCESS</a></p>
                    @elseif ( auth()->user()->DESIGNATION == 'FORWARDER')
                        <p><a href = "/forwarder">CONTINUE TO VERIFY</a> </p>
                    @elseif ( auth()->user()->DESIGNATION == 'ADC')
                        <p><a href = "/officer">CONTINUE FOR VERIFICATION</a> </p> 
                    @endif
                    </div >
             
            </div>
        </div>
    </div>
</div>
@endsection
