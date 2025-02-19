<a href="{{$attributes->get('href')}}" class="{{$attributes->get('class')}}" @if($attributes->get('aria-current')) aria-current="{{$attributes->get('aria-current')}}" @endif>{{$slot}}</a>
