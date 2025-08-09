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
                <div class="svgmiss">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-vote w-8 h-8 text-primary">
                        <path d="m9 12 2 2 4-4"></path>
                        <path d="M5 7c0-1.1.9-2 2-2h10a2 2 0 0 1 2 2v12H5V7Z"></path>
                        <path d="M22 19H2"></path>
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
                <div class=" svgmiss">
                    <svg width="50px" height="50px" viewBox="0 0 1.8 1.8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
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
                <div class="svgmiss">
                    <link rel="stylesheet"
                        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0&icon_names=photo" />
                    <span class="material-symbols-outlined">photo</span>
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
                <div class="svgmiss">
                    <link rel="stylesheet"
                        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0&icon_names=video_library" />
                    <span class="material-symbols-outlined">video_library</span>
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
                        <input type="text" name="nom" id="nom"
                            value="{{ @old('nom', $candidate->nom ?? '') }}">
                        <div class="error">
                            @error('nom')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="prenom">Prenom</label>
                        <input type="text" name="prenom" id="prenom"
                            value="{{ @old('prenom', $candidate->prenom ?? '') }}">
                        <div class="error">
                            @error('prenom')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="ville">Ville</label>
                        <input type="text" name="ville" id="ville"
                            value="{{ @old('ville', $candidate->pays ?? '') }}">
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
                                    <button id="open-modal" class="modifiermedia"
                                        data-media-id="{{ $media->id }}">Modifier</button>
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

        openModalButton?.addEventListener("click", function() {
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
            opmodalphoto?.addEventListener("click", function() {
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
            button?.addEventListener("click", function(e) {

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
