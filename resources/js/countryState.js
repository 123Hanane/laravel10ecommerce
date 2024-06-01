// countryState.js

// Fonction pour charger les États en fonction du pays sélectionné
function loadStates(countryId) {
    // Ici, vous pouvez effectuer une requête AJAX pour récupérer les États du pays
    // et les charger dynamiquement dans le menu déroulant des États
    // Exemple :
    $.ajax({
        url: '/load-states/' + countryId,
         method: 'GET',
        success: function(data) {
            // Code pour charger les États dans le menu déroulant
         }
     });
}

// Écouteur d'événements pour le changement de pays
document.getElementById('s_country').addEventListener('change', function() {
    var countryId = this.value;
    loadStates(countryId);
});
