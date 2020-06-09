@extends('layouts.master')

@section('content')

    <h2 class="display-5" style="text-align: center; padding-top: 20px;">Plan Your Day Here!</h2>
    <div class="row mt-5">
        <div class="col-md-6">
            @if (session()->has('msg'))

            <div class="alert alert-light" role="alert">
                {{ session()->get('msg') }}
            </div>

            @endif
            <div class="card">
                <div class="card-header" style="text-align: center">
                    Add Task
                </div>
                <div class="card-body">

                    <form action="{{ route('task.create') }}" method="POST">

                        @csrf

                        <div class="form-group">
                            <label for="task">Task</label>
                            <input type="name" name="title" id="task" placeholder="Add Your Task" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}">
                            <div class="invalid-feedback">
                                {{ $errors->has('title') ? $errors->first('title'):'' }}
                            </div>
                        </div>
                        <div class="form-group">

                            <input type="submit" class="btn btn-dark">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="text-align: center">
                    To-Do-List
                </div>
                <div class="card-body">

                    <table class="table table-bordered">

                        <tr>
                            <th>Your Tasks</th>
                            <th style="width: 2em">Your Action</th>
                        </tr>



                        @foreach ($tasks as $task)


                            <tr>
                                <th>{{ $task->title }}</th>
                                <th>
                                    <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-secondary btn-sm">Delete</button>
                                    </form>
                                </th>
                            </tr>
                        @endforeach

                    </table>


                </div>
            </div>
        </div>
    </div>
@endsection
