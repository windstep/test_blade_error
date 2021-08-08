<ul>
    @foreach($items as $item)
        @include('menu-item', $item)
    @endforeach
</ul>