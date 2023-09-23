@extends('layouts.admin')

@section('title')
  {{ __('Manage Roles') }}
@endsection

@section('header')
  <div class="d-flex align-items-center justify-content-between mb-4">
    <h1 class="h3">{{ __('Manage User') }}</h1>
    <a href="{{route('user.create')}}" class="btn btn-primary">
      <i class="fas fa-plus"></i>
      <span class="ps-1">{{ __('Add new') }}</span>
    </a>
  </div>
@endsection

@section('content')
  <section class="row">
    <div class="col-12">
      <div class="card flex-fill">
        <div class="card-header bg-white">              
          <h5 class="card-title mb-0">{{ __('User DataTable') }}</h5>
        </div>
        <table class="table table-hover my-0 data-table">
          <thead>
            <tr>
              <th class="d-none d-xl-table-cell">{{ __('SL') }}</th>
              <th>{{ __('Name') }}</th>
              <th class="d-none d-xl-table-cell">{{ __('Email') }}</th>
              <th class="d-none d-xl-table-cell">{{ __('Phone') }}</th>
              <th>{{ __('User Role') }}</th>
              <th>{{ __('Status') }}</th>
              <th width="100px" class="text-center">{{ __('Action') }}</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($users as $k => $user)
              <tr>
                <td class="d-none d-xl-table-cell">{{ $k + 1 }}</td>
                <td>
                  <strong>{{ $user->name }}</strong>
                </td>
                <td class="d-none d-xl-table-cell">
                    <strong>{{ $user->email }}</strong>
                </td>
                <td class="d-none d-xl-table-cell">{{$user->phone}}</td>
                <td>
                    <strong class="badge bg-info">{{ $user->role->title }}</strong>
                </td>
                <td>
                  @if ($user->status === 1)
                    <span class="badge bg-success">Enable</span>
                  @elseif ($user->status === 0)
                    <span class="badge bg-danger">Disable</span>
                  @else
                    <span class="badge bg-secondary">Pending</span>
                  @endif
                </td>
                
                <td class="d-flex" width="120px">
                  <a href="{{route('user.edit', $user->id)  }}" class="btn btn-outline-primary btn-sm mr-1">
                      <i class="fas fa-edit"></i>
                    </a>
                  <form action="{{route('user.destroy', $user->id)  }}" method="post">
                    @csrf
                    @method("delete")
                    
                    <a href="" class="btn btn-outline-danger btn-sm" onclick="del(event, this)" >
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