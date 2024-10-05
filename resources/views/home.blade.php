@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">Update Price</div>
                    <div class="card-body">
                        <form role="form" method="POST" action="{{ route('update-price') }}">
                            @csrf
                            <div class="form-group">
                                <select id="inputId" name="id" class="form-control">
                                    <option value="0" hidden>Choose Type</option>
                                    <option value="1">Suite</option>
                                    <option value="2">Double Room</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input id="inputPrice" name="price" type="text" class="form-control" placeholder="Input Price">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary w-100">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
