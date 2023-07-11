document.getElementById('suggestionForm').addEventListener('submit', function(event) {
    event.preventDefault(); 
  
    var duree = document.getElementById('duree').value;
    var objectif = document.getElementById('objectif').value;
  
    if (duree === '') {
      alert('Veuillez entrer une durée valide.');
      return;
    }
  
    var suggestions = getSuggestions(duree, objectif);
  
    var suggestionsContainer = document.getElementById('suggestions');
    suggestionsContainer.innerHTML = '';
  
    if (suggestions.length === 0) {
      suggestionsContainer.innerHTML = 'Aucune suggestion disponible pour la durée spécifiée.';
    } else {
      var ul = document.createElement('ul');
      for (var i = 0; i < suggestions.length; i++) {
        var li = document.createElement('li');
        li.textContent = suggestions[i];
        ul.appendChild(li);
      }
      suggestionsContainer.appendChild(ul);
      document.getElementById('exportBtn').disabled = false; 
    }
  });
  
  
  document.getElementById('clearBtn').addEventListener('click', function() {
    document.getElementById('suggestionForm').reset();
    document.getElementById('suggestions').innerHTML = '';
    document.getElementById('exportBtn').disabled = true;
  });
  
  function getSuggestions(duree, objectif) {
    var suggestions = [];
  
    if (objectif === 'perdre') {
      if (duree >= 7) {
        suggestions.push('Regime equilibre avec une alimentation riche en fruits et legumes Adopter un mode de vie sain et équilibré en privilégiant une alimentation qui met abondance de fruits et légumes.');
        suggestions.push('Faites des sports telles la marche et la natation, cella aide votre corps a generer mieux votre corps');
      } else {
        suggestions.push('Evitez de manger des drunk food, adoptez toujours des aliments saines pour faire en sorte que votre corps possede plus de proteines');
        suggestions.push('Etablissez un sport au moins trente minutes par jours pour renforcer votre force ainsi que votre energie');
      }
    } else if (objectif === 'maintenir') {
      suggestions.push('Ne jamais rater votre repas manger le matin midi et le soir');
      suggestions.push('Faire des exercices chaque matin recommandation: yoga aide à vous relaxer et à vous concentrer.');
    } else if (objectif === 'prendre') {
      if (duree >= 7) {
        suggestions.push('Le proteines est necessaire pour la santé adoptez des regimes a base de proteine moins calorique.');
        suggestions.push('Faire de la musculation aide votre perte de poids a diminuer rapidement');
      } else {
        suggestions.push('Augmentez votre apport calorique quotidien');
        suggestions.push('Developper vos muscles par des exercices de musculation');
      }
    }
  
    return suggestions;
  }
  