<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

$validated = $request->validate([
        'title' => 'required|unique:posts|max:255',
        'body' => 'required',
    ]); -->
# crudLaravel10
