<x-form actrion="{{ route('blog') }}" method="GET">
    <div class="row">

        <div class="col-12 col-md-4">
            <div class="mb-3">
                <x-input name="search" value="{{ request('search') }}" placeholder="{{ __('Search') }}"></x-input>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="mb-3">
                <x-select name="category_id" value="{{ request('category_id') }}" :options="$categories"></x-select>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="mb-3">
                <x-button type="submit" class="w-100">
                    {{ __('Enter') }}
                </x-button>
            </div>
        </div>
    </div>
</x-form>
