<div class="8u 12u$(small)">
    <form method="post" action="{{ route('works.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="row uniform 50%">
            <div class="12u"><input name="name" id="name" placeholder="Work's name" type="text" value="{{ (Request::old('name') != '')? Request::old('name') : (isset($work)? $work->name : '') }}"></div>
            <div class="12u">
                <select name="picture" id="picture">
                    <option value="">-- Select a picture --</option>
                    @for($i = 1; $i < 7; $i++)
                        <option value="{{ $i }}" {{ Request::old('picture') == $i ? 'selected' : (isset($work) && $work->picture == $i ? 'selected' : '') }}>Picture {{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="12u">
                <textarea name="description" id="description" placeholder="Description" rows="4">{{ (Request::old('description') != '')? Request::old('description') : (isset($work)? $work->description : '') }}</textarea>
            </div>
        </div>
        <br/>
        <ul class="actions">
            <li><input value="{{ (isset($work)? 'Update' : 'Add') }}" type="submit"></li>
        </ul>
    </form>
</div>