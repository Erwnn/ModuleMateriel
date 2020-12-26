$(document).ready( function () {
    $('#materielTable').DataTable();

} );

const showMateriel = (materiel) => {
    alert('Nom : '+materiel.nom+'\nPrix : '+materiel.prix+'€ \nQuantité : '+materiel.quantite+'\nDate de création : '+materiel.createdAt);
}