@extends('AgenceImmobiliereCascade')

@section('content')
<div class="container-fluid pb-2  pt-2 text-center bg-secondary-subtle">
    <form>
        <div class="row g-3">
            <div class="col">
                <input type="text" class="form-control" placeholder="Surface" aria-label="Surface">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Nombre de pièces" aria-label="Nombre de pièces">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Budget" aria-label="Budget">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Mot clé" aria-label="Mot clé">
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Rechercher</button>
            </div>
        </div>
    </form>
</div>
<div class="container-fluid pb-2  pt-2">
    <div class="row justify-content-md-around">
        @for($i = 0; $i < 8; $i++)
            <div class="card mb-3 mt-3" style="width: 20rem;">
                <img src="Images/Pas_d'image_disponible.png" class="card-img-top" alt="Image du bien">
                <div class="card-body">
                    <h5 class="card-title">Charmante maison</h5>

                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">40 m2 - Paris</li>
                    <li class="list-group-item">45 000 euros</li>
                </ul>
            </div>
        @endfor
    </div>
</div>
<div class="container-fluid pb-2  pt-2">
    <nav aria-label="...">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
                <a class="page-link">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item " aria-current="page">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>
@endsection