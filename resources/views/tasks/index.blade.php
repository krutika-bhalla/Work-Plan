@extends('layouts.master')

@section('content')
<style>
   /* main{
        padding-top: 40px;
        margin-top: 30px;
        /*height: 1500px;
    }*/
</style>
<main>

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

                            <button type="submit" class="btn btn-dark">Submit</button>
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
                    <div id="myUL">
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
                                            <button type="submit" class="btn btn-secondary">Done</button>
                                        </form>
                                    </th>
                                </tr>
                            @endforeach

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>
@endsection
