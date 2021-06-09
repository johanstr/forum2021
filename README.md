# Web App - Laravel Introductie Cursus

## Inleiding
Tijdens de lessen maken we kennis met Laravel. laravel is een MVC framework geschreven in en voor PHP.  
  
## Hoe haal je deze repo binnen?
Allereerst open je de terminal en ga je naar de map op je schijf waar je de repo wil plaatsen.
```bash
    git clone https://github.com/johanstr/forum2021 forum-project
```
  
In bovenstaande terminal opdracht staat het laatste deel (forum2021) voor de mapnaam die je zelf aan de repo wil geven op je eigen schijf.
  
Daarna moet je nog wel de packages van Laravel etc.. installeren, want die worden in een repo nooit standaard meegenomen. Dit doe je als volgt:  
  
```bash
    cd forum-project
    cd forum2021                               (ja 2x doen)
    composer install                           (Hiermee installeer je de packages)
```
  
Nu is alles klaar om gebruikt te worden.
  
  
## Wat hebben we gedaan tot nu toe?
### Les 01 - Introductie in Laravel.  

* We hebben kennis gemaakt met **composer** (dependency manager voor PHP) en daarmee een Laravel project aangemaakt.
* We hebben de mappen en bestanden van dit project bekeken en ontdekt wat het is en waar het voor staat.
* We hebben kennis gemaakt met het MVC-principe (Design Pattern)
* We hebben kennis gemaakt met de begrippen Route, Controller, Model, View etc.

### Les 02 - Forum project.  

* We hebben een nieuw project gecreëerd met Laravel middels composer
```bash
  composer create-project laravel/laravel forum2021
```
  
* We hebben in het project verschillende bestanden verwijdert die standaard mee geïnstalleerd zijn.  
* We hebben models en migrations gemaakt voor de tabellen **users, threads, topics, replies**.
* We hebben de migration uitgevoerd.
* We hebben factories aangemaakt voor alle tabellen.
* We hebben de factories in de database seeder geplaatst en de database met testdata gevuld.
  
### Les 03 - De eerste routes en views

#### Wat gaan we doen?
1. We implementeren ons design in ons Laravel project  
   a. We maken een template layout van de HTML code die voor iedere pagina geldt  
   b. We maken de home page gevuld met alle threads van het forum
2. We maken de eerste controller
3. We maken de eerste route(s)
  
  
## Author(s)  
  
- [@johanstr](https://www.github.com/johanstr)