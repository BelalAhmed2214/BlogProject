@extends('layouts.app')
@section('content')
    <div class="container">


        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.categories.create') }}">
                    Add category
                </a>
            </div>
        </div>

        @if(session()->has('add'))
            <div class="container mb-3">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('add') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                            onclick="this.parentElement.style.display='none';">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        @endif


        @if(session()->has('update'))
            <div class="container mb-3">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('update') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                            onclick="this.parentElement.style.display='none';">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        @endif



        @if(session()->has('delete'))
            <div class="container mb-3">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session()->get('delete') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                            onclick="this.parentElement.style.display='none';">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        @endif


        <div class="card">
            <div class="card-header"><i class="fa fa-align-justify"></i> Categories list</div>
            <div class="card-body">
                @if (session('errors'))
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach ($errors->all() as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <table class="table table-responsive-sm table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a class="btn btn-primary"
                                   href="{{ route('admin.categories.edit', $category->id) }}">
                                    Edit
                                </a>

                                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST"
                                      onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


            </div>
        </div>

    </div>
@endsection
