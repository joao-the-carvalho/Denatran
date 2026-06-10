<x-layouthome>
    <x-slot:title>
        Home
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <div>
                    <h1>Bem vindo(a) ao Denatran, seu sistema de registro de ocorrências de trânsito de São Paulo!</h1>
                    <br>
                    <p>Em nosso site, você pode registrar ocorrências por volta da cidade de São Paulo, e também checaroutros lugares da cidade que estão em trânsito.</p>
                    <div class="carousel w-full">
                    <div id="slide1" class="carousel-item relative w-full">
                        <img
                        src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/18/99/d8/ed/paulista.jpg?w=1200&h=-1&s=1"
                        class="w-full" alt="Avenida Paulista" />
                        <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                        <a href="#slide4" class="btn btn-circle">❮</a>
                        <a href="#slide2" class="btn btn-circle">❯</a>
                        </div>
                    </div>
                    <div id="slide2" class="carousel-item relative w-full">
                        <img
                        src="https://media-manager.noticiasaominuto.com.br/960/naom_59ccce8b5b2c8.webp"
                        class="w-full" alt="Marginal Tietê"/>
                        <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                        <a href="#slide1" class="btn btn-circle">❮</a>
                        <a href="#slide3" class="btn btn-circle">❯</a>
                        </div>
                    </div>
                    <div id="slide3" class="carousel-item relative w-full">
                        <img
                        src="https://img.band.com.br/image/2023/07/18/marginal-pinheiros-142158.jpg"
                        class="w-full" alt="Marginal Pinheiros" />
                        <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                        <a href="#slide2" class="btn btn-circle">❮</a>
                        <a href="#slide4" class="btn btn-circle">❯</a>
                        </div>
                    </div>
                    <div id="slide4" class="carousel-item relative w-full">
                        <img
                        src="https://s2-oglobo.glbimg.com/AwXdT7XaTIb2ATD8__SLUa1c-aU=/0x0:1024x683/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_da025474c0c44edd99332dddb09cabe8/internal_photos/bs/2023/3/j/fyyNvmQ2SKSuUkIwi5yg/engarrafamento-tunel.jpeg"
                        class="w-full" Alt="Avenida Rebouças"/>
                        <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                        <a href="#slide3" class="btn btn-circle">❮</a>
                        <a href="#slide1" class="btn btn-circle">❯</a>
                        </div>
                    </div>
                    </div>
                    <p>Comece agora a contribuir para todos os motoristas!</p><br>
                    <div class="navbar-center gap-2">
                        <a href="/ocorrencias" class="btn btn-primary btn-sm">Fazer Ocorrências</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouthome>