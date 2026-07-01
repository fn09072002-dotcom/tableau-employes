<?php
function initialiserEmployes(): array {
    return [
       0=> [
            'nom' => 'ndiaye',
            'prenom' => 'Fatou',
            'matricule' => '123456',
            'departement' => [
                'code' => 'INF',
                'nom' => 'informatique'
            ],
            'subordonnes' => [ 1 ,2]
        ],
          1=> [
            'nom' => 'diop',
            'prenom' => 'Moussa',
            'matricule' => '789012',
            'departement' => [
                'code' => 'MTH',
                'nom' => 'mathematiques'
            ],
            'subordonnes' => [2]
        ],
        2=> [
            'nom' => 'ba',
            'prenom' => 'Awa',
            'matricule' => '345678',
            'departement' => [
                'code' => 'PHY',
                'nom' => 'physique'
            ],
            'subordonnes' => []
        ]
    ];
}
$employes = initialiserEmployes();