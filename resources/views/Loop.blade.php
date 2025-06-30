<ul class="tree">
    @foreach ($accounts as $acc)
        <li><span class="icon-folder">{{ $acc['name'] }}</span>
            @if (!empty($acc['children']))
                @include('loop', ['accounts' => $acc['children']])
            @endif
        </li>
    @endforeach
</ul>
