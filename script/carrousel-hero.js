document.addEventListener('DOMContentLoaded', function() {
    // Récupérer tous les éléments du carrousel
    const carrousels = document.querySelectorAll('.carrousel');
    const radios = document.querySelectorAll('.carrousel__radio');
    
    // Fonction pour afficher un slide spécifique
    function afficherSlide(index) {
        // Cacher tous les slides
        carrousels.forEach(slide => {
            slide.style.opacity = 0;
        });
        
        // Afficher le slide sélectionné
        if (carrousels[index]) {
            carrousels[index].style.opacity = 1;
        }
    }
    
    // Gérer les clics sur les radio boutons
    radios.forEach((radio, index) => {
        radio.addEventListener('change', () => {
            afficherSlide(index);
        });
    });
    
    // Carrousel automatique avec setTimeout
    let currentIndex = 0;
    
    function changerSlide() {
        currentIndex = (currentIndex + 1) % radios.length;
        if (radios[currentIndex]) {
            radios[currentIndex].checked = true;
            afficherSlide(currentIndex);
        }
        
        // Programmer le prochain changement après 5 secondes
        setTimeout(changerSlide, 5000);
    }
    
    // Démarrer le carrousel après 5 secondes
    setTimeout(changerSlide, 5000);

});