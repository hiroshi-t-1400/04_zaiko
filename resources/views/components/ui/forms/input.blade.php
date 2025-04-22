{{-- edit,createのほぼ同様のフォーム画面をレンダする --}}

<div class="items-form-wrapper">
    <form action="{{ $submitAction['store']['url'] }}" method="POST" class="{{-- classes['formWrap'] --}}">
            @csrf
            @method( $submitAction['method'] ?? 'POST' )

            @foreach ($displayInfo as $form)
                <div class="{{-- classes['card'] --}} py-2 px-4 m-0.5 mb-4">
                    <label for="{{ $form['column'] }}" class="{{-- $labelClass font-semibold text-xl --}}">{{ $form['displayName'] }}</label>
                    @if ( $form['formType'] === 'select' )
                        <select name="{{ $form['column'] }}" id="{{ $form['column'] }}" class=" font-semibold text-xl rounded-xl outline-2 outline-gray-600 py-2 px-4 m-0.5 mb-4 " value="カテゴリ" >
                            @foreach($form['options'] as $value => $label)
                                <option value="{{ $value }}" >{{ $label }}</option>
                            @endforeach
                        </select>

                    @elseif ( $form['formType'] === 'textarea' )

                    @else
                        <input type="{{ $form['formType'] }}" name="{{ $form['column'] }}" id="{{ $form['column'] }}" class="{{-- $inputClass --}} rounded-sm outline-2 outline-gray-600" value="{{ old($form['column']) ?? $recordValue ?? null }}"
                            @if ($loop->first)
                                autofocus
                            @endif
                        >
                    @endif
                </div>


                @endforeach

            {{-- POSTのみ --}}
            <button type="submit" class="{{-- actionClass --}} rounded-xl  w-32 h-10 ms-30 ring-2 ring-blue-500 bg-blue-600 font-extrabold text-gray-200 text-3xl" >{{ $submitAction['store']['label'] }}</button>
            <a href="{{ $submitAction['cancel']['url'] }}" class="" >{{ $submitAction['cancel']['label'] }}</a>
    </form>
</div>

