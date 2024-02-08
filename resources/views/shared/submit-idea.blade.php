<h4> Share yours ideas </h4>
<div class="row">
    <div class="mb-3">
        {{-- FORM --}}
        <form action="{{ route('idea.create') }}" method="post">
            @csrf
            <textarea name="idea" class="form-control" id="idea" rows="3"></textarea>
        </div>
        <div class="">
            <button type="submit" class="btn btn-dark"> Share </button>
        </div>
    </form>
</div>