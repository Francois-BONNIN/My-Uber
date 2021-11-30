# TP - MyUBER

> Membres : Nicolas N'GUYEN et François BONNIN

## 1. Installation :
   - composer : `composer install`

## 2. Database :
   - `php artisan migrate:fresh`
   - `php artisan db:seed`

## 3. Requêtes :

### API Client :
#### Ajouter des produits au panier (passer un produit en paramètre (format json)): 
```| POST     | api/clients/product        | App\Http\Controllers\ClientController@addproduct        |```

#### Saisir l'adresse + numéro de téléphone (passer les arguments en paramètre (format json)) :
```| PUT      | api/clients/profile                   | App\Http\Controllers\ClientController@createprofile     |```

#### Valider la commande:
```| POST     | api/clients/order                     | App\Http\Controllers\ClientController@validateOrder     |```

#### Consulter l'état de sa commande :
```| GET|HEAD | api/clients/order/status       | App\Http\Controllers\ClientController@viewOrderClient   |```

<hr>

### API Restaurant :
#### Voir les commandes passées par les clients :
```| GET|HEAD | api/seller/order                      | App\Http\Controllers\SellerController@viewOrderSeller   |```

#### Traiter une commande ({process} = accept/refuse/ready) :
```| PUT      | api/seller/order/{idOrder}/{process}  | App\Http\Controllers\SellerController@processOrder      |```

<hr>

### API Livreur :
#### Voir les commandes à livrer :
```| GET|HEAD | api/shipper/order                     | App\Http\Controllers\ShipperController@viewOrderShipper |```

#### Traiter une commande ({process} = accept/refuse/shipped):
```| PUT      | api/shipper/order/{idOrder}/{process} | App\Http\Controllers\ShipperController@processOrder     |```
