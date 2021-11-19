<!DOCTYPE html>
<html lang="pt-br" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>CEDUP Diomício Freitas</title>
</head>
<body>
    <?php
        include "components/header.php";
    ?>
    <main>
        <section class="hero">
            <div class="overlay">
                <div class="hero-information">
                    <h1>CEDUP Diomício Freitas</h1>
                    <p>Aqui construímos o seu futuro. Venha estudar conosco!</p>
                    <a href="cursos.php"><button class="btn-hero">BRILHE COM A GENTE</button></a>
                </div>
            </div>
        </section>
        <section class="cursos-cedup" id="cursos">
            <div class="arrow-down"><i class="fas fa-arrow-down"></i></div>
            <div class="container">
                <div class="wrapper-cursos">
                    <div class="cursos-title">
                        <h2>Cursos</h2>
                        <p>Alguns cursos que o CEDUP Diomício Freitas fornece.</p>
                    </div>
                    <div class="list-cursos">
                        <div class="box-curso">
                            <img src="images/internet.svg" alt="">
                            <h3>Informática para Internet (Médio)</h3>
                            <p>O curso de Informática para Internet tem por objetivo formar um profissional que desenvolve sistemas e... </p>
                            <a href="cursos.php#infoparanet"><button class="btn-curso">DETALHES</button></a>
                        </div>
                        <div class="box-curso">
                            <img src="images/vendas.svg" alt="">
                            <h3>Vendas (Médio)</h3>
                            <p>Técnico em Vendas – Oferecido a partir de 2010, o Técnico em Vendas, eixo tecnológico de Gestão e Negócios, é um profissional...</p>
                            <a href="cursos.php#vendas"><button class="btn-curso">DETALHES</button></a>
                        </div>
                        <div class="box-curso">
                            <img src="images/mecanica.svg" alt="">
                            <h3>Mecânica (Médio)</h3>
                            <p>O Técnico em Mecânica, eixo tecnológico de processos Industriais, é um profissional com competências e habilidades... </p>
                            <a href="cursos.php#mecanica"><button class="btn-curso">DETALHES</button></a>
                        </div>
                        <div class="box-curso">
                            <img src="images/enfermagem.svg" alt="">
                            <h3>Enfermagem (Pós Médio)</h3>
                            <p>O Técnico em Enfermagem é um profissional da área de saúde, integrante da equipe de enfermagem...</p>
                            <a href="cursos.php#enfermagem"><button class="btn-curso">DETALHES</button></a>
                        </div>
                    </div>
                    <a href="cursos.php"><button class="btn-cursos">VER TODOS OS CURSOS</button></a>
                </div>
            </div>
        </section>
        <section class="institucional" id="institucional">
            <div class="container">
                <div class="institucional-title">
                    <h2>Institucional</h2>
                    <p>Quer conhecer mais sobre o CEDUP Diomício Freitas? Visualize nosso institucional.</p>
                </div>
                <div class="institucional-wrapper">
                    <div class="institucional-wrapper-2">
                        <div class="box-institucional">
                            <div class="logo-institucional">
                                <img src="images/logo_pdf.png" alt="">
                            </div>
                            <div class="institucional-wrapper-information">
                                <div class="institucional-title-wrapper">
                                    <p class="institucional-title-single">
                                        Associação de pais e professores
                                    </p>
                                    <p class="institucional-title-information">
                                        Órgão de representação de pais e professores na escola... 
                                    </p>
                                </div>
                                <div class="institucional-information">
                                    <a href="pdf/associação de pais e professores.pdf" target="_blank"><button>Visualizar</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="box-institucional">
                            <div class="logo-institucional">
                                <img src="images/logo_pdf.png" alt="">
                            </div>
                            <div class="institucional-wrapper-information">
                                <div class="institucional-title-wrapper">
                                    <p class="institucional-title-single">
                                        Calendário
                                    </p>
                                    <p class="institucional-title-information">
                                        Calendário escolar 2021 CEDUP Diomício Freitas
                                    </p>
                                </div>
                                <div class="institucional-information">
                                    <a href="pdf/Calendario.pdf" target="_blank"><button>Visualizar</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="box-institucional">
                            <div class="logo-institucional">
                                <img src="images/logo_pdf.png" alt="">
                            </div>
                            <div class="institucional-wrapper-information">
                                <div class="institucional-title-wrapper">
                                    <p class="institucional-title-single">
                                        Conselho deliberativo escolar
                                    </p>
                                    <p class="institucional-title-information">
                                        O Conselho Deliberativo Escolar é um órgão colegiado de caráter consultivo...
                                    </p>
                                </div>
                                <div class="institucional-information">
                                    <a href="pdf/conselho deliberativo escolar.pdf" target="_blank"><button>Visualizar</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="box-institucional">
                            <div class="logo-institucional">
                                <img src="images/logo_pdf.png" alt="">
                            </div>
                            <div class="institucional-wrapper-information">
                                <div class="institucional-title-wrapper">
                                    <p class="institucional-title-single">
                                        Direção
                                    </p>
                                    <p class="institucional-title-information">
                                        Diretor e coordernação.
                                    </p>
                                </div>
                                <div class="institucional-information">
                                    <a href="pdf/Direção.pdf" target="_blank"><button>Visualizar</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="box-institucional">
                            <div class="logo-institucional">
                                <img src="images/logo_pdf.png" alt="">
                            </div>
                            <div class="institucional-wrapper-information">
                                <div class="institucional-title-wrapper">
                                    <p class="institucional-title-single">
                                        Histórico
                                    </p>
                                    <p class="institucional-title-information">
                                        O CEDUP Diomício Freitas iniciou suas atividades em setembro...
                                    </p>
                                </div>
                                <div class="institucional-information">
                                    <a href="pdf/histórico CEDUP.pdf" target="_blank"><button>Visualizar</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="box-institucional">
                            <div class="logo-institucional">
                                <img src="images/logo_pdf.png" alt="">
                            </div>
                            <div class="institucional-wrapper-information">
                                <div class="institucional-title-wrapper">
                                    <p class="institucional-title-single">
                                        Projeto político pedagógico
                                    </p>
                                    <p class="institucional-title-information">
                                        A educação é um compromisso do Estado, respaldado pela sociedade...
                                    </p>
                                </div>
                                <div class="institucional-information">
                                    <a href="pdf/ppp .pdf" target="_blank"><button>Visualizar</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="formados">
            <div class="img-formados">
                <h2>"Sonhe alto"</h2>
            </div>
        </section>
        <section class="news" id="informativo">
            <div class="container">
                <div class="news-title">
                    <h2>Informativos</h2>
                    <p>Fique ligado sobre tudo o que está acontecendo em nosso ambiente escolar.</p>
                </div>
                <div class="news-wrapper">
                    <div class="box-news-wrapper">
                        <div class="box-news">
                            <p>12 de Março de 2021</p>
                            <a href="inside_informativos.php#informativo">
                                <h3>Título da informação</h3>
                                <img src="images/meio.jpg" alt="">
                            </a>
                        </div>
                        <div class="box-news">
                            <p>12 de Março de 2021</p>
                            <a href="inside_informativos.php#informativo">
                                <h3>Título da informação</h3>
                                <img src="images/meio_2.jpg" alt="">
                            </a>
                        </div>
                        <div class="box-news">
                            <p>12 de Março de 2021</p>
                            <a href="inside_informativos.php#informativo">
                                <h3>Título da informação</h3>
                                <img src="images/meio_3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="btn-news-wrapper">
                        <button class="btn-news"><a href="informativos.php#informativo">MAIS INFORMATIVOS</a></button>
                    </div>
                </div>
            </div>
        </section>
        <section class="edital" id="editais">
            <div class="container">
                <div class="edital-title">
                    <h2>Editais</h2>
                    <p>Veja as determinações, avisos, citações e demais comunicados de ordem oficial pela secretaria do estado.</p>
                </div>
                <div class="edital-wrapper">
                    <div class="box-edital-wrapper">
                        <div class="box-edital">
                            <div class="logo-edital">
                                <img src="images/Nova-Logo-Marca-F-PNG.png" alt="">
                            </div>
                            <div class="information-edital">
                                <h4>Lorem ipsum dolor maki sliw</h4>
                                <p>nobis laborum numquam vel autem unde nulla aperiam totam, asperiores sunt maiores fugit voluptas rerum!</p>
                                <p>nobis laborum numquam vel</p>
                            </div>
                        </div>
                        <div class="box-edital middle">
                            <div class="logo-edital">
                                <img src="images/logo_pdf.png" alt="">
                            </div>
                            <div class="information-edital">
                                <h4>Digital educação profissionalizante</h4>
                                <p>A Secretariade Estado da Educação de Santa Catarina, doravante denominada SED/SC, representada...</p>
                                <p><a class="link" href="pdf/EDITAL-EDUCACAO PROFISSIONALIZANTE.pdf" target="_blank">Visualizar</a></p>
                            </div>
                        </div>
                        <div class="box-edital">
                            <div class="logo-edital">
                                <img src="images/Nova-Logo-Marca-F-PNG.png" alt="">
                            </div>
                            <div class="information-edital">
                                <h4>Lorem ipsum dolor maki sliw</h4>
                                <p>nobis laborum numquam vel autem unde nulla aperiam totam, asperiores sunt maiores fugit voluptas rerum!</p>
                                <p>nobis laborum numquam vel</p>
                            </div>
                        </div>
                        <div class="box-edital">
                            <div class="logo-edital">
                                <img src="images/Nova-Logo-Marca-F-PNG.png" alt="">
                            </div>
                            <div class="information-edital">
                                <h4>Lorem ipsum dolor maki sliw</h4>
                                <p>nobis laborum numquam vel autem unde nulla aperiam totam, asperiores sunt maiores fugit voluptas rerum!</p>
                                <p>nobis laborum numquam vel</p>
                            </div>
                        </div>
                        <div class="box-edital middle">
                            <div class="logo-edital">
                                <img src="images/Nova-Logo-Marca-F-PNG.png" alt="">
                            </div>
                            <div class="information-edital">
                                <h4>Lorem ipsum dolor maki sliw</h4>
                                <p>nobis laborum numquam vel autem unde nulla aperiam totam, asperiores sunt maiores fugit voluptas rerum!</p>
                                <p>nobis laborum numquam vel</p>
                            </div>
                        </div>
                        <div class="box-edital">
                            <div class="logo-edital">
                                <img src="images/Nova-Logo-Marca-F-PNG.png" alt="">
                            </div>
                            <div class="information-edital">
                                <h4>Lorem ipsum dolor maki sliw</h4>
                                <p>nobis laborum numquam vel autem unde nulla aperiam totam, asperiores sunt maiores fugit voluptas rerum!</p>
                                <p>nobis laborum numquam vel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
        include_once 'components/footer.php';
    ?>
    <div class="run-the-top">
        <i class="fas fa-chevron-up"></i>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/geral.js"></script>
</body>
</html>