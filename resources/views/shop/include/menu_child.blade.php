@foreach($items as $item)
    @if(!($item->hasChildren()))
        <li class="d-flex flex-column"><a class="nav-link text-dark text-left p-0"
                                          href="{{route('shop.getcategory',$item->data('alias'))}}">
                <i class="fa fa-chevron-right"></i>&nbsp;{{$item->title}}</a></li>
    @else
        <li class="d-flex flex-column">
            <a class="nav-link text-dark text-left p-0" href="{{route('shop.getcategory',$item->data('alias'))}}">
                <i class="fa fa-chevron-right"></i>&nbsp;{{$item->title}}</a>
            <ul class="catalog-list-children">
                @include('shop.include.menu_child', ['items' => $item->children()])
            </ul>
        </li>
    @endif
@endforeach
