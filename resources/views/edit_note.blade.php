@extends('layouts.main_layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col">

                <!-- top bar -->
                @include('top_bar')

                <!-- label and cancel -->
                <div class="row">
                    <div class="col">
                        <p class="display-6 mb-0">
                            <i class="fa-regular fa-pen-to-square"></i>
                            EDIT NOTE
                        </p>
                    </div>
                    <div class="col text-end">
                        <a href="{{ route('home') }}" class="btn btn-outline-danger">
                            <i class="fa-solid fa-xmark"></i>
                        </a>
                    </div>
                </div>

                <!-- form -->
                <form action="{{ route('editNoteSubmit') }}" method="post">
                    @csrf
                    <input type="hidden" name="note_id" value="{{ Crypt::encrypt($note->id) }}">
                    <div class="row mt-3">
                        <div class="col">
                            <!-- title note -->
                            <div class="mb-3">
                                <label class="form-label">Note Title</label>
                                <input type="text" class="form-control bg-primary text-white" name="text_title"
                                    value={{ old('text_title', $note->title) }}>
                                @error('text_title')
                                    <div class="text-danger"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
                                @enderror
                            </div>

                            <!-- text note -->
                            <div class="mb-3">
                                <label class="form-label">Note Text</label>
                                <textarea class="form-control bg-primary text-white" name="text_note" rows="5">{{ old('text_note', $note->text) }}</textarea>
                                @error('text_note')
                                    <div class="text-danger"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col text-end">
                            <a href="{{ route('home') }}" class="btn
                            btn-danger
                             px-5"><i
                                    class="fa-solid fa-ban me-2"></i>Cancel</a>
                            <button type="submit" class="btn btn-success px-5">
                                <i class="fa-solid fa-arrow-rotate-right"></i>
                                UPDATE</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
