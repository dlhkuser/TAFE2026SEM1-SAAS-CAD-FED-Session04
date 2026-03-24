<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">{{ __('Topic Admin') }}</h2>
    </x-slot>
    <section class="py-4 mx-8 space-y-4">
        <header>
            <h3 class="text-2xl font-bold text-zinc">
                Add New Topic
            </h3>
        </header>
        <div class="overflow-x-auto">
            <form action="{{route('admin.topics.store')}}"
                    method="post">
                @csrf

                <div>
                    <x-input-label for="name">Name:</x-input-label>
                    <x-text-input
                            id="name"
                            name="name"
                            placeholder="Name of topic"
                            value="{{old('name')??''}}"/>

                    <x-input-error messages="{{$errors->name}}"/>

                    <x-primary-button type="submit">Save</x-primary-button>
                </div>

            </form>
        </div>
    </section>
</x-admin-layout>
