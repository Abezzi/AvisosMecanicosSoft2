<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
    <label for="name">Codigo Rol</label>
    <input readonly type="input" class="form-control" id="name" placeholder="Codigo" name="name" value="{{ (Session::has('errors')) ? old('name', '') : $model->name }}">
</div>
<div class="form-group">
    <label for="display_name"> Nombre Rol</label>
    <input type="input" class="form-control" id="display_name" placeholder="Nombre" name="display_name" value="{{ (Session::has('errors')) ? old('display_name', '') : $model->display_name }}">
</div>
<div class="form-group">
    <label for="description">Descripción (Opcional) </label>
    <input type="input" class="form-control" id="description" placeholder="Descripción" name="description" value="{{ (Session::has('errors')) ? old('description', '') : $model->description }}">
</div>
