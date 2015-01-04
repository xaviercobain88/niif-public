@extends('template.auth-template')
@section('content')
<div class="container w-xxl w-auto-xs" ng-controller="SigninFormController" ng-init="app.settings.container = false;">
  <a href class="navbar-brand block m-t">{%app.name%}</a>
  <div class="m-b-lg">
    <div class="wrapper text-center">
      <strong>logueate para comenzar</strong>
    </div>
    <form name="form" class="form-validation" method="POST" action="http://localhost:8888/login_form" accept-charset="UTF-8">
      <div class="list-group list-group-sm">
        <div class="list-group-item">
          <input name="email" type="email" placeholder="Email" class="form-control no-border" ng-model="user.email" required>
        </div>
        <div class="list-group-item">
           <input name="password" type="password" placeholder="Contraseña" class="form-control no-border" ng-model="user.password" required>
        </div>
      </div>
      <button type="submit" class="btn btn-lg btn-primary btn-block" >Ingresar</button>
      <div class="text-center m-t m-b"><a ui-sref="access.forgotpwd">Olvidaste tu contraseña?</a></div>
      <div class="line line-dashed"></div>
      <p class="text-center"><small>Ya tienes una cuenta?</small></p>
      <a href="signup" class="btn btn-lg btn-default btn-block">Crear una cuenta</a>
    </form>
  </div>
  <div class="text-center" ng-include="'tpl/blocks/page_footer.html'"></div>
</div>
@stop