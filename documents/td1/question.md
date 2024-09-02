# Question Td1

## Question 1

La méthode GET est utilisée afin de récupérer des données alors que la méthode POST est utilisée pour envoyé une entité vers la ressource indiquée 

## Question 2

GET :

| Avantage                              | inconvenient                                                     |
| :-------------------------------------|:----------------------------------------------------------------:|
| Récupération de page via l'historique |les paramètres URL sont seulement visible dans la barre d'adresse |
| paramètres URL enregistrés avec l'adresse du site web | capacité limité                                  |


POST :

| Avantage                                                         | inconvenient                                                                          |
| :----------------------------------------------------------------|:-------------------------------------------------------------------------------------:|
| garde la confidentialité exemple transmision de données sensible |lors d'une mise a jour avec un formulaire les données doivent etre de nouveau soumises |
| flexibilité                                                      | le données transmises ne peuvent pas etre sauvegardées sous forme de marque-page      |

## Question 3

Le protocole HTTP est extensible grace à l'utilisation d'en-tetes, qui permettent d'ajouter des cookies au flux et de créer une session pour partager un meme contexte ou etat sur chaque requetes HTTP

## Question 4 

HTTP n’a pas besoin que le serveur conserve des informations sur un client entre deux requêtes c'est pour ça qu'il est qualifié de protocole sans etat.

il n'y a pas de lien entre deux requêtes qui sont effectuées successivement sur la même connexion. Cela devient très rapidement problématique lorsque les utilisateurs veulent interagir avec une page de façon cohérente

## Question 5

https://www..exemple.com:80/path/index.html?id=8#article

https = protocole

www. = sous-domaine

exemple.com = nom de domaine

:80 = port

/path/index.html = chemin ressources

?id=8 = paramètres

#article = fragment

## Question 6

Les codes de statut HTTP se décomposent en 5 grandes familles :

* Un code 1xx indique une réponse provisoire (non implémenté avec HTTP/1.0) ;

* Un code 2xx (200, 201, 202, 204) indique que la requête a été traitée avec succès ;

* Un code 3xx(300, 301, 302, 304) indique que la requête doit être redirigée ;

* Un code 4xx (400, 401, 403, 404) indique une erreur côté client ;

* Un code 5xx (500, 501, 502, 503) indique une erreur côté serveur.