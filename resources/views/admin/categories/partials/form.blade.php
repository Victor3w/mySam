<label for="">Статус</label>
<select name="published" class="form-control">
    @if(isset($category->id))
        <option value="0" {{ (empty($category->published)) ? 'selected=""' : '' }}>
            Не опубликованно
        </option>
        <option value="1" {{ (!empty($category->published)) ? 'selected=""' : '' }}>
            Опубликованно
        </option>
    @else
        <option value="0">
            Не опубликованно
        </option>
        <option value="1">
            Опубликованно
        </option>
    @endif
</select>

<label for="">Наименование</label>
<input type="text" class="form-control" name="title"
       placeholder="Заголовок категории" value="{{$category->title or ""}}"
       required>

<label for="">Slug</label>
<input class="form-control" type="text" name="slug"
       placeholder="Автоматическая генерация"
       value="{{$category->slug or ""}}" readonly="">

<label for="">Родительская категория</label>
<select class="form-control" name="parent_id">
    <option value="0">-- без родительской категории --</option>
    @include('admin.categories.partials.categories', ['categories' => $categories])
</select>

<hr />

<input class="btn btn-primary" type="submit" value="Сохранить">