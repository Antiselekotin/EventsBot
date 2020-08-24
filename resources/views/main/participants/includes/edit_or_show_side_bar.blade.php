<div class="card card-body">
    <button class="btn btn-success">Сохранить</button>
    <div class="form-group mt-3">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="artist" id="org"
                   value="0" @if(!old('artist', $item->artist)) checked @endif>
            <label class="form-check-label" for="org">
                Организатор
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="artist" id="artist"
                   value="1" @if(old('artist', $item->artist)) checked @endif>
            <label class="form-check-label" for="artist">
                Артист
            </label>
        </div>
    </div>

    <div class="input-group mb-3">
        <div class="form-check">
            <input type="hidden" value="0" name="music">
            <input class="form-check-input" type="checkbox" name="music" id="music" value="1"
                   @if(old('music', $item->music)) checked @endif>
            <label class="form-check-label" for="music">
                Музыка
            </label>
        </div>
    </div>
    <div class="input-group mb-3">

        <div class="form-check">
            <input type="hidden" value="0" name="performance">
            <input class="form-check-input" type="checkbox" name="performance" id="performance" value="1"
                   @if(old('performance', $item->performance)) checked @endif>
            <label class="form-check-label" for="performance">
                Перфоманс
            </label>
        </div>
    </div>
    <div class="input-group mb-3">
        <div class="form-check">
            <input type="hidden" value="0" name="documentary">
            <input class="form-check-input" type="checkbox" name="documentary" id="documentary" value="1"
                   @if(old('documentary', $item->documentary)) checked @endif>
            <label class="form-check-label" for="documentary">
                Документалистика
            </label>
        </div>
    </div>
    <div class="input-group mb-3">
        <div class="form-check">
            <input type="hidden" value="0" name="visual">
            <input class="form-check-input" type="checkbox" name="visual" id="visual" value="1"
                   @if(old('visual', $item->visual)) checked @endif>
            <label class="form-check-label" for="visual">
                Визуальное искусство
            </label>
        </div>

    </div>

    <div class="form-group mt-3">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="day" id="first_day" value="0"
                   @if(!old('day', $item->day)) checked @endif>
            <label class="form-check-label" for="first_day">
                Первый
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="day" id="second_day" value="1"
                   @if(old('day', $item->day)) checked @endif>
            <label class="form-check-label" for="second_day">
                Второй
            </label>
        </div>
    </div>
</div>
