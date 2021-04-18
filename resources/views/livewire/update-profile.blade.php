<div class="col-6 offset-3">
    @if(session()->has('notify'))
        <div class="alert alert-success">
            {{ session('notify') }}
        </div>
    @endif

    <form wire:submit.prevent="updateProfile">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        {{-- <x-forms.filepond wire:model="image" /> --}}
        <x-forms.filepond
            wire:model="images"
            multiple
            allowImagePreview
            imagePreviewMaxHeight="200"
            allowFileTypeValidation
            acceptedFileTypes="['image/png', 'image/jpg', 'image/jpeg']"
            allowFileSizeValidation
            maxFileSize="4mb"
        />

        @error('image') <p class="mt-2 text-sm text-danger">{{ $message }}</p> @enderror

        <button type="submit" class="btn btn-outline-primary">Save</button>
    </form>
</div>
