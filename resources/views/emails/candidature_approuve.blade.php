@component('mail::message')
# Bonjour {{ $candidate->name }}

Votre candidature à l'élection miss ESGIS-Bénin 2025 a été approuvée !

Vous pouvez accédez à votre tableau de bord miss en suivant ce lien.

@component('mail::button', ['url' => url('/connexion')])
Se connecter
@endcomponent

Merci,  
L'équipe Miss ESGIS-Bénin
@endcomponent
