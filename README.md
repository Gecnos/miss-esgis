
# 🌟 Miss ESGIS – Installation & Lancement

Ce guide explique **pas à pas** comment installer et lancer le projet Laravel depuis zéro, même si vous n’avez jamais utilisé Laravel auparavant.

---

## 📦 1. Prérequis

Avant de commencer, assurez-vous d’avoir installé :

- **PHP** (≥ 8.1) → [Télécharger PHP](https://www.php.net/downloads.php)
- **Composer** → [Télécharger Composer](https://getcomposer.org/download/)
- **Node.js** & **npm** → [Télécharger Node.js](https://nodejs.org/en/download)
- **MySQL** ou **MariaDB**  
  💡 *Astuce Windows* : [Laragon](https://laragon.org/) ou [XAMPP](https://www.apachefriends.org/fr/index.html) facilitent l’installation de PHP + MySQL.

---


---

## ⚙️ 3. Installer les dépendances

### Dépendances PHP

```bash
composer install
```

### Dépendances JavaScript

```bash
npm install
```

---

## 📝 4. Configurer l’environnement

Copier le fichier d’exemple `.env.example` en `.env` :

```bash
cp .env.example .env
```

---

## 🗄 6. Préparer la base de données

Lancer les migrations :

```bash
php artisan migrate
```

Lancer les seeders  :

```bash
php artisan db:seed
```
Lancer les liens photos :

```bash
 php artisan storage:link
```

---

## 🚀 7. Lancer le serveur Laravel

```bash
php artisan serve
```



Le site est maintenant accessible sur :
👉 [http://localhost:8000](http://localhost:8000)

---

## 🎨 8. Lancer la compilation des assets (CSS/JS)

Dans un **nouveau terminal** :

```bash
npm run dev
```
---

## 🛠 9. Commandes utiles

| Commande                           | Description                                 |
| ---------------------------------- | ------------------------------------------- |
| `php artisan migrate`              | Applique les migrations                     |
| `php artisan db:seed`              | Exécute les seeders                         |
| `php artisan migrate:fresh --seed` | Réinitialise la BDD et recharge les données |
| `php artisan route:list`           | Liste toutes les routes                     |
| `php artisan serve`                | Lance le serveur Laravel                    |
| `npm run dev`                      | Compile les assets (dev)                    |
| `npm run build`                    | Compile les assets (prod)                   |

---

## ✅ Prêt à l’emploi

1. Lancer `php artisan serve`
2. Lancer `npm run dev`
3. Ouvrir [http://localhost:8000](http://localhost:8000)
4. Se connecter avec les identifiants Admin créés par le seeder
5. Accédez au dashboard admin [http://localhost:8000/adminloginmaisjustedutextepourplusdesecurite](http://localhost:8000/adminloginmaisjustedutextepourplusdesecurite)
6. Accédez au dashboard miss [http://localhost:8000/connexion](http://localhost:8000/connexion)
7. Numéro momo MTN de test de l'API  de paiement pour un paiement réussi 61000000 , pour un processing error 61000001, pour un paiement refusé 61000003 et pour un fond insuffisant 61000002
