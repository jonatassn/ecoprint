<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}"> --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
        <title>Ecoprint</title>

    </head>
    <body>
        <div class="container">
            <div class="menu-lateral">
                <div class="titulo">
                    <h1>Ecoprint</h1>
                </div>

                <div class="separador"></div>

                <div class="itens-menu">
                    <div class="item-menu">
                        <h2>Dashboard</h2>
                    </div>
                </div>
            </div>

            <div class="conteudo">
                <div class="cabecalho">
                    <div class="titulo-pagina">
                        <h2>Dashboard</h2>
                    </div>

                    <div class="autenticacao">
                        <a href="{{ route('login') }}">Login</a>
                    </div>
                </div>

                <div class="conteudo-geral">
                    <div class="quem-somos">
                        <h1>Ecoprint</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                            Autem expedita consectetur cumque ex rerum vitae tenetur 
                            ipsam quis quasi maxime nisi laboriosam exercitationem 
                            distinctio dolorum blanditiis laudantium, quibusdam, iusto vel!</p>
                    </div>
                    <div class="separador"></div>
                    <div class="projeto">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                            Autem expedita consectetur cumque ex rerum vitae tenetur 
                            ipsam quis quasi maxime nisi laboriosam exercitationem 
                            distinctio dolorum blanditiis laudantium, quibusdam, iusto vel!</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                            Autem expedita consectetur cumque ex rerum vitae tenetur 
                            ipsam quis quasi maxime nisi laboriosam exercitationem 
                            distinctio dolorum blanditiis laudantium, quibusdam, iusto vel!</p>
                    </div>
                    <div class="rodape">
                        <h3>Ecoprint &copy; 2020</h3>
                        <h3>Design por <a href="https://github.com/jonatassn">Jonatassn</h3>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
