<div class="subcategory-card" style="width:{{$width}};background-image: url({{ asset('shop/products/'. $path ) }})">
    <div class="py-5 ">
        <h2 class="text-center text-white">{!! str_replace('-', ' ', ucwords($name)) !!}</h2>
        <x-molecules.button text="View Products" type="light" align="center" size="sm" link="{{ $parentCategory }}/{{ $name }}"/>
    </div>
</div>