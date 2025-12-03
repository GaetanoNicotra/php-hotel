# 🏨 PHP Hotel List

Questo progetto è una semplice applicazione web in **PHP** che visualizza un elenco di hotel da un array. L'applicazione utilizza **Bootstrap** per la stilizzazione e include una funzionalità di **filtraggio** che permette agli utenti di visualizzare solo gli hotel dotati di parcheggio.

## 🌟 Funzionalità

* **Visualizzazione Tabellare:** Gli hotel vengono mostrati in una tabella HTML 
* **Dati degli Hotel:** Ogni hotel include le seguenti informazioni:
    * `name` (Nome)
    * `description` (Descrizione)
    * `parking` (Disponibilità di parcheggio - `true` o `false`)
    * `vote` (Voto - da 1 a 5)
    * `distance_to_center` (Distanza dal centro in km)
* **Filtraggio con Checkbox:** È possibile filtrare gli hotel per mostrare solo quelli che dispongono di un parcheggio, utilizzando una checkbox e il metodo **GET**.

## 💻 Stack Tecnologico

* **PHP:** Linguaggio di scripting lato server.
* **HTML5:** Struttura della pagina web.
* **Bootstrap 5.3.8:** Framework CSS per la reattività e la stilizzazione.


## 🛠️ Struttura del Codice

Il file principale contiene l'intero codice:

* **Array degli Hotel:** L'array `$hotels` contiene i dati di tutti gli hotel.
* **Logica di Filtraggio PHP:**
    ```php
    $parkingRequest = false;
    if(isset($_GET['parking']) && $_GET['parking'] == 'on'){
        $parkingRequest=true;
    }
    ```
    Questa sezione gestisce l'input della checkbox.
* **Form HTML:** Un semplice form `GET` con una checkbox per il filtro parcheggio.
* **Tabella HTML e Stampa dei Dati:**
