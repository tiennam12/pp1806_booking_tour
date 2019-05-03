@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Tour') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('tours.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="category_id" class="col-md-4 col-form-label text-md-right">{{ __('Category id') }}</label>

                            <div class="col-md-6">
                                <input id="category_id" type="text" class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}" name="category_id" required autofocus>

                                @if ($errors->has('category_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tour_name" class="col-md-4 col-form-label text-md-right">{{ __('Tour name') }}</label>

                            <div class="col-md-6">
                                <input id="tour_name" type="text" class="form-control{{ $errors->has('tour_name') ? ' is-invalid' : '' }}" name="tour_name" required autofocus>

                                @if ($errors->has('tour_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tour_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" required>

                                @if ($errors->has('price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('image') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" required>

                                @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>
                            <div class="col-md-6">
                                <input id="quantity" type="text" class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}" name="quantity" required>

                                @if ($errors->has('quantity'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="start" class="col-md-4 col-form-label text-md-right">{{ __('Start') }}</label>
                            <div class="col-md-6">
                                <input id="start" type="text" class="form-control{{ $errors->has('start') ? ' is-invalid' : '' }}" name="start" required>

                                @if ($errors->has('start'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('start') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="avg_rating" class="col-md-4 col-form-label text-md-right">{{ __('Rating') }}</label>
                                <div class="col-md-6">
                                    <input id="avg_rating" type="text" class="form-control{{ $errors->has('avg_rating') ? ' is-invalid' : '' }}" name="avg_rating" required>
                                    @if ($errors->has('avg_rating'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('avg_rating') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="discount" class="col-md-4 col-form-label text-md-right">{{ __('Discount') }}</label>
                                <div class="col-md-6">
                                    <input id="discount" type="text" class="form-control{{ $errors->has('discount') ? ' is-invalid' : '' }}" name="discount" required>
                                    @if ($errors->has('discount'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('discount') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="avg_rating" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                            <textarea name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" id="description"></textarea>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection