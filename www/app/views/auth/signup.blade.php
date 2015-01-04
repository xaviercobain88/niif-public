@extends('template.auth-template')
@section('content')
<div class="container w-xxl w-auto-xs" ng-controller="SignupFormController" ng-init="app.settings.container = false;">
    <a href class="navbar-brand block m-t">{%app.name%}</a>
    <div class="m-b-lg">
        <div class="wrapper text-center">
            <strong>Crea una cuenta y empieza a usarla</strong>
        </div>
        <form name="form" class="form-validation">
            <div class="list-group list-group-sm">
                <div class="list-group-item">
                    <input placeholder="Nombre" class="form-control no-border" ng-model="user.name" required>
                </div>
                <div class="list-group-item">
                    <input type="email" placeholder="Email" class="form-control no-border" ng-model="user.email" required>
                </div>
                <div class="list-group-item">
                    <input type="password" placeholder="Contraseña" class="form-control no-border" ng-model="user.password" required>
                </div>
            </div>
            <div class="checkbox m-b-md m-t-none">
                <label class="i-checks">
                    <input type="checkbox" ng-model="agree" required><i></i>Estoy de acuerdo con los <a href>términos y condiciones</a>
                </label>
            </div>
            <button type="submit" class="btn btn-lg btn-primary btn-block" ng-click="signup()" ng-disabled='form.$invalid'>Crear Cuenta</button>
            <div class="line line-dashed"></div>
            <p class="text-center"><small>Ya tienes una cuenta?</small></p>
            <a href="login" class="btn btn-lg btn-default btn-block">Ingresar</a>
        </form>
    </div>
    <div class="text-center" ng-include="'tpl/blocks/page_footer.html'"></div>
</div>
@stop