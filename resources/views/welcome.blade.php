@extends('layouts.main')

@section('title', 'Homepage')

@section('content')

<nav>
    <div class="nav-wrapper row">
        <a href="#!" class="brand-logo">
            <i>AOB</i>
        </a>
        <a href="#" data-activates="nav-bar" class="button-collapse">
            <i class="material-icons">menu</i>
        </a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#">home</a></li>
            <li><a href="#">news</a></li>
            <li><a href="#">scores</a></li>
            <li><a href="#">standings</a></li>
            <li><a href="#">teams</a></li>
            <li><a href="#">players</a></li>
            <li><a href="#">coaches</a></li>
            <li><a href="#">more</a></li>
        </ul>
        <ul class="side-nav" id="nav-bar">
            <li><a href="#">home</a></li>
            <li><a href="#">news</a></li>
            <li><a href="#">scores</a></li>
            <li><a href="#">standings</a></li>
            <li><a href="#">teams</a></li>
            <li><a href="#">players</a></li>
            <li><a href="#">coaches</a></li>
            <li><a href="#">more</a></li>
        </ul>
    </div>
</nav>
<div class="row content">
    <div class="col m3 s12">
        <div class="left-col">
            <header>
                <h5>Headlines</h5>
            </header>
            <ul>
                <li><i class="material-icons tiny">label_outline</i><a>Dunk like a gorilla</a></li>
                <li><i class="material-icons tiny">label_outline</i><a>Magic hands</a></li>
                <li><i class="material-icons tiny">label_outline</i><a>Best pick and roll</a></li>
                <li><i class="material-icons tiny">label_outline</i><a>Coaches got mad</a></li>
                <li><i class="material-icons tiny">label_outline</i><a>Looks like swagger</a></li>
                <li><i class="material-icons tiny">label_outline</i><a>Bring home the bacon</a></li>
                <li><i class="material-icons tiny">label_outline</i><a>Only myself could stop me</a></li>
            </ul>
            <div ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 100px; width: 100px"></div>
        </div>
    </div>
    <div class="col m5 s12">
        <div class="mid-col">
            <header>
                <h5>Story</h5>
            </header>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
            </p>
            <img id="dragMe" class="materialboxed" src="{{ asset('/img/pba-v2-64px.png') }}" alt="" draggable="true" ondragstart="drag(event)" />
        </div>
    </div>
    <div class="col m4 s12">
        <div class="right-col">
            <header>
                <h5>Schedules</h5>
            </header>
            <table class="striped responsive-table">
                <thead>
                    <tr>
                        <th>Teams</th>
                        <th>Date and time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cavaliers VS Warriors <i>(Home)</i></td>
                        <td>May 28, 2017 @ 5:00 PM</td>
                    </tr>
                    <tr>
                        <td>Rocket<i>(Home)</i> VS Jazz</td>
                        <td>May 28, 2017 @ 5:00 PM</td>
                    </tr>
                    <tr>
                        <td>Pacers<i>(Home)</i> VS Celtics</td>
                        <td>May 28, 2017 @ 5:00 PM</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<style>

</style>
<script>
    function allowDrop(ev) {
        ev.preventDefault();
    }

    function drag(ev) {
        ev.dataTransfer.setData("text", ev.target.id);
    }

    function drop(ev) {
        ev.preventDefault();
        var data = ev.dataTransfer.getData("text");
        ev.target.appendChild(document.getElementById(data));
        alert(0);
    }
</script>
@endsection