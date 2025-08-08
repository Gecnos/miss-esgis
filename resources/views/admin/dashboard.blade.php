@extends('layouts.app')
@php
$titre ='Dashboard admin - Miss Élégance ' . date('Y');

@endphp
@vite('resources/css/styleadmin.css')
@section('title', $titre)

@section('content')
<div class="content">
<section class="entete">
    <h1>Interface Administrateur</h1>
    <p>Gestion du concours Miss Élégance {{date('Y')}}</p>
</section>

<section class="statistique">
    <div id="bloc"> 
        <div class="icon">
             <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
            </svg>
        </div>
        <div class="chiffre">
            @if (count($candidates) === 0 ):
                <p>Aucune Candidate inscrite cette année</p>
            @else
            <h3>{{count($candidates)}}</h3>
            <p>Candidates totales</p>
            @endif
        </div> 
    </div>
    <div id="bloc"> 
        <div class="icon">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
            </svg>
        </div> 
        <div class="chiffre">
            @if (count($candidates) === 0 ):
                <p>Aucune Candidate inscrite cette année</p>
            @else
            <h3>{{$candidates->sum('votes_count')}}</h3>
            <p>Votes totaux</p>
            @endif
        </div> 
    </div>
    <div id="bloc"> 
        <div class="icon">
             <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
            </svg>
        </div> 
        <div class="chiffre">
            @if (count($candidates) === 0 ):
                <p>Aucune Candidate inscrite cette année</p>
            @else
            <h3>{{$transactions->sum('montant')}}</h3>
            <p>Revenus</p>
            @endif
        </div> 
    </div>
    <div id="bloc"> 
        <div class="icon">
             <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
            </svg>
        </div> 
        <div class="chiffre">
            @if (count($candidates) === 0 ):
                <p>Aucune Candidate inscrite cette année</p>
            @else
            <h3>{{count($candidates->where('statut','pending'))}}</h3>
            <p>En attente</p>
            @endif
        </div> 
    </div>
</section>

<section class="detail">
    <nav>
        <span class="active" id="Candidates">Candidates</span>
        <span id="Classement">Classement</span>
        <span id="Transactions">Transactions</span>
    </nav>
    @if(session('success'))
            <div id="showtoast" style="background-color: #5aeb17ff; color: white; padding: 15px; border-radius: 5px; margin: 10px 0;">{{ session('success') }}</div>
            <script>
                
                setTimeout(()=>
            {
               if(document.getElementById('showtoast'))
                {
                    document.getElementById('showtoast').style.opacity='0'
                    setTimeout(()=>
                {
                    document.getElementById('showtoast')?.remove()
                },500)
                }
            },3000)
            </script>
    @endif
    <div id="tabStatistique">
    
    </div>
</section>
</div>
<script>
    const Candidates = document.getElementById("Candidates")
    const Classement = document.getElementById("Classement")
    const Transactions = document.getElementById("Transactions")
    const tabStatistique =document.getElementById("tabStatistique")
    const candidates=@json($candidates);
    if (candidates.length == 0 )
        {
            tabStatistique.innerHTML= `<h1>Gestion des candidates</h1>
            <div>Aucune candidate inscrite</div>
        `
        }
        else{
             tabStatistique.innerHTML =  desinertabCandidat(candidates)
        }
    Classement.addEventListener("click",function()
    {
        Candidates.className = ""
        Classement.className = "active"
        Transactions.className = ""
        const candidates=@json($candidates);

        if (candidates.length ==0 )
        {
            tabStatistique.innerHTML= `<h1>Classement des candidates</h1>
            <div>Aucune candidate inscrite</div>
        `
        }
        else{
             
        let entete= `
      
        <h1>Classement des candidates</h1>
        <div class="candidate" id="premiere">
                <div class="presentation">
                    <p class="position">1</p>
                    <div>
                        <p class="nom">${candidates[0].nom +" "+candidates[0].prenom}</p>
                        <p class="ville">${candidates[0].pays}</p>
                    </div>
                </div>
                <div class="votes">
                    <p>${candidates[0].votes_count}</p>
                    <p>votes</p>
                </div>
                <div class="mention">
                    En tete
                </div>
        </div>`
        let contenu = "";
        for(let i=1;i<candidates.length;i++)
        contenu+= `<div class="candidate">
                <div class="presentation">
                    <p class="position">${i+1}</p>
                    <div>
                        <p class="nom">${candidates[i].nom +" "+candidates[i].prenom}</p>
                        <p class="ville">${candidates[i].pays}</p>
                    </div>
                </div>

                <div class="votes">
                     <p>${candidates[i].votes_count}</p>
                    <p>votes</p>
                </div>
        </div>`
        tabStatistique.innerHTML=entete+contenu
        }
    })


    Candidates.addEventListener("click",function()
    {
        Candidates.className = "active"
        Classement.className = ""
        Transactions.className = ""
        if (candidates.length == 0 )
        {
            tabStatistique.innerHTML= `<h1>Gestion des candidates</h1>
            <div>Aucune candidate inscrite</div>
        `
        }
        else{
             tabStatistique.innerHTML =  desinertabCandidat(candidates)
        }
    })
    Transactions.addEventListener("click",function()
    {
        Candidates.className = ""
        Classement.className = ""
        Transactions.className = "active"
        const transactions=@json($transactions);
        if (transactions.length == 0 )
        {
            tabStatistique.innerHTML= `<h1>Transactions</h1>
            <div>Aucune transaction effectué</div>
        `
        }
        else{

            const transactions=@json($transactions);
        let contenu="";
        let i = 1;
        const tetetab = `
      
        <h1>Transactions</h1>
    <table>
        <thead>
            <tr>
                <th>ID Transaction</t>
            
                <th>Candidate</t>
            
                <th>Montant</t>
            
                <th>Méthode</t>
            
                <th>Date</t>
            </tr>
        </thead>
        <tbody>`; 
        
        for(let transaction of transactions )
        {
        contenu +=`
            <tr ${i%2==0 ? 'id="paire"':''}>
                <td> <strong> ${transaction.id}</strong></td>
                <td>${transaction.miss.nom +" "+transaction.miss.prenom}</td>
                <td>${transaction.montant} Fcfa</td>
                <td>${transaction.methode}</td>
                <td>${transaction.date.split('T')[0]}</td>
            </tr>
            `
        i++}
        const fintab=`</tbody>
    </table>
        `
        tabStatistique.innerHTML = tetetab +contenu+fintab 
        }
            
    })
    
    
    function desinertabCandidat()
    {
        const candidates=@json($candidates);
        let contenu="";
        let i = 1;
        const tetetab = `
      
        <h1>Gestion des candidates</h1>
    <table>
        <thead>
            <tr>
                <th>Nom</t>
            
                <th>Ville</t>
            
                <th>Votes</t>
            
                <th>Statut</t>
            
                <th>Date inscription</t>
            
                <th>Actions</t>
            </tr>
        </thead>
        <tbody>`; 
        
        for(let candidate of candidates )
        {
            
            let approuveroute = "{{ url('/approuve')}}/:id"
            let rejeteroute = "{{ url('/refuse')}}/:id"
            
            let status=""
            if(candidate.statut=="pending")
            {
                status ="En attente"
            }
            if(candidate.statut=="active")
            {
                status ="Aprouvée"
            }
            if(candidate.statut=="reject")
            {
                status ="Rejetée"
            }
        contenu +=`
            <tr ${i%2==0 ? 'id="paire"':''}>
                <td> <strong> ${candidate.nom + candidate.prenom}</strong></td>
                <td>${candidate.pays}</td>
                <td>${candidate.votes_count}</td>
                <td id="approuvee">${status}</td>
                <td>${candidate.date_inscription.split('T')[0]}</td>
                <td>
                
                    <a href="${approuveroute.replace(':id',candidate.id)}">Approuvée</a>
                    <a href="${rejeteroute.replace(':id',candidate.id)}">Refusée</a>
                </td>
            </tr>
            `
        i++}
        const fintab=`</tbody>
    </table>
        `
        tab= tetetab +contenu+fintab 
        return tab
    }


   
</script>
@endsection