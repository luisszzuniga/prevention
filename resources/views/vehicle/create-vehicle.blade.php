@extends('layouts.layout')
@section('title','new vehicle')



@section('content')
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">Créer un véhicule</div>--}}

{{--                    <div class="card-body">--}}
{{--                        @if ($errors->any())--}}
{{--                            <div class="alert alert-danger">--}}
{{--                                <ul>--}}
{{--                                    @foreach ($errors->all() as $error)--}}
{{--                                        <li>{{ $error }}</li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                        <form class="form-vehicle" method="POST" action="{{ route('vehicles.store') }}">--}}
{{--                            @csrf--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="name" class="col-md-4 col-form-label text-md-right">Nom</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="name" type="text"--}}
{{--                                           class="form-control @error('name') is-invalid @enderror" name="name"--}}
{{--                                           value="{{ old('name') }}" required autofocus>--}}


{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="brand" class="col-md-4 col-form-label text-md-right">Marque</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="brand" type="text"--}}
{{--                                           class="form-control @error('brand') is-invalid @enderror" name="brand"--}}
{{--                                           value="{{ old('brand') }}" required autofocus>--}}


{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="license_plate" class="col-md-4 col-form-label text-md-right">Plaque--}}
{{--                                    d'immatriculation</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="license_plate" type="text"--}}
{{--                                           class="form-control @error('license_plate') is-invalid @enderror"--}}
{{--                                           name="license_plate" value="{{ old('license_plate') }}" required autofocus>--}}


{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group row">--}}
{{--                                <label for="type" class="col-md-4 col-form-label text-md-right">Type</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="type" type="text"--}}
{{--                                           class="form-control @error('type') is-invalid @enderror" name="type"--}}
{{--                                           value="{{ old('type') }}" required autofocus>--}}


{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <button type="submit" class="btn btn-primary">Créer</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


<div id="app">
    <Vehicles></Vehicles>
</div>

@endsection
