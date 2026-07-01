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

function recupererDepartements(array $employes): array {
    $departements = [];
    $nbDepartements = 0;

    
    for ($i = 0; $i < count($employes); $i++) {
        $departementCourant = $employes[$i]['departement'];
        $dejaPresent = false;

        
        for ($j = 0; $j < $nbDepartements; $j++) {
            if ($departements[$j]['code'] === $departementCourant['code']) {
                $dejaPresent = true;
                break;
            }
        }

    
        if (!$dejaPresent) {
            $departements[$nbDepartements] = $departementCourant;
            $nbDepartements++;
        }
    }

    return $departements;
}