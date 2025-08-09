@extends('layouts.base')
@php
    $titre = 'Dashboard admin - Miss ESGIS ' . date('Y');

@endphp
@vite('resources/css/stylecandidate.css')
@section('title', $titre)

@section('content')
    <div class="content">
        <section class="entete">
            <h1>Espace Miss - {{ $candidate->nom }} {{ $candidate->prenom }}</h1>
            <p>
                <span class="rang">#{{ $rang }} @if ($totalcandidates > 0)
                    sur {{ $totalcandidates }}
                @endif
                </span>
                <span class="votes"> {{ $candidate->votes_count }} @if ($candidate->votes_count > 1)
                    votes
                @else
                        vote
                    @endif
                </span>
            </p>
        </section>

        <section class="statistique">
            <div id="bloc">
                <div class="icon">
                    <svg height="50px" width="80px" version="1.1" id="Uploaded to svgrepo.com"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3.2 3.2"
                        xml:space="preserve">
                        <style type="text/css">
                            .hatch_een {
                                fill: #265AA5;
                            }

                            .hatch_twee {
                                fill: #FFC5BB;
                            }
                        </style>
                        <g>
                            <path class="hatch_twee"
                                d="M0.2 2.916v-0.141L0.874 2.1h0.141zM1.916 2.4l0.3 -0.3h-0.141l-0.3 0.3zm0.9 -0.9h-0.141l-0.5 0.5h0.141zm-1.441 0.9h0.141l0.3 -0.3h-0.141zM3.1 1.874 2.974 2H3.1zm-3 -0.058L0.416 1.5H0.274L0.1 1.674zM0.616 2.1H0.474L0.2 2.374v0.141zm0.9 -0.1 0.5 -0.5h-0.141l-0.5 0.5zm-0.7 -0.5H0.674l-0.5 0.5h0.141zM3 2.374 2.274 3.1h0.141L3 2.516zM0.716 2l0.5 -0.5h-0.141l-0.5 0.5zm1.059 0h0.141l0.5 -0.5h-0.141zM3.1 1.5h-0.026l-0.5 0.5h0.141L3.1 1.616zm-0.1 1.274L2.674 3.1h0.141L3 2.916zm-0.8 0V2.8a0.1 0.1 0 0 1 -0.1 0.1h-0.026l-0.2 0.2h0.141L3 2.116V2.1h-0.126zm-1.161 0.103A0.099 0.099 0 0 1 1 2.8v-0.026L0.674 3.1h0.141zM1 2.516V2.5a0.1 0.1 0 0 1 0.1 -0.1h0.016l0.3 -0.3h-0.141l-1 1h0.141zM1.116 2l0.5 -0.5h-0.141l-0.5 0.5zm0.3 0.9h-0.141l-0.2 0.2h0.141zm1.2 -0.8h-0.141l-0.319 0.319c0.026 0.018 0.045 0.047 0.045 0.081v0.016zm-0.8 0.8h-0.141l-0.2 0.2h0.141z" />
                            <path class="hatch_een"
                                d="M1.372 1.1a0.05 0.05 0 0 1 -0.033 -0.013l-0.222 -0.2a0.05 0.05 0 1 1 0.067 -0.074l0.191 0.172 0.745 -0.575a0.05 0.05 0 0 1 0.061 0.079l-0.778 0.6a0.05 0.05 0 0 1 -0.03 0.01" />
                            <g>
                                <path class="hatch_een"
                                    d="M3.1 1.4h-0.7V0.2a0.1 0.1 0 0 0 -0.1 -0.1H0.9a0.1 0.1 0 0 0 -0.1 0.1v1.2H0.1a0.1 0.1 0 0 0 -0.1 0.1v0.5a0.1 0.1 0 0 0 0.1 0.1v1a0.1 0.1 0 0 0 0.1 0.1h2.8a0.1 0.1 0 0 0 0.1 -0.1V2.1a0.1 0.1 0 0 0 0.1 -0.1v-0.5a0.1 0.1 0 0 0 -0.1 -0.1M0.9 0.2h1.4v1.2H0.9zm2.1 2.9H0.2V2.1h2.8zm0.1 -1.1H0.1v-0.5h3z" />
                                <path class="hatch_een"
                                    d="M1.1 2.9h1a0.1 0.1 0 0 0 0.1 -0.1v-0.3a0.1 0.1 0 0 0 -0.1 -0.1H1.1a0.1 0.1 0 0 0 -0.1 0.1v0.3a0.1 0.1 0 0 0 0.1 0.1m0 -0.4h1v0.3H1.1z" />
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="chiffre">
                    <h3>{{ $candidate->votes_count }}</h3>
                    <p>{{ $candidate->votes_count }} @if ($candidate->votes_count > 1)
                        votes
                    @else
                            vote
                        @endif
                    </p>
                </div>
            </div>
            <div id="bloc">
                <div class="icon">
                    <svg width="50px" height="50px" viewBox="0 0 1.8 1.8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.65 1.706H0.15c-0.031 0 -0.056 -0.026 -0.056 -0.056v-0.45c0 -0.114 0.092 -0.206 0.206 -0.206h0.35c0.031 0 0.056 0.026 0.056 0.056v0.6c0 0.031 -0.026 0.056 -0.056 0.056m-0.444 -0.112h0.388v-0.487H0.3c-0.052 0 -0.094 0.042 -0.094 0.094z"
                            fill="#000000" />
                        <path
                            d="M1.15 1.706H0.649c-0.031 0 -0.056 -0.026 -0.056 -0.056V0.9c0 -0.114 0.092 -0.206 0.206 -0.206h0.2c0.114 0 0.206 0.092 0.206 0.206v0.75c0 0.031 -0.025 0.056 -0.056 0.056m-0.443 -0.112h0.388V0.9c0 -0.052 -0.042 -0.094 -0.094 -0.094h-0.2c-0.052 0 -0.094 0.042 -0.094 0.094z"
                            fill="#000000" />
                        <path
                            d="M1.65 1.706h-0.5c-0.031 0 -0.056 -0.026 -0.056 -0.056v-0.375c0 -0.031 0.026 -0.056 0.056 -0.056H1.5c0.114 0 0.206 0.092 0.206 0.206v0.225c0 0.031 -0.026 0.056 -0.056 0.056m-0.444 -0.112h0.388V1.425c0 -0.052 -0.042 -0.094 -0.094 -0.094h-0.294z"
                            fill="#000000" />
                        <path
                            d="M1.027 0.626c-0.018 0 -0.041 -0.005 -0.066 -0.02L0.9 0.569l-0.061 0.036c-0.061 0.037 -0.102 0.015 -0.117 0.004s-0.047 -0.043 -0.032 -0.112l0.014 -0.062 -0.051 -0.051c-0.032 -0.032 -0.043 -0.069 -0.032 -0.103s0.042 -0.058 0.085 -0.066l0.065 -0.011 0.037 -0.073c0.041 -0.08 0.139 -0.08 0.178 0l0.037 0.073 0.065 0.011c0.043 0.007 0.075 0.032 0.085 0.066 0.011 0.035 -0.001 0.072 -0.032 0.103l-0.051 0.051 0.014 0.062c0.016 0.07 -0.017 0.102 -0.032 0.113 -0.007 0.006 -0.024 0.016 -0.049 0.016M0.9 0.456c0.018 0 0.036 0.004 0.051 0.013l0.042 0.025 -0.009 -0.041c-0.007 -0.032 0.004 -0.07 0.027 -0.093l0.038 -0.038 -0.047 -0.008c-0.03 -0.005 -0.059 -0.027 -0.073 -0.054L0.9 0.204l-0.028 0.056c-0.013 0.027 -0.043 0.049 -0.073 0.054l-0.047 0.007 0.038 0.038c0.023 0.023 0.034 0.061 0.027 0.093l-0.009 0.041 0.042 -0.025c0.014 -0.009 0.032 -0.013 0.05 -0.013"
                            fill="#000000" />
                    </svg>
                </div>
                <div class="chiffre">
                    <h3>#{{ $rang }}</h3>
                    <p>classement</p>
                </div>
            </div>
            <div id="bloc">
                <div class="icon">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="50px" viewBox="0 0 7.5 7.5"
                        enable-background="new 0 0 100 100" xml:space="preserve">
                        <g>
                            <path fill="#231F20"
                                d="M6.99 1.35a0.335 0.335 0 0 0 -0.335 -0.335c-0.017 0 -0.034 0.003 -0.05 0.005V1.012H0.844v0.002A0.335 0.335 0 0 0 0.508 1.35v4.837h0.004c0.019 0.167 0.159 0.298 0.332 0.298v0.002h5.76v-0.007c0.016 0.002 0.033 0.005 0.05 0.005 0.172 0 0.313 -0.131 0.332 -0.298h0.006V1.35zm-0.745 4.391H5.43a0.15 0.15 0 0 0 -0.012 -0.033l0.001 -0.001 -1.704 -2.951 -0.001 0a0.23 0.23 0 0 0 -0.207 -0.131 0.231 0.231 0 0 0 -0.211 0.137L2.163 4.726l-0.278 -0.481 0 0a0.121 0.121 0 0 0 -0.109 -0.069c-0.049 0 -0.092 0.03 -0.111 0.072l-0.409 0.709V1.761h4.99z" />
                            <path fill="#231F20" cx="68.122" cy="38.584" r="10.1"
                                d="M5.867 2.894A0.757 0.757 0 0 1 5.109 3.651A0.757 0.757 0 0 1 4.352 2.894A0.757 0.757 0 0 1 5.867 2.894z" />
                        </g>
                    </svg>
                </div>
                <div class="chiffre">
                    <h3>{{ $candidate->photos_count }}</h3>
                    <p>{{ $candidate->photos_count }} @if ($candidate->photos_count > 1)
                        photos
                    @else
                        photo
                    @endif
                    </p>
                </div>
            </div>
            <div id="bloc">
                <div class="icon">
                    <svg width="50px" height="50px" viewBox="0 0 1.125 1.125" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.357 0.234A2.475 2.475 0 0 1 0.563 0.225c0.07 0 0.14 0.004 0.205 0.009 0.078 0.007 0.129 0.011 0.168 0.02 0.035 0.008 0.055 0.019 0.072 0.037 0.002 0.002 0.004 0.005 0.006 0.007 0.015 0.017 0.025 0.039 0.03 0.08 0.006 0.044 0.006 0.101 0.006 0.187 0 0.085 0 0.141 -0.006 0.184 -0.006 0.04 -0.015 0.062 -0.03 0.079l-0.006 0.007c-0.017 0.018 -0.037 0.028 -0.071 0.037 -0.038 0.009 -0.088 0.013 -0.165 0.02 -0.065 0.005 -0.136 0.009 -0.209 0.009s-0.144 -0.004 -0.209 -0.009c-0.077 -0.006 -0.127 -0.011 -0.165 -0.02 -0.034 -0.008 -0.054 -0.019 -0.071 -0.037l-0.006 -0.007c-0.015 -0.017 -0.025 -0.039 -0.03 -0.079C0.075 0.706 0.075 0.649 0.075 0.564c0 -0.086 0 -0.143 0.006 -0.187 0.006 -0.041 0.015 -0.062 0.03 -0.08 0.002 -0.002 0.004 -0.005 0.006 -0.007 0.017 -0.017 0.037 -0.028 0.072 -0.037 0.039 -0.009 0.089 -0.014 0.168 -0.02M0 0.564c0 -0.168 0 -0.252 0.055 -0.316 0.003 -0.003 0.006 -0.007 0.009 -0.01 0.058 -0.06 0.135 -0.066 0.287 -0.079C0.418 0.154 0.49 0.15 0.563 0.15s0.145 0.004 0.211 0.009c0.152 0.013 0.228 0.019 0.287 0.079 0.003 0.003 0.007 0.007 0.009 0.01 0.055 0.063 0.055 0.147 0.055 0.316 0 0.166 0 0.249 -0.055 0.313a0.225 0.225 0 0 1 -0.009 0.01c-0.059 0.06 -0.133 0.066 -0.283 0.079C0.711 0.971 0.638 0.975 0.563 0.975s-0.148 -0.004 -0.215 -0.009c-0.15 -0.012 -0.224 -0.019 -0.283 -0.079a0.225 0.225 0 0 1 -0.009 -0.01C0 0.814 0 0.731 0 0.564m0.394 -0.161a0.019 0.019 0 0 1 0.026 -0.017l0.362 0.159c0.015 0.007 0.015 0.028 0 0.034L0.42 0.738a0.019 0.019 0 0 1 -0.026 -0.017z"
                            fill="#000000" />
                    </svg>
                </div>
                <div class="chiffre">
                    <h3>{{ $candidate->videos_count }}</h3>
                    <p>{{ $candidate->videos_count }} @if ($candidate->videos_count > 1)
                        videos
                    @else
                            video
                        @endif
                    </p>
                </div>
            </div>
        </section>
        <div class="infopersomiss">


            @if ($candidate->photos_count < 4 || $candidate->videos_count == 0)
                <section class="detail">
                    <form action="/addmedia" method="post" enctype="multipart/form-data">
                        <h2>Gerer vos medias</h2>
                        @csrf

                        @if ($candidate->photos_count < 4)
                            <div>
                                <h3>Ajouter une photo</h3>
                                <div class="cadreinput">
                                    <label for="photo">Choisir une photo</label>
                                    <input type="file" name="photo" id="photo" accept="image/*">
                                    <span id="spanphoto">Selectionner une photo</span>
                                </div>
                                <div id="photoerror" class="error">
                                    @error('photo')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        @endif
                        @if ($candidate->videos_count == 0)
                            <div>
                                <h3>Ajouter une video</h3>
                                <div class="cadreinput">
                                    <label for="video">Choisir une video</label>
                                    <input type="file" name="video" id="video" accept="video/*">
                                    <span id="spanvideo">Selectionner une video</span>
                                </div>
                                <div id="videoerror" class="error">
                                    @error('video')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        @endif
                        <button type="submit" id="soumis">Ajouter</button>
                    </form>
                </section>
            @endif



            <section class="details">
                <form action="/updateinfo" method="post">
                    @csrf
                    <h2>Informations du profil</h2>
                    <div>
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="nom" value="{{ @old('nom', $candidate->nom ?? '') }}">
                        <div class="error">
                            @error('nom')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="prenom">Prenom</label>
                        <input type="text" name="prenom" id="prenom" value="{{ @old('prenom', $candidate->prenom ?? '') }}">
                        <div class="error">
                            @error('prenom')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="ville">Ville</label>
                        <input type="text" name="ville" id="ville" value="{{ @old('ville', $candidate->pays ?? '') }}">
                        @error('ville')
                            {{ $message }}
                        @enderror
                    </div>
                    <div>
                        <label for="bio">Biographie</label>
                        <textarea name="bio" id="bio">{{ @old('bio', $candidate->bio ?? '') }}</textarea>
                        @error('bio')
                            {{ $message }}
                        @enderror
                    </div>
                    <!--<div>
                        <label for="mail">Mail</label>
                        <input type="text" name="mail" id="mail" value="{{ @old('mail', $candidate->email ?? '') }}">
                        @error('mail')
            {{ $message }}
        @enderror
                    </div>-->
                    <button type="submit" id="soumis">Sauvegarder les modifications</button>
                </form>
            </section>
        </div>

        <section class="medias">
            <div class="gallerie">
                <h2>Photo de profil</h2>

                <div class="image">
                    <img id="photprofil" src="{{ asset('storage/media/' . basename($candidate->photo_principale)) }}"
                        alt="photo de {{ $candidate->nom }} {{ $candidate->prenom }}">
                    <div class="modifbtn">
                        <button id="open-modalphoto" class="modifiermedia"
                            data-miss-id="{{ $candidate->id }}">Modifier</button>
                    </div>
                </div>
            </div>

            <div class="gallerie">
                <h2>Galerie photos</h2>
                <div class="photos">
                    @if (count($medias) != 0)
                        @foreach ($medias as $media)
                            @if ($media->type === 'photo')
                                <div class="image">
                                    <img src="{{ asset('media/' . basename($media->url)) }}"
                                        alt="photo de {{ $candidate->nom }} {{ $candidate->prenom }}">
                                    <div class="modifbtn">
                                        <button id="open-modalphoto" class="modifiermedia"
                                            data-media-id="{{ $media->id }}">Modifier</button>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <h2>Vous n'avez pas encore photo</h2>
                    @endif
                </div>
            </div>

            <div class="presentationvid">
                <h2>Video de presentation</h2>
                <div class="video">
                    @if ($medias->contains('type', 'video'))
                        @foreach ($medias as $media)
                            @if ($media->type === 'video')
                                <video controls>
                                    <source src="{{ asset('media/' . basename($media->url)) }}"
                                        type="video/{{ pathinfo(basename($media->url), PATHINFO_EXTENSION) }}">
                                    Votre navigateur ne prend pas en charge la lecture de video
                                </video>
                                <div class="modifbtn">
                                    <button id="open-modal" class="modifiermedia" data-media-id="{{ $media->id }}">Modifier</button>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <h2>Vous n'avez pas encore de video de présentation</h2>

                    @endif
                </div>
            </div>
        </section>

        <div id="modal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Ajouter une video</h2>
                <form id="photo-form" action="/modifiermedia" method="post" enctype="multipart/form-data">
                    @csrf
                    <div id="infomedia"></div>
                    <input type="file" id="videomod" name="video" accept="video/*">
                    <div class="modalviderror"></div>
                    <button type="submit" id="connexion">Envoyer</button>
                </form>
            </div>
        </div>

        <div id="modalphoto" class="modalphoto">
            <div class="modal-contentphoto">
                <span class="close">&times;</span>
                <h2>Modifier la photo</h2>
                <form id="photo-form2" action="/modifiermedia" method="post" enctype="multipart/form-data">
                    @csrf
                    <div id="photoinfo">

                    </div>
                    <input type="file" id="modphoto" name="photo" accept="photo/*">
                    <div class="modalphterror"></div>
                    <button type="submit" id="connexion">Envoyer</button>
                </form>
            </div>
        </div>

    </div>
    <script>
        const modal = document.getElementById('modal');
        const openModalButton = document.getElementById("open-modal");
        const closeButton = document.getElementsByClassName('close')[0];
        const infomedia = document.getElementById("infomedia")

        openModalButton?.addEventListener("click", function () {
            modal.style.display = 'block';
            const mediaid = openModalButton.getAttribute("data-media-id")
            infomedia.innerHTML = `<input type="hidden" name="id" value="${mediaid}">`;
        });

        closeButton?.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        window?.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });


        const photoForm = document.getElementById('photo-form');
        photoForm?.addEventListener('submit', (event) => {
            const videoInput = document.getElementById('videomod');
            if (videoInput.files.length == 0) {
                event.preventDefault();
                document.querySelector(".modalviderror").innerText = "Selectionée une vidéo"
            }
        });

        //photo modal
        const modalphoto = document.getElementById('modalphoto');
        const openmodalphoto = document.querySelectorAll("#open-modalphoto")
        const closeButton2 = document.getElementsByClassName('close')[1];
        const photoinfo = document.getElementById("photoinfo")
        openmodalphoto.forEach(opmodalphoto => {
            opmodalphoto?.addEventListener("click", function () {
                modalphoto.style.display = 'block';

                let photoid = opmodalphoto.getAttribute("data-media-id")
                if (photoid != null)
                    photoinfo.innerHTML = `<input type="hidden" name="id" value="${photoid}">`;
                else {
                    photoid = opmodalphoto.getAttribute("data-miss-id")
                    photoinfo.innerHTML = `<input type="hidden" name="idmiss" value="${photoid}">`;
                }
            });
        })
        closeButton2?.addEventListener('click', () => {
            modalphoto.style.display = 'none';
        });

        window?.addEventListener('click', (event) => {
            if (event.target === modalphoto) {
                modalphoto.style.display = 'none';
            }
        });


        const photoForm2 = document.getElementById('photo-form2');
        photoForm2?.addEventListener('submit', (event) => {
            const photoInput = document.getElementById('modphoto');
            if (photoInput.files.length == 0) {
                event.preventDefault();
                document.querySelector(".modalphterror").innerText = "Selectionée une photo"
            }
        });

        let button = document.getElementById("soumis")
        let photo = document.getElementById("photo")
        let video = document.getElementById("video")
        let spanvideo = document.getElementById("spanvideo")
        let spanphoto = document.getElementById("spanphoto")
        let videoerror = document.getElementById("videoerror")
        let photoerror = document.getElementById("photoerror")
        if (button) {
            button?.addEventListener("click", function (e) {

                if ((photo && photo.files.length == 0) && (video && video.files.length == 0)) {
                    e.preventDefault()

                    if ((photo && photo.files.length == 0)) {

                        if (photo && photo.files.length == 0) {
                            photoerror.innerText = "Selectionnez une photo"
                        }

                    }

                    if ((video && video.files.length == 0)) {

                        if (video && video.files.length == 0) {
                            videoerror.innerText = "Selectionnez une video"
                        }
                    }
                }


            })
        }
        if (photo) {
            photo?.addEventListener('change', () => {
                if (photo && photo.files.length > 0) {
                    spanphoto.innerText = "Photo selectionnée"
                    photoerror.innerText = ""
                } else {
                    spanphoto.innerText = "Selectionner une photo"
                }
            })
        }

        if (video) {
            video?.addEventListener('change', () => {

                if (video && video.files.length > 0) {
                    spanvideo.innerText = "Video selectionnée"
                    videoerror.innerText = ""
                } else {
                    spanvideo.innerText = "Selectionner une video"
                }
            })
        }
    </script>

@endsection