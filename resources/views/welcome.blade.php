<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/8153488d88.js" crossorigin="anonymous"></script>
    <link href="https://stackpack.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>
        .bg-img{
            background-image: url('image/bg.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
            color: white;}
    </style>
</head>
<body>
<div class="side">
  @if (Route::has('login'))

      @if (Auth::check())
      <a href="{{ url('/home') }}" style="background:grey;">Forúm</a>
      <a href="{{ url('/myAccount') }}" style="background:orange">Minha Conta</a>
      <a href="{{ url('/logout') }}" style="background:red">Logout</a>
      @else
      <a href="{{ url('/login') }}" style="background:linear-gradient(110deg,#fcc05e,#fff387);">Login</a>
      <a href="{{ url('/register') }}" style="background:linear-gradient(110deg,#883d90,#d065db);">Register</a>
      <a href="{{ url('/sobrenos') }}" style="background:linear-gradient(110deg,#5337a8,#8c6de8);">Sobre Nos</a>
      @endif

  @endif
</div>
<div class="bg-img">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 mt-5">
                <center><h2><i>Bem-Vindo</i></h2></center>
            </div>
            <div class="row justify-content-end">
                <div class="col-md-6">
                    <p class="text-justify pr-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <svg style="pointer-events: none" class="wave" width="100%" height="50px" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 75">
        <defs>
            <style>
            .a {
              fill: none;
          }

          .b {
              clip-path: url(#a);
          }

          .c,
          .d {
              fill: #fff;
          }

          .d {
              opacity: 0.5;
              isolation: isolate;
          }
      </style>
      <clipPath id="a">
        <rect class="a" width="1920" height="75"></rect>
    </clipPath>
</defs>
<title>wave</title>
<g class="b">
    <path class="c" d="M1963,327H-105V65A2647.49,2647.49,0,0,1,431,19c217.7,3.5,239.6,30.8,470,36,297.3,6.7,367.5-36.2,642-28a2511.41,2511.41,0,0,1,420,48"></path>
</g>
<g class="b">
    <path class="d" d="M-127,404H1963V44c-140.1-28-343.3-46.7-566,22-75.5,23.3-118.5,45.9-162,64-48.6,20.2-404.7,128-784,0C355.2,97.7,341.6,78.3,235,50,86.6,10.6-41.8,6.9-127,10"></path>
</g>
<g class="b">
    <path class="d" d="M1979,462-155,446V106C251.8,20.2,576.6,15.9,805,30c167.4,10.3,322.3,32.9,680,56,207,13.4,378,20.3,494,24"></path>
</g>
<g class="b">
    <path class="d" d="M1998,484H-243V100c445.8,26.8,794.2-4.1,1035-39,141-20.4,231.1-40.1,378-45,349.6-11.6,636.7,73.8,828,150"></path>
</g>
</svg>
</div>
<div class="container mt-5">
    <div class="row align-items-center text-justify cont">

        <div class="col-md-4 card">
            <h3 class="pt-3">Transtornos</h3>
            <hr>
            <p class="p-2">Manifestação de emoções e comportamentos irregular (controle dos impulsos, modo de relacionamento, etc.)envolvendo vários aspectos da vida do... <a data-toggle="modal" data-target="#transtornoModal">Ver Mais</a></p>
        </div>
        <div class="col-md-4 card">
            <h3 class="pt-3">Esquizofrenia</h2>
                <hr>
                <p class="p-2">Percepção delirante. Uma percepção absolutamente normal recebe uma significação delirante, que ocorre de modo simultâneo ao ato perceptivo, em ger... <a data-toggle="modal" data-target="#EsquizofreniaModal">Ver Mais</a></p>
            </div>
            <div class="col-md-4 card">
                <h3 class="pt-3">TOC</h2>
                    <hr>
                    <p class="p-2">As síndromes obsessivas caracterizam-se por idéias, pensamentos, fantasias ou imagens persistentes, que surgem de forma recorrente na con... <a data-toggle="modal" data-target="#TOCModal">Ver Mais</a></p>
            </div>
          </div>
          <div class="row  align-items-center text-justify cont mt-5">
            <div class="col-md-4 card">
                <h3 class="pt-3">Transtornos</h3>
                <hr>
                <p class="p-2">Manifestação de emoções e comportamentos irregular (controle dos impulsos, modo de relacionamento, etc.)envolvendo vários aspectos da vida do... <a data-toggle="modal" data-target="#transtornoModal">Ver Mais</a></p>
            </div>
            <div class="col-md-4 card">
                <h3 class="pt-3">Transtornos</h3>
                <hr>
                <p class="p-2">Manifestação de emoções e comportamentos irregular (controle dos impulsos, modo de relacionamento, etc.)envolvendo vários aspectos da vida do... <a data-toggle="modal" data-target="#transtornoModal">Ver Mais</a></p>
            </div>
            <div class="col-md-4  card">
                <h3 class="pt-3">Transtornos</h3>
                <hr>
                <p class="p-2">Manifestação de emoções e comportamentos irregular (controle dos impulsos, modo de relacionamento, etc.)envolvendo vários aspectos da vida do... <a data-toggle="modal" data-target="#transtornoModal">Ver Mais</a></p>
            </div>
</div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg" id="transtornoModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><strong>Transtornos</strong></h5>
        <div class="modal-body mt-5">
            <p>- Surgem na infância ou na adolescência (não anula o fato de adultos ou idosos desenvolverem);</p>
            <p>- Manifestação de emoções e comportamentos irregular (controle dos impulsos, modo de relacionamento, etc.)envolvendo vários aspectos da vida do indivíduo. Isso não significa que qualquer episódio possa ser um transtorno de personalidade, a pessoa pode ter outros tipos de doença mental.</p>
            <p>- O modo que a pessoa vive não é adaptativo, tanto para ela quanto para as pessoas que convivem.</p>
            <p>- Não são lesões no cérebro (mas há casos que lesões cerebrais pode causar a mudança de personalidade)</p>
            <p>- Há algum grau de sofrimento (angústia, solidão, dificuldades no relacionamento vividas com amargura, etc.)</p>
            <p>- Mau desempenho ocupacional (trabalho, escola) e social (familia, amigos)</p>
            <p>-Classificações de transtornos segundo CID-10 (Código Internacional de Doenças) e DSM-IV (Diagnostic and Statistical Manual of Mental Disorders com modificações do autor) </p>
            <img src="image/quadro.png">
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<div class="modal fade bd-example-modal-lg" id="TOCModal" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><strong>TOC</strong></h5>
        <div class="modal-body mt-5">
            <p>As síndromes obsessivas caracterizam-se por idéias, pensamentos, fantasias ou imagens persistentes, que surgem de forma recorrente na consciência; são vivenciadas com angústia e como algo que “invade” a consciência. O indivíduo reconhece o caráter irracional e absurdo desses pensamentos, tentando, às vezes, neutralizá-los com outros pensamentos ou com atos e rituais específicos.
            Nas síndromes compulsivas, predominam os comportamentos e rituais repetitivos, como lavar as mãos inúmeras vezes, tomar muitos banhos, verificar se as portas estão trancadas por dezenas de vezes, etc., assim como por atos mentais como repetir palavras mentalmente em silêncio, fazer determinadas contas, rezar, etc., em geral em resposta a uma idéia obsessiva (“Devo estar com AIDS ou sífilis; então tenho que me lavar constantemente.”). Os comportamentos e os atos compulsivos também podem surgir como forma de cumprir regras mágicas que precisam ser rigidamente seguidas. Outras razões para os atos e os rituais compulsivos são pensamentos mágicos que vinculam a realização do ato compulsivo com o afastamento de algum evento temível ou indesejado (“Se eu der 15 voltas no quarteirão antes de entrar em casa, ninguém da família morrerá proximamente”).</p>
            <p>É ainda o poeta Drummond quem fala dessa angustiosa sensação de sentir-se sujo, contaminado:</p>
            <p>Minha mão está suja.</p>
            <p> Preciso cortá-la.</p>
            <p>Não adianta lavar.</p>
            <p>A água está podre.</p>
            <p>Nem ensaboar.</p>
            <p>O sabão é ruim.</p>
            <p>A mão está suja,</p>
            <p>Suja há muitos anos</p>
        </p>
    </div>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<div class="modal fade bd-example-modal-lg" id="EsquizofreniaModal" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><strong>Esquizofrenia</strong></h5>
        <div class="modal-body mt-5">

            <p>- Percepção delirante. Uma percepção absolutamente normal recebe uma significação delirante, que ocorre de modo simultâneo ao ato perceptivo, em geral de forma abrupta, como uma espécie de “revelação”.</p>
            <p>- Alucinações auditivas características. São as vozes que comentam e/ou comandam a ação do paciente.</p>
            <p>- Eco do pensamento ou sonorização do pensamento (Gedan-kenlautwerden). O paciente escuta seus pensamentos ao pensá-los.</p>
            <p>- Difusão do pensamento. Neste caso, o doente tem a sensação de que seus pensamentos são ouvidos ou percebidos claramente pelos outros, no momento em que os pensa.</p>
            <p>- Roubo do pensamento. Experiência na qual o indivíduo tem a sensação de que seu pensamento é inexplicavelmente extraído de sua mente, como se fosse roubado.</p>
            <p>- Vivências de influência na esfera corporal ou ideativa. Aqui, dois tipos de vivências de influência são mais significativos:</p>

            <p>Vivências de influência corporal. São experiências nas quais o paciente sente que uma força ou um ser externo age sobre seu corpo, sobre seus órgãos, emitindo raios, influenciando as funções corporais,etc.</p>
            <p>Vivências de influência sobre o pensamento. Referem-se à experiência de que algo influencia seus pensamentos, o paciente recebe pensamentos impostos de fora, pensamentos feitos, postos em seu cérebro,etc. Também as vivências corporais ou ideativas têm a qualidade de serem experimentadas como feitas, como impostas de fora.</p>

        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<div class="bg-img mt-5">
    <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left p-2 ">
          <div class="col-md-12">
            <div class="social-menu mt-2">
              <center><h4>Contato</h4></center>
              <hr>
                <ul class="justify-content-center">
                  <li><a href="#"><i class="fab fa-facebook-f"></i> </a> </li>
                  <li><a href="#"><i class="fab fa-github"></i> </a> </li>
                  <li><a href="#"><i class="fas fa-mail-bulk"></i> </a> </li>
                </ul>
            </div>
          </div>

              </div>
          </div>
        </div>
        </body>
        </html>
