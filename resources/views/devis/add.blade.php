<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <title>Nouvelle cotation</title>
</head>

<body>

    <div class="wrapper">
        <aside id="sidebar">
            @include('layout.asidebar')
        </aside>
        <div class="main">
            <header>
                @include('layout.header')
            </header>
            <div class="container my-5">
                <div class="content">
                    <form action="" class="py-3 px-3">
                        <h5 class="text-center">Nouvelle cotation</h5>
                        <div class="row">
                            <div class="form-group col-lg-4 col-sm-12 col-md-12 mb-3">
                                <label for="" class="form-label">client:</label>
                                <select name="" class="form-select" id="">
                                    <option value="" selected disabled>Sélectionner un client</option>
                                    <option value="">Teljaoui Mohamed</option>
                                    <option value="">ali test</option>
                                    <option value="">test mohamed</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-4 col-sm-12 col-md-12 mb-3">
                                <label for="" class="form-label">Date du devis:</label>
                                <input type="date" name="" id="" class="form-control">
                            </div>
                            <div class="form-group col-lg-4 col-sm-12 col-md-12 mb-3">
                                <label for="" class="form-label">Date d'échéance:</label>
                                <input type="date" name="" id="" class="form-control">
                            </div>
                            <div class="col-12 text-end">
                                <button class="button">Ajouter</button>
                            </div>
                            <div class="table-responsive py-1 px-3">
                                <table class="table align-middle ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Produit</th>
                                            <th class="text-center">QTY</th>
                                            <th class="text-center">Prix unitaire</th>
                                            <th class="text-center">Montant</th>
                                            <th class="text-center">action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                                <div class="col-12 d-flex justify-content-end gap-15">
                                    <input type="submit" value="Enregister" class="button">
                                    <input type="reset" value="Annuler" class="reset">
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
