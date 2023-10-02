@extends('layouts.admin')

@section('title')
    {{ __('Add New Author') }}
@endsection

@section('header')
  <h1 class="h3 mb-3">Dashboard</h1>
@endsection

@section('content')
  <section class="row">
    <div class="col-12 d-flex align-items-center justify-content-center">
      <div class="col-6">
        <form action="{{ route('author.store')  }}" method="post">
          @csrf
          <div class="card flex-fill">
            <div class="card-header bg-white">
              <h5 class="card-title mb-0">{{ __('Create New Author') }}</h5>
            </div>
            <div class="card-body py-3">
              <div class="row g-3">
                <div class="col-12">
                  <input type="text" name="name" class="form-control my-2" id="title" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required />
                </div>
                <div class="col-12">
                  <textarea name="description" class="form-control my-2" id="description" cols="30" rows="10" placeholder="{{ __('Type details here ...') }}">{{ old('description') }}</textarea>
                </div>
                <div class="col-12">
                  <select name="status" class="form-control my-2" id="status">
                    <option value="">{{ __('-- Choose Status --') }}</option>
                    <option value="1">{{ __('Enable') }}</option>
                    <option value="0">{{ __('Disable') }}</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="card-footer bg-white">
              <div class="row">
                <div class="col-6 d-grid">
                  <a href="{{ route('author.index')  }}" class="btn btn-secondary btn-block" >
                    <i class="align-middle me-1" data-feather="arrow-left"></i>
                    <span class="ps-1">{{ __('Discard') }}</span>
                  </a>
                </div>
                <div class="col-6 d-grid">
                  <button type="submit" class="btn btn-secondary btn-block" >
                    <i class="align-middle me-1" data-feather="plus"></i>
                    <span class="ps-1">{{ __('Create New') }}</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    {{-- <div class="col-5">
      @include('partials.error')
    </div> --}}
  </section>
@endsection

@section('script')
@endsection