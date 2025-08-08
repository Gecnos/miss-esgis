@extends('layouts.base')
@php
$titre ='Dashboard admin - Miss Élégance ' . date('Y');

@endphp
@vite('resources/css/stylecandidate.css')
@section('title', $titre)

@section('content')
<div class="content">
<section class="entete">
    <h1>Espace Miss - {{$candidate->nom}} {{$candidate->prenom}}</h1>
    <p>
        <span class="rang">#{{$rang}} @if($totalcandidates>0) sur {{$totalcandidates}} @endif</span> 
        <span class="votes"> {{$candidate->votes_count}}  @if($candidate->votes_count>1)votes @else vote @endif</span> 
    </p>
</section>

<section class="statistique">
    <div id="bloc"> 
        <div class="icon">
             <svg id="svgmiss" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
            </svg>
        </div>
        <div class="chiffre">
           <h3>{{$candidate->votes_count}}</h3>
            <p>{{$candidate->votes_count}} @if($candidate->votes_count>1)votes @else vote @endif</p>
        </div> 
    </div>
    <div id="bloc"> 
        <div class="icon">
            <svg id="svgmiss" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
            </svg>
        </div> 
        <div class="chiffre">
            <h3>#{{$rang}}</h3>
            <p>classement</p>
        </div> 
    </div>
    <div id="bloc"> 
        <div class="icon">
             <svg id="svgmiss" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
            </svg>
        </div> 
        <div class="chiffre">
            <h3>{{$candidate->photos_count}}</h3>
            <p>{{$candidate->photos_count}} @if($candidate->photos_count>1)photos @else photo @endif</p>
        </div> 
    </div>
     <div id="bloc"> 
        <div class="icon">
             <svg id="svgmiss" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
            </svg>
        </div> 
        <div class="chiffre">
            <h3>{{$candidate->videos_count}}</h3>
            <p>{{$candidate->videos_count}} @if($candidate->videos_count>1)videos @else video @endif</p>
        </div> 
    </div>
</section>
<div class="infopersomiss">

    
@if($candidate->photos_count < 4 || $candidate->videos_count == 0)
<section class="detail">
   <form action="/addmedia" method="post" enctype="multipart/form-data">
    <h2>Gerer vos medias</h2>
    @csrf
    
    @if($candidate->photos_count < 4 )
    <div>
        <h3>Ajouter une photo</h3>
        <div class="cadreinput">
            <label for="photo">Choisir une photo</label>
            <input type="file" name="photo" id="photo" accept="image/*">
            <span id="spanphoto">Selectionner une photo</span>
        </div>
        <div id="photoerror" class="error">
            @error('photo')
               {{$message}}
            @enderror
        </div>
    </div>
    @endif
    @if( $candidate->videos_count ==0)
    <div>
        <h3>Ajouter une video</h3>
        <div class="cadreinput">
            <label for="video">Choisir une video</label>
            <input type="file" name="video" id="video" accept="video/*">
            <span id="spanvideo">Selectionner une video</span>
        </div>  
        <div id="videoerror" class="error">
            @error('video')
               {{$message}}
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
            <input type="text" name="nom" id="nom" value="{{@old('nom',$candidate->nom ?? '')}}">
            <div class="error">
            @error('nom')
               {{$message}}
            @enderror
        </div>  
        </div>
        <div>
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" id="prenom" value="{{@old('prenom',$candidate->prenom ?? '')}}">
            <div class="error">
            @error('prenom')
               {{$message}}
            @enderror
        </div>  
        </div>
        <div>
            <label for="ville">Ville</label>
            <input type="text" name="ville" id="ville" value="{{@old('ville',$candidate->pays ?? '')}}">
            @error('ville')
               {{$message}}
            @enderror
        </div>
        <div>
            <label for="bio">Biographie</label>
            <textarea  name="bio" id="bio">{{@old('bio',$candidate->bio ?? '')}}</textarea>
            @error('bio')
               {{$message}}
            @enderror
        </div>
        <!--<div>
            <label for="mail">Mail</label>
            <input type="text" name="mail" id="mail" value="{{@old('mail',$candidate->email ?? '')}}">
            @error('mail')
               {{$message}}
            @enderror
        </div>-->
         <button type="submit" id="soumis">Sauvegarder les modifications</button>
    </form>
</section>
</div>

<section class="medias">
    <div class="gallerie" >
        <h2>Photo de profil</h2>
       
            <div class="image" >
                <img id="photprofil" src="{{asset('storage/media/'.basename($candidate->photo_principale))}}" alt="photo de {{$candidate->nom}} {{$candidate->prenom}}">
                <div class="modifbtn">
                    <button id="open-modalphoto" class="modifiermedia" data-miss-id="{{$candidate->id}}">Modifier</button>
                </div>
        </div>
    </div>

    <div class="gallerie">
        <h2>Galerie photos</h2>
        <div class="photos">
            @if (count($medias)!=0)
            @foreach ($medias as $media)
                @if ($media->type ==='photo')
                    <div class="image">
                        <img src="{{asset('storage/media/'.basename($media->url))}}" alt="photo de {{$candidate->nom}} {{$candidate->prenom}}">
                        <div class="modifbtn">
                            <button id="open-modalphoto" class="modifiermedia" data-media-id="{{$media->id}}">Modifier</button>
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
        @if ($medias->contains('type','video'))
            @foreach ($medias as $media)
                @if ($media->type ==='video')
                    <video controls>
                        <source src="{{asset('storage/media/'.basename($media->url))}}" type="video/{{pathinfo(basename($media->url),PATHINFO_EXTENSION)}}">
                        Votre navigateur ne prend pas en charge la lecture de video
                    </video>
                    <div class="modifbtn">
                        <button id="open-modal" class="modifiermedia" data-media-id="{{$media->id}}">Modifier</button>
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
    <form  id="photo-form" action="/modifiermedia" method="post" enctype="multipart/form-data">
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

openModalButton?.addEventListener("click", function (){       
    modal.style.display = 'block';
    const mediaid=openModalButton.getAttribute("data-media-id")
    infomedia.innerHTML= `<input type="hidden" name="id" value="${mediaid}">`;
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
  if(videoInput.files.length==0)
  {
     event.preventDefault();
     document.querySelector(".modalviderror").innerText="Selectionée une vidéo"
  }
});

//photo modal
const modalphoto = document.getElementById('modalphoto');
const openmodalphoto =document.querySelectorAll("#open-modalphoto")
const closeButton2 = document.getElementsByClassName('close')[1];
const photoinfo = document.getElementById("photoinfo")
openmodalphoto.forEach(opmodalphoto=>{
    opmodalphoto?.addEventListener("click", function (){              
    modalphoto.style.display = 'block';
   
     let photoid=opmodalphoto.getAttribute("data-media-id")
     if(photoid !=null )
        photoinfo.innerHTML= `<input type="hidden" name="id" value="${photoid}">`;
     else
        {
            photoid=opmodalphoto.getAttribute("data-miss-id")
            photoinfo.innerHTML= `<input type="hidden" name="idmiss" value="${photoid}">`;
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
  if(photoInput.files.length==0)
  {
     event.preventDefault();
     document.querySelector(".modalphterror").innerText="Selectionée une photo"
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
        button?.addEventListener("click",function(e)
    {
        
         if((photo && photo.files.length==0) && (video && video.files.length ==0)){
                e.preventDefault()
        
        if( (photo && photo.files.length==0) )
        {
           
            if(photo && photo.files.length==0)
            {
                photoerror.innerText ="Selectionnez une photo"
            }
            
        }

        if((video && video.files.length==0))
        {
           
            if(video && video.files.length==0)
            {
                videoerror.innerText ="Selectionnez une video"
            }
        }}
        

    })
    }
    if (photo) {
        photo?.addEventListener('change',()=>
    {
        if(photo && photo.files.length>0)
        {
            spanphoto.innerText ="Photo selectionnée"
            photoerror.innerText =""
        }
        else
        {
            spanphoto.innerText ="Selectionner une photo"
        }
    })
    }
    
    if(video){
        video?.addEventListener('change',()=>
    {
        
        if(video && video.files.length>0)
        {
            spanvideo.innerText ="Video selectionnée"
            videoerror.innerText =""
        }
        else
        {
            spanvideo.innerText ="Selectionner une video"
        }
    })
    }
    



    
</script>

@endsection