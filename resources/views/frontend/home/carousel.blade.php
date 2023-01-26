<section id="hero" class="text-center">
    <div class="container-fluid hero-image" style="background: url('{{ Vite::asset('resources/images/heroTP.png') }}');">
    {{--<div class="container py-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg" style="background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(95,33,118,0.5) 25%, rgba(95,33,118,0.75) 50%, rgba(95,33,118,0.5) 75%, rgba(255,255,255,0) 100%); background-size: cover;">
            <div class="col-lg-12 p-3 p-lg-5 pt-lg-3">

            </div>
        </div>
    </div>--}}

        {{--<div class="row d-flex h-100 justify-content-center align-items-center">
            <div class="col-12">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-bg-dark">Hunger? Dann bestellen sie ihr Essen einfach online.</div>
                        <div class="col-12 py-3">
                            <form action="">
                                @csrf
                                <div class="text-bg-light px-2 py-3 d-flex flex-column" style="text-align: start; border: 3px solid #5F2167; border-radius: 5px; background-color: #fff;">
                                    <div>Einfach online bestellen!</div>
                                    <div class="row">
                                        <div class="col-7">
                                            <label for="ort" class="form-label visually-hidden">Postleitzahl</label>
                                            <input type="text" class="form-control form-control-sm" id="ort" name="ort" placeholder="Deine Postleitzahl" autocomplete="off">
                                        </div>
                                        <div class="col-5">
                                            <div class="d-grid gap-2">
                                                <button type="submit" class="btn btn-success btn-sm text-uppercase text-center">Suchen</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 text-bg-dark">Bei einem Lieferservice in deiner Nähe.</div>
                    </div>
                </div>
            </div>
        </div>--}}

        <div class="container d-flex h-100 text-center">
            <div class="d-flex w-100 h-100 p-3 mx-auto flex-column">
                <div class="mb-auto"></div>
                <div class="hero-caption shadow-1-strong">
                    <div class="thanks pb-2">
                        <span>Hunger? Dann bestellen sie ihr Essen einfach online.</span>
                    </div>
                    <div class="mx-auto my-3" style="width: 250px;">
                        <form action="">
                            @csrf
                            <div class="input-group">
                                <input type="text" name="plz" id="plz" class="form-control" placeholder="Deine Postleitzahl">
                                <button type="submit" class="btn btn-success text-uppercase">Suchen</button>
                            </div>
                        </form>
                    </div>
                    <div class="thanks pt-2">
                        <span>Bei einem Lieferservice in deiner Nähe.</span>
                    </div>
                </div>
                <div class="mt-auto"></div>
            </div>
        </div>
    </div>
</section>
