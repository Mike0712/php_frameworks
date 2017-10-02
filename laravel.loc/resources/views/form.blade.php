{{ Form::open(['class' => 'form-inline my-2 my-lg-0']) }}
    {{ Form::select('search', ['Новость 1',
                              'Новость 2',
                              'Новость 3',
                              'Новость 4',
                              'Новость 5' ], 1, ['class' => 'form-control top-select', 'placeholder' => 'Поиск', 'aria-label' => 'Поиск']) }}

    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Найти</button>

{{ Form::close() }}

<script type="text/javascript">
    $('.top-select').select2();
</script>