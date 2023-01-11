<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Lignes de validation de la langue
    |--------------------------------------------------------------------------
    |
    | Les lignes de langue suivantes contiennent les messages d'erreur par défaut utilisés par
    | la classe de validateur. Certaines de ces règles ont plusieurs versions telles que
    | les règles de taille. N'hésitez pas à ajuster chacun de ces messages ici.
    |
    */

    'lastname' => 'Nom',
    'firstname' => 'Prénom',
    'phone' => 'Téléphone',
    'address' => 'Adresse',
    'zip_code' => 'Code postal',
    'town' => 'Ville',
    'confirm_password' => 'Confirmation du mot de passe',
    'already_registered' => 'Déjà enregistré ?',
    'register' => 'Enregistrer',


    'accepted' => 'Le :attribut doit être accepté.',
    'accepted_if' => 'Le :attribut doit être accepté lorsque :other est :value.',
    'active_url' => 'Le :attribut n\'est pas une URL valide.',
    'after' => 'Le :attribut doit être une date postérieure à :date.',
    'after_or_equal' => 'Le :attribut doit être une date postérieure ou égale à :date.',
    'alpha' => 'Le :attribut ne doit contenir que des lettres.',
    'alpha_dash' => 'Le :attribut ne doit contenir que des lettres, des chiffres, des tirets et des underscores.',
    'alpha_num' => 'Le :attribut ne doit contenir que des lettres et des chiffres.',
    'array' => 'Le :attribut doit être un tableau.',
    'ascii' => 'Le :attribut ne doit contenir que des caractères alphanumériques et des symboles à octet unique.',
    'before' => 'Le :attribut doit être une date antérieure à :date.',
    'before_or_equal' => 'Le :attribut doit être une date antérieure ou égale à :date.',
    'between' => [
        'array' => 'Le :attribut doit avoir entre :min et :max éléments.',
        'file' => 'Le :attribut doit être entre :min et :max kilo-octets.',
        'numeric' => 'Le :attribut doit être compris entre :min et :max.',
        'string' => 'Le :attribut doit avoir entre :min et :max caractères.',
    ],
    'boolean' => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed' => 'La confirmation de :attribute ne correspond pas.',
    'current_password' => 'Le mot de passe est incorrect.',
    'date' => 'Le :attribute n\'est pas une date valide.',
    'date_equals' => 'Le :attribute doit être une date égale à :date.',
    'date_format' => 'Le :attribute ne correspond pas au format :format.',
    'decimal' => 'Le :attribute doit avoir :decimal décimales.',
    'declined' => 'Le :attribute doit être refusé.',
    'declined_if' => 'Le :attribute doit être refusé lorsque :other est :value.',
    'different' => 'Le :attribute et :other doivent être différents.',
    'digits' => 'Le :attribute doit être de :digits chiffres.',
    'digits_between' => 'Le :attribute doit avoir entre :min et :max chiffres.',
    'dimensions' => 'Les dimensions de l\'image :attribute sont invalides.',
    'distinct' => 'Le champ :attribute a une valeur en double.',
    'doesnt_end_with' => 'Le :attribute ne peut pas se terminer par l\'un des éléments suivants : :values.',
    'doesnt_start_with' => 'Le :attribute ne peut pas commencer par l\'un des éléments suivants : :values.',
    'email' => 'L\'adresse email doit être une adresse email valide.',
    'ends_with' => 'Le :attribute doit se terminer par l\'un des éléments suivants : :values.',
    'enum' => 'Le :attribute sélectionné n\'est pas valide.',
    'exists' => 'Le :attribute sélectionné n\'est pas valide.',
    'file' => 'Le :attribute doit être un fichier.',
    'filled' => 'Le champ :attribute doit avoir une valeur.',
    'gt' => [
        'array' => 'Le :attribute doit avoir plus de :value éléments.',
        'file' => 'Le :attribute doit être supérieur à :value kilo-octets.',
        'numeric' => 'Le :attribute doit être supérieur à :value.',
        'string' => 'Le :attribute doit être supérieur à :value caractères.',
    ],
    'gte' => [
        'array' => 'Le :attribute doit avoir au moins :value éléments.',
        'file' => 'Le :attribute doit être supérieur ou égal à :value kilo-octets.',
        'numeric' => 'Le :attribute doit être supérieur ou égal à :value.',
        'string' => 'Le :attribute doit être supérieur ou égal à :value caractères.',
    ],
    'image' => 'Le :attribute doit être une image.',
    'in' => 'Le :attribute sélectionné n\'est pas valide.',
    'in_array' => 'Le champ :attribute n\'existe pas dans :other.',
    'integer' => 'Le :attribute doit être un entier.',
    'ip' => 'Le :attribute doit être une adresse IP valide.',
    'ipv4' => 'Le :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'Le :attribute doit être une adresse IPv6 valide.',
    'json' => 'Le :attribute doit être une chaîne JSON valide.',
    'lowercase' => 'Le :attribute doit être en minuscules.',
    'lt' => [
        'array' => 'Le :attribute doit avoir moins de :value éléments.',
        'file' => 'Le :attribute doit être inférieur à :value kilo-octets.',
        'numeric' => 'Le :attribute doit être inférieur à :value.',
        'string' => 'Le :attribute doit être inférieur à :value caractères.',
    ],
    'lte' => [
        'array' => 'Le :attribute ne doit pas avoir plus de :value éléments.',
        'file' => 'Le :attribute doit être inférieur ou égal à :value kilo-octets.',
        'numeric' => 'Le :attribute doit être inférieur ou égal à :value.',
        'string' => 'Le :attribute doit être inférieur ou égal à :value caractères.',
    ],
    'mac_address' => 'Le :attribute doit être une adresse MAC valide.',
    'max' => [
        'array' => 'Le :attribute ne doit pas avoir plus de :max éléments.',
        'file' => 'Le :attribute ne doit pas être supérieur à :max kilo-octets.',
        'numeric' => 'Le :attribute ne doit pas être supérieur à :max.',
        'string' => 'Le :attribute ne doit pas être supérieur à :max caractères.',
    ],
    'max_digits' => 'Le :attribute ne doit pas avoir plus de :max chiffres.',
    'mimes' => 'Le :attribute doit être un fichier de type :values.',
    'mimetypes' => 'Le :attribute doit être un fichier de type :values.',
    'min' => [
        'array' => 'Le :attribute doit avoir au moins :min éléments.',
        'file' => 'Le :attribute doit avoir au moins :min kilo-octets.',
        'numeric' => 'Le :attribute doit avoir au moins :min.',
        'string' => 'Le :attribute doit avoir au moins :min caractères.',
    ],
    'min_digits' => 'Le :attribute doit avoir au moins :min chiffres.',
    'multiple_of' => 'Le :attribute doit être un multiple de :value.',
    'not_in' => 'Le :attribute sélectionné n\'est pas valide.',
    'not_regex' => 'Le format du :attribute est invalide.',
    'numeric' => 'Le :attribute doit être un nombre.',
    'password' => [
        'letters' => 'Le mot de passe doit contenir au moins une lettre.',
        'mixed' => 'Le mot de passe doit contenir au moins une lettre majuscule et une lettre minuscule.',
        'numbers' => 'Le mot de passe doit contenir au moins un nombre.',
        'symbols' => 'Le mot de passe doit contenir au moins un symbole.',
        'uncompromised' => 'Le mot de passe fourni a été présent dans une fuite de données. Veuillez choisir un :attribute différent.',
    ],
    'present' => 'Le champ :attribute doit être présent.',
    'prohibited' => 'Le champ :attribute est interdit.',
    'prohibited_if' => 'Le champ :attribute est interdit lorsque :other est :value.',
    'prohibited_unless' => 'Le champ :attribute est interdit sauf si :other est présent dans :values.',
    'prohibits' => 'Le champ :attribute interdit la présence de :other.',
    'regex' => 'Le format du :attribute est invalide.',
    'required' => 'Le champ :attribute est requis.',
    'required_array_keys' => 'Le champ :attribute doit contenir des entrées pour :values.',
    'required_if' => 'Le champ :attribute est requis lorsque :other est :value.',
    'required_if_accepted' => 'Le champ :attribute est requis lorsque :other est accepté.',
    'required_unless' => 'Le champ :attribute est requis sauf si :other est présent dans :values.',
    'required_with' => 'Le champ :attribute est requis lorsque :values est présent.',
    'required_with_all' => 'Le champ :attribute est requis lorsque :values sont présents.',
    'required_without' => 'Le champ :attribute est requis lorsque :values n\'est pas présent.',
    'required_without_all' => 'Le champ :attribute est requis lorsque aucun de :values n\'est présent.',
    'same' => 'Le :attribute et :other doivent être identiques.',
    'size' => [
        'array' => 'Le :attribute doit contenir :size éléments.',
        'file' => 'Le :attribute doit être de :size kilobytes.',
        'numeric' => 'Le :attribute doit être de :size.',
        'string' => 'Le :attribute doit être de :size caractères.',
    ],
    'starts_with' => 'Le :attribute doit commencer par l\'un des éléments suivants : :values.',
    'string' => 'Le :attribute doit être une chaîne de caractères.',
    'timezone' => 'Le :attribute doit être un fuseau horaire valide.',
    'unique' => 'Le :attribute a déjà été pris.',
    'uploaded' => 'Le :attribute n\'a pas pu être téléchargé.',
    'uppercase' => 'Le :attribute doit être en majuscules.',
    'url' => 'Le :attribute doit être une URL valide.',
    'ulid' => 'Le :attribute doit être un ULID valide.',
    'uuid' => 'Le :attribute doit être un UUID valide.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'lastname' => 'nom',
        'firstname' => 'prénom',
        'email' => 'adresse email',
        'phone' => 'téléphone',
        'address' => 'adresse',
        'zip_code' => 'code postal',
        'town' => 'ville',
        'password' => 'mot de passe',
        'confirm_password' => 'confirmation du mot de passe',
        'already_registered' => 'déjà enregistré ?',
        'register' => 'enregistrer',
    ],

];
