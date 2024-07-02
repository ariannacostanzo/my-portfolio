<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'name' => 'Pixel Art app',
                'description' => 'Ho sviluppato questa applicazione in seguito allo studio della libreria di <span class="color-purple">Python</span>, <span class="color-purple">Tkinter</span>. 
                Data la mia grande passione per la pixel art è stato un vero divertimento sviluppare questa applicazione. L\'app permette
                di scegliere il colore che verrà visualizzato su un riquadro accanto al pulsante colore ed iniziare a disegnare all\'interno delle celle, sia colorandole ad una ad una sia scorrendo con il mouse,
                stesso funzionamento avviene per la cancellazione. Nel menù in alto a sinistra è possibile iniziare un nuovo disegno, aprire un disegno che era stato salvato
                precedentemente oppure salvare il disegno attuale per poterci lavorare successivamente. Ho anche implementato la possibilità di cambiare la dimensione delle celle così da scegliere se disegnare un soggetto più piccolo o più grande.
                Come ultima opzione è possibile salvare in formato png il disegno. 
                ',
                'is_visible' => 1,
                'link' => 'https://github.com/ariannacostanzo/Pixel-Art',
                'image_key' => 'pixel-art'
            ],
            [
                'name' => 'Whatsapp',
                'description' => 'Quest\'app di messaggistica, imitazione di Whatsapp era parte di uno degli esercizi del corso Boolean che ho frequentato. Poichè mi 
                aveva appassionato molto il progetto però, ho implementato una serie di funzionalità aggiuntive. L\'app è sviluppata in <span class="color-purple">Vue</span> ed è responsive,
                cliccando su una delle chat presenti è possibile vedere i messaggi inviati e ricevuti. Nel riquadro a sinistra è possibile inoltre filtrare gli utenti con cui sono presenti delle chat.
                Adesso una descrizione delle funzionalità aggiuntive che mi sono divertita ad implementare. Cliccando sul pulsante emoticon in basso a sinistra nel riquadro della chat 
                aggiungeremo al messaggio da inviare un emoticon casuale. Dopo l\'invio del messaggio possiamo notare come l\'utente sia lì pronto a risponderci con qualcosa di inaspettato ma inerente al mondo di Attack on Titan,
                a cui ho dedicato l\'applicazione. Cliccando su un messaggio abbiamo due opzioni: poter visualizzare le informazioni del messaggio, oppure eliminarlo.
                Ho implementato delle funzionalità per ogni pulsante sul menù della chat. Con la lente di ingrandimento è possibile filtrare i messaggi, con la graffetta invece c\'è la possibilità di inviare delle foto,
                ed infine con l\'ultimo pulsante possiamo svuotare la chat. L\'ultima funzionalità che ho aggiunto è l\'imitazione dell\'invio di un messaggio audio, con possibilità di fermarlo, cancellarlo o inviarlo. Qualsiasi sarà l\'ultimo messaggio inviato, che sia un\'immagine, un\'audio, un\'emoticon o un normalissimo messaggio (se la chat non è vuota) questo verrà mostrato nel riquadro a sinistra
                degli utenti, con la data. ',
                'is_visible' => 1,
                'link' => 'https://github.com/ariannacostanzo/whatsapp',
                'image_key' => 'whatsapp'
            ],
            [
                'name' => 'Deliveboo frontend',
                'description' => 'Progetto finale del corso Boolean, svolto in un team da 5 persone di cui ho fatto parte. Questa è il front Office del progetto, sviluppato in  <span class="color-purple">Vue</span>. Nella pagina di benvenuto abbiamo definito un layout inerente al tema di spedizione cibo.
                E\' presente una lista dei ristoranti affiliati all\'applicazione, con possibilità di filtrare in base al tipo di ristorante. Abbiamo poi abbellito la pagina con delle card e diverse sezioni interattive. 
                Cliccando sulla scheda ristorante troviamo il menù di quest\'ultimo. Qui l\'utente può ordinare i suoi piatti preferiti e sceglierne le quantità comodamente. Il carrello verrà aggiornato e manterrà lo storico anche al ricaricamento della 
                pagina. Dentro quest\'ultimo troviamo i dettagli dell\'ordine, ovveri i piatti scegli, le relative quantità ed il costo individuale e totale, una sezione con i dettagli di consegna ed il metodo di pagamento
                da inserire. Se tutti i dati sono corretti l\'ordine è correttamente inviato e l\'utente verrà indirizzato in una nuova pagina di riepilogo ordine, a cui si potrà
                accedere comodamente tramite un\'icona che apparirà nella homepage.',
                'is_visible' => 1,
                'link' => 'https://github.com/ariannacostanzo/vue-deliveboo',
                'image_key' => 'deliveboo-frontend'
            ],
            [
                'name' => 'Pokemon',
                'description' => 'Pokedex web per pokemon, sviluppato in  <span class="color-purple">Vue</span>. Con quest\'app è possibile visualizzare i pokemon attraverso una serie di filtri. 
                Inizialmente avremmo una lista di pokemon, 20 alla volta, con possibilità di caricarne altri 20 ogni volta, in ordine ascendente. Il pokedex presenta un\'immagine in movimento dei pokemon, il numero nel pokedex, il nome ed il tipo, oppure i tipi. Cliccando sulla selezione in alto a destra
                è possibile ordinare i pokemon in ordine ascendente, discendente, in ordine alfabetico dalla A alla Z e dalla Z alla A. Cliccando sulla ricerca avanzata il alto si apre un menù complesso, con cui è possibile
                filtrare i pokemon attraverso una serie di parametri: il tipo, oppure i tipi, il range numerico in cui si trova, se possiede una specifica abilità ed infine le dimensioni.
                ',
                'is_visible' => 1,
                'link' => 'https://github.com/ariannacostanzo/pokemon',
                'image_key' => 'pokemon'
                
            ],
            [
                'name' => 'Deliveboo backend',
                'description' => 'Progetto finale del corso Boolean, svolto in un team da 5 persone di cui ho fatto parte. Questa è il back Office del progetto, sviluppata in  <span class="color-purple">Laravel e Blade</span>. Abbiamo implementato una pagina di registrazione
                e di login dell\'utente. Alla registrazione l\'utente dovrà anche registrare il suo ristorante. L\'utente che si è iscritto ha la possibilità di visualizzare i piatti del suo menù. Può cambiare la visibità del piatto nel caso in cui fossero finiti gli ingredienti. E\' possibile filtrare i piatti per nome e visualizzarne il dettaglio, 
                nonchè l\'immagine ingrandita. Infine l\'utente può modificare qualsiasi aspetto del piatto e aggiungerne di nuovi al menù. In alto a sinistra, nella barra di navigazione è possibile visualizzare la pagina
                degli ordini ricevuti negli ultimi 12 mesi, e cliccando sul pulsante dettaglio è possibile anche visualizzare il contenuto dell \'ordine. Infine abbiamo implementato un grafico che mostri le statistiche degli ordini ricevuti nell\'ultimo anno.
                ',
                'is_visible' => 1,
                'link' => 'https://github.com/ariannacostanzo/laravel-deliveboo',
                'image_key' => 'deliveboo-backend'
            ],
            [
                'name' => 'Dc comics',
                'description' => 'Un\'applicazione per la gestione dei fumetti, sviluppata in  <span class="color-purple">Laravel e Blade</span>. Nella pagina "Comics" è possibile visualizzare una lista dei fumetti presenti. Con il pulsante di aggiunta veniamo trasferiti alla pagina di
                creazione di un nuovo fumetto. Se tutti i campi superano la validazione verremo reindirizzati alla pagina di dettaglio del fumetto appena creato. I fumetti possono essere cancellati, essi finiranno nel cestino, in cui abbiamo
                la possibilità di cancellarli del tutto oppure ripristinarli. ',
                'is_visible' => 1,
                'link' => 'https://github.com/ariannacostanzo/laravel-dc-comics',
                'image_key' => 'dc-comics'
            ],
        ];

        foreach($projects as $project) {
            //mi salvo il nome immagine
            $imageKey = $project['image_key'];
            unset($project['image_key']);

            $new_project = new Project();
            $new_project->fill($project);
            $new_project->save();

            //collego le immagini
            
            $images = Image::where('image_path', 'like', "%{$imageKey}%")->get();
            $new_project->images()->saveMany($images);
        }
    }
}
