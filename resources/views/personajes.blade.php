<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{asset('css/personajes.css') }}" rel="stylesheet">
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="navigation-wrap navbar-dark bg-dark start-header start-style">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <nav class="navbar navbar-expand-md navbar-light">

                                    <a class="navbar-brand" href="/">
                                          <img src="{{asset('img/animacion.png')}}" alt="..." width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                                        One Piece
                                      </a>

                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav ml-auto py-4 py-md-0">

                                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                                <a class="nav-link" href="/personajes">Personajes</a>
                                            </li>
                                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                                <a class="nav-link" href="/creador">Creador</a>
                                            </li>
                                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                                <a class="nav-link" href="/sagas">Arco Enies Lobby</a>
                                            </li>

                                        </ul>
                                    </div>

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <br><br><br>
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <div class="alert alert-primary text-center" role="alert">
                    <h2>Personajes Principales de One Piece</h2>
                  </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="cards-list">

                    <div class="card" >
                        <img src="{{asset('img/luffy1.jpg')}}" class="card_image" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Monkey D. Luffy</h5>
                            <p class="card-text"> Cuando era un ni??o comi?? la Fruta del Diablo "Gomu Gomu no Mi" lo
                                 que lo convirti?? en un hombre de goma. Es el capit??n de la banda de los Piratas del
                                 Sombrero de Paja, y miembro de "Los Once Supernovas"
                                junto a su segundo al mando Roronoa Zoro.</p>
                        </div>
                    </div>

                    <div class="card" >
                        <img src="{{asset('img/zoro.png')}}" class="card_image" alt="..." style="height:246px, width: 400px">
                        <div class="card-body">
                            <h5 class="card-title">Roronoa Zoro</h5>
                            <p class="card-text">"El Cazador de Piratas Roronoa Zoro", es uno de los personajes principales del
                            manga One Piece. Fue el primer miembro en unirse a Luffy como tripulante, convirti??ndose en el combatiente??????
                            de la tripulaci??n, y uno de sus dos espadachines, siendo el otro Brook.</p>
                        </div>
                    </div>


                    <div class="card" >
                        <img src="{{asset('img/nami.jpg')}}" class="card_image" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nami</h5>
                            <p class="card-text">Apodada Gata Ladrona
                                es una pirata y la navegante de los Piratas del Sombrero de Paja,
                                as?? como una de las protagonistas principales de la serie.
                                Es el tercer miembro de la tripulaci??n y la segunda en unirse, haci??ndolo
                                 oficialmente durante el arco de Arlong Park.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="cards-list">

                    <div class="card" >
                        <img src="{{asset('img/shanks.jpg')}}" class="card_image" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Shanks</h5>
                            <p class="card-text"> Es el capit??n de los Piratas del Pelirrojo y uno de los Cuatro Emperadores que
                                 gobiernan el Nuevo Mundo.Fue, adem??s, un miembro de la legendaria tripulaci??n de Gol D. Roger,
                                 siendo la ??nica banda que logr?? conquistar con ??xito todo Grand Line.</p>
                        </div>
                    </div>

                    <div class="card" >
                        <img src="{{asset('img/nico.png')}}" class="card_image" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nico Robin</h5>
                            <p class="card-text">Tambi??n conocida por su ep??teto "Ni??a del Diablo"
                                y la "Luz de la Revoluci??n" , es la arque??loga de los Piratas del Sombrero de Paja y una de
                                las Oficiales Superiores de la Gran Flota del Sombrero de Paja. Es el s??ptimo miembro de la tripulaci??n y
                                 el sexto en unirse, al final del Arco de Arabasta .
                                 </p>
                        </div>
                    </div>


                    <div class="card" >
                        <img src="{{asset('img/upsson.jpg')}}" class="card_image" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Usopp "El Dios"</h5>
                            <p class="card-text">Usopp  naci?? en Villa Syrup, en el East Blue. Actualmente forma parte de los
                                Piratas del Sombrero de Paja, ocupando el puesto de "Tirador (y Francotirador)"; aunque al
                                principio de la Saga se le describiera (c??micamente) como el "Mentiroso" del grupo</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="cards-list">

                    <div class="card" >
                        <img src="{{asset('img/sanji.jpg')}}" class="card_image" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sanji</h5>
                            <p class="card-text"> Sanji es el cocinero de la Banda de Piratas Sombrero de Paja, y uno de los
                                protagonistas principales de One Piece. Es el quinto miembro de la tripulaci??n</p>
                        </div>
                    </div>

                    <div class="card" >
                        <img src="{{asset('img/tony.png')}}" class="card_image" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tony Tony Chopper</h5>
                            <p class="card-text">Tony Tony Chopper es el m??dico de los Piratas Sombreros de Paja.
                                 Es un reno que comi?? la  Hito Hito no Mi de la Isla de Drum, lo que le hace el
                                 ??nico miembro de toda la tripulaci??n que nace en el Grand Line. ??l es el sexto miembro de la tripulaci??n
                                 y el quinto en unirse a ella.
                                 </p>
                        </div>
                    </div>


                    <div class="card" >
                        <img src="{{asset('img/franky.jpeg')}}" class="card_image" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Franky "El Cyborg"</h5>
                            <p class="card-text">Franky  cuyo verdadero nombre es Cutty Flam. Franky es un cyborg
                                 (mitad androide, mitad humano). Quien era el l??der de la Franky Family, un grupo
                                  de desmanteladores de Water 7 que hacen a la vez el trabajo de cazadores de recompensas</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="cards-list">

                    <div class="card" >
                        <img src="{{asset('img/trafalgar.jpg')}}" class="card_image" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Trafalgar D. Water Law</h5>
                            <p class="card-text"> Junto a Monkey D. Luffy y Kozuki Momonosuke, es uno de los l??deres de la
                                Alianza Ninja-Pirata-Mink-Samur??i, cuyo origen se esboz?? en la alianza inicial entre los
                                Piratas de Heart y los Piratas de Sombrero de Paja, la cual consigui?? derrocar el r??gimen
                                contrabandista de Donquixote Doflamingo causando una gran agitaci??n en el mundo.</p>
                        </div>
                    </div>

                    <div class="card" >
                        <img src="{{asset('img/carrot.jpg')}}" class="card_image" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Carrot </h5>
                            <p class="card-text">Es una aliada de los Piratas del Sombrero de Paja durante la
                                 Saga de Whole Cake Island y el Arco del Pa??s de Wano , donde se uni?? al Equipo
                                 de Recuperaci??n de Sanji para rescatar a Sanji en Whole Cake Island y continu??
                                  con la tripulaci??n hasta el Pa??s de Wano .
                                 </p>
                        </div>
                    </div>


                    <div class="card" >
                        <img src="{{asset('img/portgas.jpg')}}" class="card_image" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Portgas D. Ace</h5>
                            <p class="card-text">fue el hermano mayor jurado de Luffy y Sabo
                                 y el hijo biol??gico del difunto Rey de los Piratas, Gol D.
                                 Roger, y Portgas D. Rouge.Ace fue adoptado por Monkey D.
                                 Garp, como hab??a pedido el mismo Roger antes de su ejecuci??n.
                                 Tambi??n fue el comandante de la 2?? divisi??n de los Piratas de Barbablanca
                                  y antiguo capit??n de los Piratas Spade.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="cards-list">

                    <div class="card" >
                        <img src="{{asset('img/sabo.jpg')}}" class="card_image" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sabo</h5>
                            <p class="card-text"> Sabo tambi??n conocido como el Emperador de las Llamas
                                es el jefe de personal del Ej??rcito Revolucionario y, como tal, n?? 2 de la organizaci??n.Es
                                hermano por juramento de Monkey D. Luffy y del fallecido Portgas D. Ace, y un anterior noble del
                                Reino de Goa.</p>
                        </div>
                    </div>

                    <div class="card" >
                        <img src="{{asset('img/yamato.jpg')}}" class="card_image" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Yamato</h5>
                            <p class="card-text">Yamato tambi??n conocida como Princesa Oni
                                es la hija del antiguo Emperador Kaidou.Entrenada desde joven para ser
                                 la heredera de Kaidou, Yamato desarroll?? en cambio una profunda admiraci??n
                                 por el samur??i Kozuki Oden. Tras su muerte, Yamato decidi?? ??convertirse?? en
                                  Oden, haci??ndose pasar por ??l y adoptando sus modales.
                                 </p>
                        </div>
                    </div>


                    <div class="card" >
                        <img src="{{asset('img/muerto.jpg')}}" class="card_image" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Brook</h5>
                            <p class="card-text">Es un esqueleto viviente que encontraron en un barco fantasma solo, porque
                                 hab??an envenenado a toda su anterior tripulaci??n. Es el consumidor de una fruta del diablo,
                                  m??s concretamente la fruta Yomi Yomi, y ahora es un no-muerto tra??do de vuelta al mundo
                                  de los vivos como un pseudo-inmortal, debido a sus poderes.
                                  Es el noveno miembro de la banda y el octavo en aceptar unirse a la banda de Luffy,.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="cards-list">

                    <div class="card" >
                        <img src="{{asset('img/chalotte.jpg')}}" class="card_image" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Charlotte Katakuri</h5>
                            <p class="card-text"> Charlotte Katakuri  es el segundo hijo var??n de la familia Charlotte
                                 y el tercero de los hermanos, adem??s es el mayor de sus hermanos mellizos Daifuku y Oven.
                                 Ejerce como uno de los tres comandantes sweet de los Piratas de Big Mom y de ministro de la harina
                                   en Totto Land; gobernando la isla Komugi.</p>
                        </div>
                    </div>

                    <div class="card" >
                        <img src="{{asset('img/cocodrile.jpg')}}" class="card_image" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Crocodile</h5>
                            <p class="card-text">Sir Crocodile
                                conocido como el Rey del Desierto
                                es un afamado pirata que form?? parte de los Siete Se??ores de la Guerra del Mar
                                y el fundador y expresidente en la sombra de la organizaci??n criminal Baroque Works,
                                donde adopt?? el nombre en clave de Mr. 0.
                                 </p>
                        </div>
                    </div>


                    <div class="card" >
                        <img src="{{asset('img/jinbe.jpg')}}" class="card_image" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Jinbe el Caballero del Mar</h5>
                            <p class="card-text">Jinbe el Caballero del Mar
                                 es el timonel de los Piratas de Sombrero de Paja, siendo el d??cimo miembro de la banda
                                 y el noveno en unirse.Es un gyojin tibur??n ballena
                                  que sirvi?? como antiguo capit??n de los Piratas del Sol
                                  y como miembro de los Siete Se??ores de la Guerra del Mar.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="cards-list">

                    <div class="card" >
                        <img src="{{asset('img/marco.jpg')}}" class="card_image" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Marco</h5>
                            <p class="card-text">Marco el Ave Inmortal
                                es el antiguo aprendiz y posterior comandante de la 1?? divisi??n de los Piratas
                                de Barbablanca. Debe su apodo a su habilidad para transformarse en un f??nix, con el poder de una zoan m??tica.</p>
                        </div>
                    </div>

                    <div class="card" >
                        <img src="{{asset('img/flamingo.jpg')}}" class="card_image" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Donquixote Doflamingo</h5>
                            <p class="card-text">es un antiguo Se??or de la Guerra del Mar
                                que reinaba en Dressrosa, y un anterior Noble Mundial. Hijo
                                de Donquixote Homing y hermano mayor de Donquixote Rosinante,
                                es un integrante de la Familia Donquixote, la familia real regente hace ochocientos a??os en el pa??s
                                 </p>
                        </div>
                    </div>


                    <div class="card" >
                        <img src="{{asset('img/corazon.jpg')}}" class="card_image" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Donquixote Rosinante</h5>
                            <p class="card-text">Donquixote Rosinante  fue un antiguo Noble Mundial descendiente de
                                 la familia Donquixote, siendo el segundo hijo de Donquixote Homing,
                                 adem??s de la segunda persona bajo el nombre clave Corazon .</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>




    </div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{asset('css/js.js')}}"></script>


  </body>
</html>


