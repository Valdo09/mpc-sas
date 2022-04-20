@component('mail::message')
# Nouvelle commande

Nous avons le plaisir de vous annoncer que vous avez une nouvelle commande.
Ci-dessous les différentes informations relative à la commande:

#### Nom et Prénoms: {{ $commande->name." ".$commande->surname }}
#### Service: {{ $commande->service->name }}
#### Mode: {{ $commande->mode }}
#### Date: {{ date('d-m-Y', strtotime($commande->date)) }}
#### Téléphone: {{ $commande->telephone }}
#### Code postale: {{ $commande->code_postal }}
#### Email: {{ $commande->email }}
#### Adresse

{{ $commande->adresse }}

@if(!empty($pictures))
    En Piece Jointe les différentes images de la commande. 
@endif

Mail de notification,<br>
{{ config('app.name') }}
@endcomponent
