@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="table table-hover">
            <table class="table table-hover table-dark">
              <thead>
                <tr>
                  <th class="text-center">Dashboard</th>
                </tr>
              </thead>
              <tbody>
                <tr><td><a href="{{ route('register') }}" style="text-decoration:none;color:white;"><div style="height:100%;width:100%">Register New User <i class="fas fa-arrow-alt-circle-right"></i></div></a></td></tr>
                {{-- <tr><td><a href="{{ route('roles') }}" style="text-decoration:none;color:white;"><div style="height:100%;width:100%">Roles <i class="fas fa-arrow-alt-circle-right"></i></div></a></td></tr> --}}
                <tr><td><a href="{{ route('contact.list') }}" style="text-decoration:none;color:white;"><div style="height:100%;width:100%">Contacts <i class="fas fa-arrow-alt-circle-right"></i></div></a></td></tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
</div>
@endsection
