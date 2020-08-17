<div class="card card-body">
    <div class="form-group">
        <label for="name">Имя организации</label>
        <input type="text"
               name="name"
               id="name"
               required
               class="form-control"
               placeholder="Введите имя"
        value="{{old('name', $item->name)}}">
    </div>
    <div class="form-group">
        <label for="country">Страна</label>
        <input type="text"
               name="country"
               id="country"
               required
               class="form-control"
               placeholder="Введите страну"
               value="{{old('country', $item->country)}}">
    </div>
    <div class="form-group">
        <label for="city">Город</label>
        <input type="text"
               name="city"
               id="city"
               required
               class="form-control"
               placeholder="Введите город"
               value="{{old('city', $item->city)}}">
    </div>

    <div class="form-group">
        <label for="time">Время</label>
        <input type="text"
               name="time"
               id="time"
               required
               class="form-control"
               placeholder="Введите время"
               value="{{old('time', $item->time)}}">
    </div>

    <div class="form-group">
        <label for="info">Информация</label>
        <textarea name="info" id="info" rows="10" class="form-control">{{old('info', $item->info)}}</textarea>
    </div>
    @php $difference = $item->exists ? $item->links()->count() : 0;@endphp
    @if($item->exists)
        @for($i = 0; $i < $difference; $i++)
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Ссылка</span>
                    </div>
                    <input type="hidden" value="{{$item->links[$i]->id}}" name="ids[{{$i}}]">

                    <input type="text" class="form-control" placeholder="https://и т.д." name="link[{{$i}}]"
                           value="{{$item->links[$i]->link}}"
                    >
                    <input type="text" class="form-control" placeholder="Название кнопки" name="button_name[{{$i}}]"
                           value="{{$item->links[$i]->button_name}}"
                    >
                </div>
            </div>
        @endfor
    @endif
    @for($i = $difference; $i < 6;  $i++)
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Ссылка</span>
                </div>
                <input type="text" class="form-control" placeholder="https://и т.д." name="link[{{$i}}]">
                <input type="text" class="form-control" placeholder="Название кнопки" name="button_name[{{$i}}]">
            </div>
        </div>
    @endfor
</div>
