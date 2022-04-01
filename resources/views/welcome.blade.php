<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />

    <title>Ingenio</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-amarillo tex_black fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="tex_black">Ingenio</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Carreras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Empresas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Nosotros</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <!-- <button id="btn-mode" class="btn btn-outline-light">Modo</button> -->
                </span>
            </div>
        </div>
    </nav>
    <div class="container-fluid blue" id="contenedor">
        <section class="contenedor d-flex flex-column" style="height: 50vh; margin-top: 5em">
            <img src="{{ asset('/img/code.jpg') }}" alt="" id="img-cont">
            <div class="centrado row justify-content-around align-items-center mt-4 text">
                <div class="col-sm-12 col-md-4">
                    <h1 class="blanco">
                        <strong>
                            Tu <span class="ama">Futuro</span> no <br />
                            es un juego de azar <br />
                        </strong>
                    </h1>
                    <br />
                    <p class="blanco" style="font-size: 1.3em">
                        <span class="ama">Ingenio</span> esta contigo en todo tu proceso
                        <br />
                        de carrera hasta que consigamos tu objetivo.
                    </p>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="d-flex align-items-center flex-column bd-highlight mb-3" style="height: 100%">
                        <div class="mt-auto p-2 bd-highlight">
                            <a href="#info" class="btn btn-primary blueCont w-100 rounded-pill">Mas informacion</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="info" style="min-height: 70vh">
            <div class="row justify-content-around d-flex align-items-center">
                <div class="col-sm-10 col-md-3 m-2">
                    <h3 class="blanco text-center">
                        <strong>Con <span class="ama">Ingenio</span> todo es posible</strong>
                    </h3>
                </div>
                <div class="col-sm-10 col-md-3 m-2">
                    <h4 class="blanco">Capacitación técnica altamente competitiva</h4>
                    <p class="blanco">
                        Un grupo de expertos estaran contigo en tu poceso de aprendizje
                    </p>
                </div>
                <div class="col-sm-10 col-md-3 m-2">
                    <h4 class="blanco">Fortalecimineto de soft skills</h4>
                    <p class="blanco">
                        grandes desarrolladores crean grandes ideas, grandes humanos
                        transforman el mundo
                    </p>
                </div>
                <div class="col-sm-10 col-md-3 m-2">
                    <h4 class="blanco">Acompañamiento en todo tu proceso</h4>
                    <p class="blanco">
                        <span class="ama">Ingenio</span> estará contigo desde el primer
                        día hasta ver que tu exito se alcanzado
                    </p>
                </div>
                <div class="col-sm-10 col-md-3 m-2">
                    <h4 class="blanco">Objetivo mano a mano</h4>
                    <p class="blanco">
                        Tus objetivos tambien son nuestros, te daremos la mejor solución a
                        tus necesidades
                    </p>
                </div>
                <div class="col-sm-10 col-md-3 m-2">
                    <h4 class="blanco">El mundo real</h4>
                    <p class="blanco">
                        No solo te ayudamos con el desarrollo, te guiaremos en todo lo
                        necesario para tis procesos de seleccion
                    </p>
                </div>
            </div>
        </section>

        <section id="contacto">
            <div class="row justify-content-center">
                <div class="col-sm-11 col-md-6 gray p-4 rounded-3">
                    <form id="form_contact" class="form-floating">
                        @csrf
                        <h2 class="text-center blanco">Contacta con nosotros</h2>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="mi nombre"
                                required />
                            <label for="name">Nombre</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="name@example.com" required />
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="phone" class="form-control" id="phone" name="phone" placeholder="444444444"
                                required />
                            <label for="phone">Telefono</label>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="comentario" id="comment" name="comment" style="height: 100px"></textarea>
                            <label for="coment">Comentario</label>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $("#btn-mode").click(function(e) {
                e.preventDefault();
                $(document).toggleClass("blue");
            });
            $('#form_contact').submit(function(e) {
                e.preventDefault();
                loader();
                let datos = $(this).serialize();
                $.ajax({
                    type: "post",
                    url: "<?= route('contact') ?>",
                    data: datos,
                    dataType: "JSON",
                    success: function(res) {
                        if (res.status == 200) {
                            $('.form-control').val('');
                            Swal.fire(
                                'Datos enviados',
                                'Una persona de ingenio se pondra en contacto contigo.',
                                'success'
                            );
                        }
                    }
                });
            });
            function loader() {
                Toast.fire({
                    icon: 'info',
                    title: 'Cargando...',
                });
            }
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2500,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });
        });
    </script>
</body>

</html>
