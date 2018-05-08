
@if(!empty($blockScopes) && is_array($blockScopes))
    <ol class="dd-list">
        @foreach($blockScopes as $vBlockScopes)
            <li class="dd-item" data-id="{{$index}}" data-name="{{$vBlockScopes['name'] ?? 'No Name'}}" data-new="0" data-deleted="0">
                <div class="dd-handle">{{$vBlockScopes['name'] ?? 'No Name'}}</div>
                <span class="button-delete btn btn-default btn-xs pull-right"
                    data-owner-id="{{$index}}">
                <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                </span>
                <span class="button-edit btn btn-default btn-xs pull-right"
                    data-owner-id="1">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                </span>
                @php
                    $index++;
                @endphp
                @if(isset($vBlockScopes['children']) && !empty($vBlockScopes['children']) && is_array($vBlockScopes['children']))
                    @include('backend.block.scopes.list', ['index' => $index, 'blockScopes' => $vBlockScopes['children']])
                @endif
            </li>
        @endforeach
    </ol>
@endif