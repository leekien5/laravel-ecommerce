<div class="container py-5">
    <div class="row mb-4 g-md-4 g-3">
        @foreach ($dataSubcategory as $item)
            <div class="col-md-6 col-6">
                <x-molecules.subcategory-card :parentCategory="$parentCategory" :path="$item->path" :name="$item->name" :id="$item->id"/>
            </div>
        @endforeach
    </div>
    {{ $slot }}
</div>