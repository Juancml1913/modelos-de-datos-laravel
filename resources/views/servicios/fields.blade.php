<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Costo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('costo', 'Costo:') !!}
    {!! Form::number('costo', null, ['class' => 'form-control']) !!}
</div>

<!-- Ayuno Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('ayuno', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('ayuno', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('ayuno', 'Ayuno', ['class' => 'form-check-label']) !!}
    </div>
</div>
