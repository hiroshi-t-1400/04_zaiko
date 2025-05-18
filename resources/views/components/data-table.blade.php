<button type="submit"  ></button>
<table class="border-collapse border border-gray-600">
    <thead>
        <tr>
            @foreach ($tableHeaders as $tableHeader)
                <th class="border border-gray-500 px-3">{{ $tableHeader['displayName'] }}</th>
            @endforeach
            @if (!empty($options))
                {{-- <th>操作</th> --}}
            @endif
        </tr>
    </thead>

    <tbody>
        @foreach ($items as $row)
            <tr>
                {{-- テーブルの値をレンダする --}}
                @foreach($row as $cell)
                    <td  class="border border-gray-500 px-3">{{ $cell }}</td>
                @endforeach

                {{-- 操作ボタンをレンダする --}}
                @if(!empty($options))
                    @foreach($options as $key => $action)
                        <td class="border border-gray-500 px-3">
                            {{-- 渡されたオプションにしたがってボタン・リンクを表示する --}}
                            @if ($action['type'] === 'link')
                                <a href="{{ $action['url']($row) }}" class="{{ $action['attributes']['class'] }}" >{{ $action['label'] }}</a>
                            @elseif ($action['type'] === 'button')
                                <form action="{{ $action['url']($row) }}" method="POST">
                                    @csrf
                                    @method($action['method'] ?? 'POST')

                                    <button type="submit"
                                        @if($key === "delete")
                                            onclick="return confirm('{{ $action['confirm'] ?? '実行しますか？' }}')"
                                        @endif
                                     class="{{ $action['attributes']['class'] }}" >{{ $action['label'] }}</button>
                                </form>
                            @endif
                        </td>
                    @endforeach
                @endif
            </tr>
        @endforeach
    </tbody>
</table>
