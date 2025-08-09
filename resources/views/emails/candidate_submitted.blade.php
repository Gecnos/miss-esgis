<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Candidature reçue</title>
    <style>
        body { font-family: Arial, sans-serif; color: #111827; }
        .container { max-width: 600px; margin: 0 auto; padding: 16px; }
        .card { border: 1px solid #e5e7eb; border-radius: 8px; padding: 16px; }
        .btn { display: inline-block; padding: 10px 16px; background: #ec4899; color: #fff; text-decoration: none; border-radius: 6px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Bonjour {{ $miss->prenom }} {{ $miss->nom }},</h2>
        <div class="card">
            <p>Nous avons bien reçu votre candidature à Miss ESGIS.</p>
            <p>Statut actuel: <strong>En cours de validation</strong>.</p>
            <p>Nous vous recontacterons par email dès que votre demande sera examinée.</p>
            <p>Merci pour votre participation et bonne chance !</p>
        </div>
        <p style="margin-top: 16px; font-size: 12px; color: #6b7280;">Ceci est un message automatique, merci de ne pas y répondre.</p>
    </div>
</body>
</html>
