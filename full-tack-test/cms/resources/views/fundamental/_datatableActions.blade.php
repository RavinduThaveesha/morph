<div class="btn-group" role="group">
    @foreach ($data as $item)
        <div class="mr-1">
            <form action="{!! $item['url'] !!}" method="POST">
                <input type="hidden" name="_method" value="{{ $item['method'] }}">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-sm {{ $item['btn'] }}">{{ $item['label'] }}</button>
            </form>
        </div>
    @endforeach
</div>
