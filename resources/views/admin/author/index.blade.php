@extends('layouts.admin')

@section('title')
  {{ __('Manage Author') }}
@endsection

@section('header')
  <div class="d-flex align-items-center justify-content-between mb-4">
    <h1 class="h3">{{ __('Manage Author') }}</h1>
    <a href="{{route('author.create')}}" class="btn btn-primary">
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
          <h5 class="card-title mb-0">{{ __('Autor DataTable') }}</h5>
        </div>
        <table class="table table-hover my-0 data-table">
          <thead>
            <tr>
              <th class="d-none d-xl-table-cell">{{ __('SL') }}</th>
              <th>{{ __('Author Name') }}</th>
              <th class="d-none d-xl-table-cell">{{ __('Description') }}</th>
              <th>{{ __('Status') }}</th>
              <th width="100px" class="text-center">{{ __('Action') }}</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($authors as $k => $author)
              <tr>
                <td class="d-none d-xl-table-cell">{{ $k + 1 }}</td>
                <td>
                  <strong>{{ $author->name }}</strong>
                </td>
                <td class="d-none d-xl-table-cell">{{ $author->description }}</td>
                <td>
                  @if ($author->status === 1)
                    <span class="badge bg-success">Enable</span>
                  @elseif ($author->status === 0)
                    <span class="badge bg-danger">Disable</span>
                  @else
                    <span class="badge bg-secondary">Pending</span>
                  @endif
                </td>
                
                <td class="d-flex" width="120px">
                  <a href="{{route('author.edit', $author->id)  }}" class="btn btn-outline-primary btn-sm mr-1">
                      <i class="fas fa-edit"></i>
                    </a>
                  <form action="{{route('author.destroy', $author->id)  }}" method="post">
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