<?php
//EXERCICES 1 ET 2
class Ville {
// Propriétés de la classe
    protected $Nom; 
    protected $Departement; 

// Constructeur de la classe
public function __construct($Nom, $Departement) {
    $this->nom = $Nom;
    $this->departement = $Departement; 
}

// Méthode pour afficher les infos des villes
public function afficherInfosVille() {
    echo "La ville {$this->nom} est dans le département {$this->departement}.";
}

}

// Création d'objets Ville
$ville1 = new Ville("Paris", "75");
$ville2 = new Ville("Marseille", "13");
$ville3 = new Ville("Lyon", "69");

// Méthode affichage sur web
$ville1->afficherInfosVille();
echo "<br>";
$ville2->afficherInfosVille();
echo "<br>";
$ville3->afficherInfosVille();
echo "<br>";




//EXERCICE 3
class Personne {
// Propriétés de la classe
    public $Nom;
    public $Prenom;
    public $Adresse;

// Constructeur de la classe
    public function __construct($Nom, $Prenom, $Adresse) {
        $this->nom = $Nom;
        $this->prenom = $Prenom;
        $this->adresse = $Adresse;
    }


// Destructeur de la classe
    public function __destruct() {
        echo "L'object Personne pour {$this->prenom} {$this->nom} a été détruit. <br>" . PHP_EOL;
    }

// Méthode pour obtenir les informations complètes de la personne
    public function getPersonne() {
        return "Nom: {$this->nom}, Prénom: {$this->prenom}, Adresse: {$this->adresse}";
    }

// Méthode pour modifier l'adresse de la personne 
    public function setAdresse($nouvelleAdresse) {
        $this->adresse = $nouvelleAdresse;
        echo "L'adresse de {$this->prenom} {$this->nom} a été modifiée <br> Nouvelle adresse: {$this->adresse}" . PHP_EOL;
    }
}

// Création d'objets Personne avec le constructeur
$personne1 = new Personne("Dupont", "Alice", "1 Rue de la Liberté <br>");
$personne2 = new Personne("Martin", "Bob", "5 Avenue des Roses <br>");

// Utilisation de la méthode getPersonne
echo $personne1->getPersonne() . PHP_EOL;
echo $personne2->getPersonne() . PHP_EOL;

// Utilisation de la méthode setAdresse
$personne1->setAdresse("10 Boulevard du Bonheur <br>");
$personne2->setAdresse("10 Chemin des Platanes <br>");





//EXERCICES 4, 5 ET 6
class Form {
// Propriétés pour stocker le code HTML du formulaire
protected $formHtml;

// Constructeur de la classe
public function __construct() {

$this->formHtml = '<form>';
$this->formHtml = '<fieldset>';

}

public function setText($name, $placeholder) {

$this->formHtml .= "<input type='text' name='{$name}' placeholder='{$placeholder}'> <br>";
}

// Ajout de l'adresse dans le formulaire
public function setAdresse($name, $placeholder) {

$this->formHtml .= "<input type='text' name='{$name}' placeholder='{$placeholder}'> <br>";
}

// Ajout du mail dans le formulaire
public function setMail($name, $placeholder) {

$this->formHtml .= "<input type='email' name='{$name}' placeholder='{$placeholder}'> <br>";
}

// Méthode pour  ajouter un bouton envoi
public function setSubmit($value) {

$this->formHtml .= "<input type='submit' value='{$value}'> <br>";
}

// Méthode pour obtenir le code HTML complet du formulaire 
public function getForm() {
// Ajout des balises de fin du formulaire
$this->formHtml .= '<fieldset>';
$this->formHtml .= '<form>';

return $this->formHtml;// Retourne le formulaire complet en HTML
}
  
}


class Form2 extends Form {// Extension du form2 dans le form

// Ajout d'un radio
    public function setRadio($name, $value, $label) {
        $this->formHtml .= "<input type='radio' name='{$name}' value='{$value}'> {$label}";
    }

// Ajout d'une checkbox
    public function setCheckbox($name, $value, $label) {
        $this->formHtml .= "<input type='checkbox name='{$name}' value='{$value}'> {$label}";
    }


    public function getForm() {
        $this->formHtml .= '</fieldset>';
        $this->formHtml .= '</form>';
        return $this->formHtml;
    }
}

$formulaire = new Form();

//Ajout des zones texte
$formulaire->setText('nom', 'Nom');
$formulaire->setText('prenom', 'Prénom');
$formulaire->setAdresse('adresse', 'Adresse');
$formulaire->setMail('email', 'Adresse e-mail');

echo $formulaire->getForm();



$formulaire2 = new Form2(); // Sous classe

// Création d'un objet Form
$formulaire = new Form();

//Ajout des zones radio et checkbox ainsi que le  bouton d'envoi
$formulaire2->setRadio('genre', 'homme', 'Homme');
$formulaire2->setRadio('genre', 'femme', 'Femme');
$formulaire2->setCheckbox('newsletter', 'oui ou non', 'S\'abonner à la newsletter');
$formulaire->setSubmit('Envoyer');

echo $formulaire2->getForm();