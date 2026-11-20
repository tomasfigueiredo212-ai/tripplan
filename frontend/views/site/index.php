<?php

$this->title = 'TripPlan';

$this->registerCssFile('@web/css/style.css');
$this->registerJsFile('@web/js/main.js');

?>
<?php if (Yii::$app->request->get('erro') === 'sem_permissao'): ?>
<div class="alert alert-warning">
    Não tem permissões para aceder ao Backoffice.
</div>
<?php endif; ?>




<!-- carregamento -->
<div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
</div>
<!-- fim do carregamento -->
<!-- cabeçalho -->
<header>
    <!-- conteúdo interno do cabeçalho -->
    <!-- <div class="header">
        <div class="header_white_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header_information">
                            <ul>
                                <li><img src="images/1.png" alt="#"/> 145.street road new York</li>
                                <li><img src="images/2.png" alt="#"/> +71  5678954378</li>
                                <li><img src="images/3.png" alt="#"/> Demo@hmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo"> <a href="index.html"><img src="images/logoTriplan1.png" alt="#"></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                    <li class="active"> <a href="#">Início</a> </li>
                                    <li> <a href="#about">Sobre</a> </li>
                                    <li><a href="#travel">Viagens</a></li>
                                    <li><a href="#blog">Blogue</a></li>
                                    <li><a href="#contact">Contacte-nos</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- fim do conteúdo interno do cabeçalho -->
</header>
<!-- fim do cabeçalho -->
<section >
    <div class="banner-main">
        <img src="images/banner.jpg" alt="#"/>
        <div class="container">
            <div class="text-bg">
                <h1>Viaje<br><strong class="white">Com TripPlan</strong></h1>
                <div class="button_section"> <a class="main_bt" href="#">Ler mais</a>  </div>
                <div class="container">
                    <form class="main-form">
                        <h3>Encontre a sua viagem</h3>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <label >Palavras-chave</label>
                                        <input class="form-control" placeholder="" type="text" name="">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <label >Categoria</label>
                                        <select class="form-control" name="Any">
                                            <option>Qualquer</option>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <label >Preço mínimo</label>
                                        <input class="form-control" placeholder="00.0" type="text" name="00.0">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <label >Duração</label>
                                        <input class="form-control" placeholder="Qualquer" type="text" name="Any">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <label >Data</label>
                                        <input class="form-control" placeholder="Qualquer" type="date" name="Any">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <label >Preço máximo</label>
                                        <input class="form-control" placeholder="00.0" type="text" name="00.0">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                <a href="#">Pesquisar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- sobre -->
<div id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="titlepage">
                    <h2>Sobre a nossa agência de viagens</h2>
                    <span> É um facto conhecido que um leitor se distrai com o conteúdo legível de uma página ao observar a sua apresentação. O objetivo de utilizar texto de preenchimento é criar uma distribuição de letras semelhante à de um texto normal.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="about-box">
                        <p> <span>Existem muitas versões de textos de preenchimento disponíveis, mas a maioria foi alterada de alguma forma, com humor ou palavras aleatórias que não parecem credíveis. Se utilizar um texto deste tipo, certifique-se de que o conteúdo é adequado.Existem muitas versões de textos de preenchimento disponíveis, mas a maioria foi alterada de alguma forma, com humor ou palavras aleatórias que não parecem credíveis. Se utilizar um texto deste tipo, certifique-se de que o conteúdo é adequado.</span></p>

                    </div>
                </div>
            </div>
        </div>
        <a href="#">Ler mais</a>
    </div>
</div>
<!-- fim da secção sobre -->
<!-- viagens -->
<div id="travel" class="traveling">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="titlepage">
                    <h2>Escolha ofertas de viagem</h2>
                    <span> É um facto conhecido que um leitor se distrai com o conteúdo legível de uma página ao observar a sua apresentação. O objetivo de utilizar texto de preenchimento é criar uma distribuição de letras semelhante à de um texto normal.</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="traveling-box">
                    <i><img src="icon/travel-icon.png" alt="icon"/></i>
                    <h3>Diferentes países</h3>
                    <p> texto de preenchimento que pode utilizar para apresentar o conteúdo da sua viagem </p>
                    <div class="read-more">
                        <a  href="#">Ler mais</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="traveling-box">
                    <i><img src="icon/travel-icon2.png" alt="icon"/></i>
                    <h3>Passeios pelas montanhas</h3>
                    <p> texto de preenchimento que pode utilizar para apresentar o conteúdo da sua viagem </p>
                    <div class="read-more">
                        <a  href="#">Ler mais</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="traveling-box">
                    <i><img src="icon/travel-icon3.png" alt="icon"/></i>
                    <h3>Passeios de autocarro</h3>
                    <p> texto de preenchimento que pode utilizar para apresentar o conteúdo da sua viagem </p>
                    <div class="read-more">
                        <a  href="#">Ler mais</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="traveling-box">
                    <i><img src="icon/travel-icon4.png" alt="icon"/></i>
                    <h3>Férias de verão</h3>
                    <p> texto de preenchimento que pode utilizar para apresentar o conteúdo da sua viagem </p>
                    <div class="read-more">
                        <a  href="#">Ler mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fim da secção de viagens -->
<!-- Londres -->
<div class="London">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Fim de semana em Nova Iorque e Londres</h2>
                    <span> É um facto conhecido que um leitor se distrai com o conteúdo legível de uma página ao observar a sua apresentação. O objetivo de utilizar texto de preenchimento é criar uma distribuição de letras semelhante à de um texto normal.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="London-img">
            <figure><img src="images/London.jpg" alt="img"/></figure>
        </div>
    </div>
</div>
<!-- fim da secção Londres -->
<!-- passeios -->
<div class="Tours">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Os melhores passeios</h2>
                    <span> É um facto conhecido que um leitor se distrai com o conteúdo legível de uma página ao observar a sua apresentação. O objetivo de utilizar texto de preenchimento é criar uma distribuição de letras semelhante à de um texto normal.</span>
                </div>
            </div>
        </div>
        <section id="demos">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <img class="img-responsive" src="images/1.jpg" alt="#" />
                            <h3>Viagem de férias</h3>
                            <p>Existem várias versões de textos de preenchimento, mas este conteúdo deve ser substituído pela descrição real do passeio.</p>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/2.jpg" alt="#" />
                            <h3>Nova Iorque</h3>
                            <p>Existem várias versões de textos de preenchimento, mas este conteúdo deve ser substituído pela descrição real do passeio.</p>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/3.jpg" alt="#" />
                            <h3>Londres</h3>
                            <p>Existem várias versões de textos de preenchimento, mas este conteúdo deve ser substituído pela descrição real do passeio.</p>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/2.jpg" alt="#" />
                            <h3>Viagem de férias</h3>
                            <p>Existem várias versões de textos de preenchimento, mas este conteúdo deve ser substituído pela descrição real do passeio.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- fim da secção de passeios -->
<!-- incrível -->
<div class="amazing">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="amazing-box">
                    <h2>Incrível passeio por Londres</h2>
                    <span>Existem muitas versões de textos de preenchimento disponíveis, mas a maioria foi alterada de alguma forma, com humor ou palavras aleatórias que não parecem credíveis. Se utilizar um texto deste tipo, certifique-se de que o conteúdo é adequado.</span>
                    <a href="#">Reserve agora</a><a href="#">Saber mais</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fim da secção incrível -->
<!-- o nosso blogue -->
<div id="blog" class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>O nosso blogue</h2>
                    <span>O texto de preenchimento apresenta uma distribuição de letras semelhante à de um texto normal.</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="blog-box">
                    <figure><img src="images/blog-image0.jpg" alt="#"/>
                        
                    </figure>
                    <div class="travel">
                        <span>Publicado por: Agência de viagens</span>
                        <p><strong class="Comment"> 06 </strong> Comentários</p>
                        <p><strong class="like">05 </strong>Gostos</p>
                    </div>
                    <h3>Incrível passeio por Londres</h3>
                    <p> É um facto conhecido que um leitor se distrai com o conteúdo legível de uma página ao observar a sua apresentação. O objetivo de utilizar texto de preenchimento é criar uma distribuição de letras semelhante à de um texto normal. as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="blog-box">
                    <figure><img src="images/blog-image.jpg" alt="#"/>
                        
                    </figure>
                    <div class="travel">
                        <span>Publicado por: Agência de viagens</span>
                        <p><strong class="Comment"> 06 </strong> Comentários</p>
                        <p><strong class="like">05 </strong>Gostos</p>
                    </div>
                    <h3>Incrível passeio por Londres</h3>
                    <p> É um facto conhecido que um leitor se distrai com o conteúdo legível de uma página ao observar a sua apresentação. O objetivo de utilizar texto de preenchimento é criar uma distribuição de letras semelhante à de um texto normal. as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fim do nosso blogue -->
<!-- rodapé -->
<footer>
    <div id="contact" class="footer">
        <div class="container">
            <div class="row pdn-top-30">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <ul class="location_icon">
                        <li> <a href="#"><img src="icon/facebook.png"></a></li>
                        <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                        <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                        <li> <a href="#"><img src="icon/instagram.png"></a></li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="Follow">
                        <h3>CONTACTE-NOS</h3>
                        <span>123 Second Street Fifth <br>Avenue,<br>
                        Manhattan, New York<br>
                        +987 654 3210</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="Follow">
                        <h3>LIGAÇÕES ADICIONAIS</h3>
                        <ul class="link">
                            <li> <a href="#">Sobre nós</a></li>
                            <li> <a href="#">Termos e condições</a></li>
                            <li> <a href="#"> Política de privacidade</a></li>
                            <li> <a href="#">Notícias</a></li>
                            <li> <a href="#"> Contacte-nos</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="Follow">
                        <h3> Contacto</h3>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="Newsletter" placeholder="Nome" type="text">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="Newsletter" placeholder="E-mail" type="text">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <textarea class="textarea" placeholder="Comentário" type="text">Comentário</textarea>
                            </div>
                        </div>
                        <button class="Subscribe">Enviar</button>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>Direitos de autor © 2019. Todos os direitos reservados por <a href="https://html.design/">Modelos HTML gratuitos</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- fim do rodapé -->
<!-- ficheiros JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- barra lateral -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<!-- JavaScript -->
<script src="js/owl.carousel.js"></script>
<script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    })
</script>