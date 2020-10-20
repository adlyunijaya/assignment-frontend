@extends('layouts.main')

@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Edit Post
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Validation -->
            <div class="intro-y box">
                <div class="p-5" id="form-validation">
                    <div class="preview">
                        <form action="{{ route('update.post', $responseBody->data->id ) }}" method="POST">
                            @csrf
                            <div class="input-form">
                                <label class="flex flex-col sm:flex-row"> Title <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, at least 2 characters</span> </label>
                                <input type="text" name="title" value="{{ $responseBody->data->title }}" class="input w-full border mt-2" minlength="2" required>
                            </div>
                            <div class="input-form mt-3">
                                <label class="flex flex-col sm:flex-row"> Body <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, at least 10 characters</span> </label>
                                <textarea class="input w-full border mt-2" name="body" placeholder="Type your body" minlength="10" required>{{ $responseBody->data->body }}</textarea>
                            </div>
                            <button type="submit" class="button bg-theme-1 text-white mt-5">Update</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END: Form Validation -->
        </div>
    </div>

@endsection