@extends('layouts.main')

@section('title', 'JCV Projetos')

@section('content')

<!--<div id="search-container" class="col-md-12">
    <h1>Busque um projeto</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Buscar...">
    </form>
</div> -->

<div class="banner-home">
</div>

<main class="home">
    <div class="profile-container">  
        <div class="col-lg-4 col-md-4 col-sm-12 description">
            <h2>Habilidades e Experiências</h2>
            <span>Meu nome é Juliano Cesar Volski, nascido em Irati-PR. Recém formado em Sistemas de Informação pelo Centro Universitário Vale do Iguaçu (Uniguaçu). Este é meu portifólio, onde demonstro um pouco do meu trabalho e experiências absorvidas durante a graduação e meus trabalhos na área.<span>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="warpper">
                <input class="radio" id="one" name="group" type="radio" checked>
                <input class="radio" id="two" name="group" type="radio">
                <input class="radio" id="three" name="group" type="radio">
                <div class="tabs">
                    <label class="tab" id="one-tab" for="one">Linguagens</label>
                    <label class="tab" id="two-tab" for="two">Frameworks</label>
                    <label class="tab" id="three-tab" for="three">Experiência</label>
                </div>
                <div class="panels">
                    <div class="panel" id="one-panel">
                        <div class="panel-title">Tecnologia</div>
                        <div class="faixa">
                        <ul>
                            <li>
                            <button class="btn texto btn-skills"> PHP</button>
                            </li>
                            <li>
                            <button class="btn texto btn-skills"> Python</button>
                            </li>
                            <li>
                            <button class="btn texto btn-skills"> Css</button>
                            </li>
                            <li>
                            <button class="btn texto btn-skills"> Html</button>
                            </li>
                            <li>
                            <button class="btn texto btn-skills"> Java Script</button>
                            </li>
                            <li>
                            <button class="btn texto btn-skills"> Sql</button>
                            </li>
                        </ul>
                        </div>
                    </div>
                    <div class="panel" id="two-panel">
                        <div class="panel-title">Tecnologia</div>
                        <div class="faixa">
                        <ul>
                            <li>
                            <button class="btn texto btn-skills"> Jquery </button>
                            </li>
                            <li>
                            <button class="btn texto btn-skills"> Bootstrap</button>
                            </li>
                            <li>
                            <button class="btn texto btn-skills"> Laravel</button>
                            </li>
                            <li>
                            <button class="btn texto btn-skills"> React Js</button>
                            </li>
                        </ul>
                        </div>
                    </div>
                    <div class="panel container-xl" id="three-panel">
                        <ul class="timeline">
                        <li data-year="2016" data-text="Inicio Graduação em Sistemas de Informação."></li>
                        <li data-year="2018" data-text="Começo do projeto de reconhecimento facial com Python."></li>
                        <li data-year="2019" data-text="Gradução completa."></li>
                        <li data-year="2020" data-text="Emprego de Desenvolvedor Web Júnior."></li>
                        <li data-year="2021" data-text="Em busca da promoção ao nível Pleno"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="projects-container" class="col-md-12">
        <h2>Últimos Projetos</h2>
        <div id="cards-container" class="row">
            @foreach($projects as $project)
                <div class="card col-md-3">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <img src="/images/project-php.png" alt="{{ $project->title }}">
                    <div class="card-body">
                        <p class="card-date">18/08/2021</p>
                        <h5 class="card-title"> {{ $project->title }}</h5>
                        <p class="card-language"> {{ $project->language }} </p>
                        <a href="#" class="btn btn-primary">Ver Projeto</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>

@endsection

