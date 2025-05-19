{{-- edit,createのほぼ同様のフォーム画面をレンダする --}}

<div class="items-form-wrapper">
    <form action="{{ $submitAction['store']['url'] }}" method="POST" class="{{-- classes['formWrap'] --}}">
            @csrf
            @method( $submitAction['method'] ?? 'POST' )

            <table class="table-auto border-0 w-full">
                <colgroup>
                    <col class="w-48" />
                    <col />
                </colgroup>

                <tbody>
                    @foreach ($displayInfo as $form)
                        <tr>
                            {{-- フォームのラベルをレンダする --}}
                            <td class="border-0 p-3 text-end ">
                                <label for="{{ $form['column'] }}" class="text-xl">{{ $form['displayName'] }}</label>
                            </td>
                            {{-- フォームをレンダする --}}
                            <td class="border-0">

                                @error( $form['column'] )
                                    <div class="error text-sm text-red-800">{{ $message }}</div>
                                @enderror
                                @if ( $form['formType'] === 'select' )
                                    <select name="{{ $form['column'] }}" id="{{ $form['column'] }}" class="rounded-sm outline-1 outline-gray-600 w-full p-1" >
                                        @foreach($form['options'] as $optionValue => $label)
                                            <option value="{{ $optionValue }}"
                                                {{-- データベースの値と一致する場合は選択状態にする --}}
                                                @selected(old($form['column'], $item[$form['column']] ?? null) == $optionValue)
                                            >{{ $label }}</option>
                                        @endforeach
                                    </select>


                                @elseif ( $form['formType'] === 'textarea' )
                                    <textarea name="{{ $form['column'] }}" id="{{ $form['column'] }}" cols="100" rows="5" class="rounded-sm outline-1 outline-gray-600 w-full p-1" >{{ old($form['column'], isset($item[$form['column']]) ? $item[$form['column']] : '' ) }}</textarea>

                                @elseif ( $form['formType'] === 'date' )
                                    <input type="{{ $form['formType'] }}" name="{{ $form['column'] }}" id="{{ $form['column'] }}" class="rounded-sm outline-1 outline-gray-600 w-full p-1" value="{{ old($form['column'], isset($item[$form['column']]) ? \Carbon\Carbon::parse($item[$form['column']])->format('Y-m-d') : '' ) }}">

                                @else
                                    <input type="{{ $form['formType'] }}" name="{{ $form['column'] }}" id="{{ $form['column'] }}" class="rounded-sm outline-1 outline-gray-600 w-full p-1" value="{{ old( $form['column'], isset($item[$form['column']]) ? $item[$form['column']] : '' ) }}"
                                        @if ($loop->first)
                                            autofocus
                                        @endif
                                    >

                                @endif
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>


            <div class="flex justify-evenly p-3">
                <button type="submit" class="{{-- actionClass --}} rounded-sm  w-24 h-8 ring-2 ring-blue-500 bg-blue-600 font-semibold text-gray-200 text-xl" >{{ $submitAction['store']['label'] }}</button>
                <a href="{{ $submitAction['cancel']['url'] }}" class="inline-block" >{{ $submitAction['cancel']['label'] }}</a>
            </div>
    </form>
</div>

