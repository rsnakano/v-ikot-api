@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('poi.update', ['id' => $poi->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            {{-- POI Information --}}
            <div class="form-group mb-3">
                <label for="name">POI Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $poi->name }}">

                @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="history">POI History</label>
                <textarea class="form-control" name="history" id="history" rows="10">{{ $poi->history }}</textarea>

                @error('history')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="courses">POI Courses</label>
                <textarea class="form-control" name="courses" id="courses" rows="8">{{ $poi->courses }}</textarea>

                @error('courses')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="offices">POI Offices</label>
                <textarea class="form-control" name="offices" id="offices" rows="8">{{ $poi->offices }}</textarea>

                @error('offices')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            {{-- POI Coordinates --}}
            <div class="row mb-3">
                <div class="col">
                    <label for="top">POI Top</label>
                    <input type="number" class="form-control" name="top" id="top" value={{ $poi->top }}>

                    @error('top')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="col">
                    <label for="bottom">POI Bottom</label>
                    <input type="number" class="form-control" name="bottom"  id="bottom" value={{ $poi->bottom }}>

                    @error('bottom')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="left">POI Left</label>
                    <input type="number" class="form-control" name="left" id="left" value={{ $poi->left }}>

                    @error('left')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="col">
                    <label for="right">POI Right</label>
                    <input type="number" class="form-control" name="right" id="right" value={{ $poi->right }}>

                    @error('right')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <!-- Save button -->
            <button type="submit" class="btn btn-primary float-end mb-5">
                Save
            </button>
        </form>
    </div>
@endsection
