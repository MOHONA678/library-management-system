@extends('layouts.admin')

@section('title')
  {{ __('Manage Roles') }}
@endsection

@section('header')
  <div class="d-flex align-items-center justify-content-between mb-4">
    <h1 class="h3">{{ __('Manage Roles') }}</h1>
    <a href="" class="btn btn-primary">
      <i class="fas fa-plus"></i>
      <span class="ps-1">{{ __('Add new') }}</span>
    </a>
  </div>
@endsection

@section('content')
  <section class="row">
    <div class="col-12">
      <div class="card flex-fill">
        <div class="card-header">              
          <h5 class="card-title mb-0">{{ __('Roles DataTable') }}</h5>
        </div>
        <table class="table table-hover my-0 data-table">
          <thead>
            <tr>
              <th class="d-none d-xl-table-cell"></th>
              <th></th>
              <th class="d-none d-xl-table-cell"></th>
              <th></th>
              <th class="d-none d-md-table-cell"></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @forelse ($roles as $k => $role)
              <tr>
                <td class="d-none d-xl-table-cell"></td>
                <td></td>
                <td class="d-none d-xl-table-cell"></td>
                <td>
                  @if ($role->status === 1)
                    <span class="badge bg-success">Enable</span>
                  @elseif ($role->status === 0)
                    <span class="badge bg-danger">Disable</span>
                  @else
                    <span class="badge bg-secondary">Pending</span>
                  @endif
                </td>
                <td class="d-none d-md-table-cell"></td>
                <td width="90px">
                  <form action="" method="post">
                    @csrf
                    @method("delete")
                    <a href="" class="btn btn-outline-primary btn-sm">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-outline-danger btn-sm">
                      <i class="fas fa-trash-alt"></i>
                    </a>
                  </form>
                </td>
              </tr>
            @empty
            <tr>
              <td colspan="6" class="text-center">
                {{ __('No data found') }}
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </section>
@endsection

@section('script')
@endsection