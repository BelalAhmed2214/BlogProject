@extends('layouts.app')
@section('content')
    <div class="container">
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.posts.create') }}">
                    Add post
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
            <div class="card-header"><i class="fa fa-align-justify"></i> Posts list</div>
            <div class="card-body">
                <table class="table table-responsive-sm table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=0; ?>
                    @foreach ($posts as $post)
                            <?php $i++; ?>

                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->category->name }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('admin.posts.edit', $post->id) }}">
                                    Edit
                                </a>

                                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST"
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
