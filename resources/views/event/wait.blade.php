@extends('layouts.app')

@section('angular')'page.event'@endsection

@section('scripts')
    <script type="application/javascript" src="/js/angular/event.js"></script>
@endsection

@section('content')
    <section class="wait" ng-controller="EventController">
        <div class="grid-x">
            <div class="cell header">
                <div class="top">
                    <i class="material-icons float-left arrow" ng-click="goBack()">arrow_back</i>
                    <h5 class="text-center"><img src="/assets/white_logomark.png"/> vamonos</h5>
                    <i class="material-icons float-right person">person</i>
                </div>
            </div>
            <div class="cell please">
                <h1 class="text-center">
                    Pensando rotas e sugestões para você e seus amigos...
                </h1>
                <div class="progress">
                    <div class="indeterminate"></div>
                </div>
            </div>
        </div>
    </section>
@endsection