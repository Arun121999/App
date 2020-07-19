@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Record</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{old('name', $member->name)}}">
 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{old('email', $member->email)}}">
 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{old('email', $member->email)}}">
 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"> Select Role</label>

                            <div class="col-md-6">
                                 <select class="form-control" name="role">
                                      <option value="">--Select Role--</option>
                                      <option value="admin" @if (old('role',$member->role) == "admin") {{ 'selected' }} @endif>Admin</option>
                                      <option value="member" @if (old('role',$member->role) =="member") {{ 'selected' }} @endif>User</option>
                                </select>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
