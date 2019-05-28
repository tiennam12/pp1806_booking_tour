@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit tour') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('tours.update', ['tour' => $tour->id]) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="category_id" class="col-md-4 col-form-label text-md-right">{{ __('Category id') }}</label>
                            <div class="col-md-6">
                                <input id="category_id" type="text" value="{{ old('category_id', $tour->category_id) }}" class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}" name="category_id" required autofocus>
                                @error('category_id')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tour_name" class="col-md-4 col-form-label text-md-right">{{ __('Tour name') }}</label>
                            <div class="col-md-6">
                                <input id="tour_name" type="text" value="{{ old('tour_name', $tour->tour_name) }}" class="form-control{{ $errors->has('tour_name') ? ' is-invalid' : '' }}" name="tour_name" required autofocus>
                                @error('tour_name')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="text" value="{{ old('price', $tour->price) }}" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" required>
                                @error('price')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('image') }}</label>
                            <div class="col-md-6">
                                <input id="image" type="file" value="{{ old('image', $tour->image) }}" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" required>
                                @error('image')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>
                            <div class="col-md-6">
                                <input id="quantity" type="text" value="{{ old('quantity', $tour->quantity) }}" class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}" name="quantity" required>
                                @error('quantity')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="start" class="col-md-4 col-form-label text-md-right">{{ __('Start') }}</label>
                            <div class="col-md-6">
                                <input id="start" type="text" value="{{ old('start', $tour->start) }}" class="form-control{{ $errors->has('start') ? ' is-invalid' : '' }}" name="start" required>
                                @error('start')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="avg_rating" class="col-md-4 col-form-label text-md-right">{{ __('Rating') }}</label>
                                <div class="col-md-6">
                                    <input id="avg_rating" type="text" value="{{ old('avg_rating', $tour->avg_rating) }}" class="form-control{{ $errors->has('avg_rating') ? ' is-invalid' : '' }}" name="avg_rating" required>
                                    @error('avg_rating')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="discount" class="col-md-4 col-form-label text-md-right">{{ __('Discount') }}</label>
                                <div class="col-md-6">
                                    <input id="discount" type="text" value="{{ old('discount', $tour->discount) }}" class="form-control{{ $errors->has('discount') ? ' is-invalid' : '' }}" name="discount" required>
                                    @error('discount')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="avg_rating" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                            <textarea name="description" value="{{ old('description', $tour->description) }}" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" id="description"></textarea>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
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