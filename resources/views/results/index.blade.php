<!-- Display a list of user results with searching and sorting -->
<form action="{{ route('results.index') }}" method="GET">
    <input type="text" name="search" placeholder="Search">
    <select name="sort_by">
        <option value="created_at">Created At</option>
        <option value="score">Score</option>
        <!-- Add more sorting options as needed -->
    </select>
    <select name="sort_order">
        <option value="asc">Ascending</option>
        <option value="desc">Descending</option>
    </select>
    <button type="submit">Search & Sort</button>
</form>

@foreach ($results as $result)
    <div>User: {{ $result->user_id }}, Quiz: {{ $result->quiz_id }}, Score: {{ $result->score }}</div>
@endforeach

{{ $results->links() }}
