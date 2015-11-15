@if($errors->any())
    <div class="8u 12u$(small) error-list">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
