 {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    {{-- Filter by type start --}}
    <div class="widget-1 widget-check">
        <div class="widget-1-body">
            <h6 class="subtitle">Type</h6>
            <div class="check-area">
                @foreach($screenTypes as $k => $type)
                <div class="form-group">
                    <input wire:model="type_id" type="checkbox" name="mode" id="mode{{$k}}" value="{{ $type->id }}"><label for="mode{{$k}}">{{$type->name}}</label>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- Filter by type end --}}

