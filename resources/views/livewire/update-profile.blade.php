<div>
    <form wire:submit.prevent="updateProfile">
        <x-forms.filepond
            wire:model="image"
        />

        <button type="submit">Save</button>
    </form>
</div>
