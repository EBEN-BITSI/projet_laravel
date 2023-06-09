<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ajout</title>
        <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
        <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
        <link rel="stylesheet" href={{ asset('css/bg.css') }}>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div id="bgformation_referentiel">
        <div class="text-center bg-secondary ">
            <h3>Nombre de candidat par referentiel</h3>
        </div>
                <div class="mt-6">
                    <br>
                    @foreach ($referentiels as $referentiel)
                         <div class="container text-center">
                            <div  > <b>{{ $referentiel->libelleReferentiel }}: </b> </div>
                            <div >{{ $referentiel->formations_count }} formations </div>
                         </div>
                    @endforeach
                </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js"></script>
        <script src="/js/sc.js"></script>
        </div>
    </body>
</html>
