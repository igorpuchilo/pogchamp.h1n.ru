@foreach($items as $item)
    @if ($item->hasChildren())
        <li class="d-flex flex-column catalog-list-item">
            <span class="text-black-50 font-weight-bold catalog-list-title">{{$item->title}}</span>
            <ul class="d-flex flex-column p-0" style="list-style: none;">
                @include('shop.include.menu_child', ['items' => $item->children()])
            </ul>
        </li>
    @else
        <li class="d-flex flex-column catalog-list-item"><a href="{{route('shop.getcategory',$item->data('alias'))}}" class="nav-link
        text-black-50 font-weight-bold p-0 text-left">{{$item->title}}</a></li>
    @endif
@endforeach
