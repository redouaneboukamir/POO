
<?php 
require 'formulaire.php';
require 'class.php';
require 'validator.php';
require 'voiture.php';

// $form = new Form( array(

//     'method' => 'POST',
//     'nom' => 'nom',
//     'prenom' => 'prenom',
//     'option' => array('1',"2",'3',"4"),
//     'textarea' => 'comment',
//     'radio' => array('test','test3','test4'),
//     'check' => array('1','2',"2")

// ));
// $nom = 'yedoh';
// $prenom = 'JC';

// echo $form->create('method');
// echo $form->text('nom',$nom);
// echo $form->text('prenom',$prenom);
// $form->select('option');
// echo $form->submit('modifier');
// echo $form->textArea('textarea');
// $form->radio('radio');
// $form->checkbox('check');
// echo $form->end();

// $feuille = new HTML(
//     array(
//         'css' => 'style.css',
//         'linkImage' => 'test.png',
//         'lien' => 'http://google.com',
//         'js' => 'script.js'
//     )

// );

// echo $feuille->CSS('css');
// echo $feuille->META();
// echo $feuille->image('linkImage');
// echo $feuille->lien('lien');
// echo $feuille->script('js');

// $validator = new Validator();

// if(isset($_POST['nom'])){

//     echo $validator->getName($_POST['nom']);


// }
$voiture1 = new Voiture( 
    array(
        'immatriculation' => 'DE1-reh-300',
        'date' => '1/03/2019',
        'kilometre' => '2000000',
        'modele' => "ibiza",
        'marque' => 'audi',
        'couleur' => 'gris',
        "poid" => "4000"

    ));

    echo $voiture1->immatriculation('immatriculation');
    echo $voiture1->miseEnCircu('date');
    echo $voiture1->km('kilometre');
    echo $voiture1->modele('modele');
    echo $voiture1->marque('marque');
    echo $voiture1->couleur('couleur');
    echo $voiture1->poids('poid');

?>

