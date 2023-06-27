<x-template.layout title="{{$title}}">
  <x-organisms.navbar cartCount=10 :path="$shop->path"/>
  <x-organisms.subcategory :dataSubcategory="$subcategory">
    {{ $subcategory->links('vendor.pagination.bootstrap-5') }}
  </x-organisms.subcategory>
  <x-organisms.footer :shop="$shop"/>
</x-template.layout>