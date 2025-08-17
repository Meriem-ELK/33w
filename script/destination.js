(function () {
  const list_categories = document.querySelectorAll(".list_categories li");
  
  list_categories.forEach((categorie) => {
    categorie.addEventListener("click", (e) => {
      // Supprimer la classe active de tous les <li>
      list_categories.forEach((cat) => cat.classList.remove("active"));

      // Ajouter la classe active à l'élément cliqué
      categorie.classList.add("active");

      const categoryId = categorie.dataset.id;
      mon_fetch(categoryId);
    });
  });

  const categoryId = 4;
  const domaine = document.querySelector("base").href;
  mon_fetch(categoryId);

  function mon_fetch(categoryId) {
    const apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
    
    fetch(apiUrl)
      .then((response) => response.json())
      .then((data) => {
       
        const destinationList = document.querySelector(".destination__list");
        destinationList.innerHTML = "";
        
        data.forEach((article) => {
          const articleElement = document.createElement("div");
          articleElement.innerHTML = `
          <input type="checkbox" class="accordeon__chk" id="accordeon__chk__${article.id}">
          <label class="accordeon" for="accordeon__chk__${article.id}">
            <h3>${article.title.rendered}</h3>
          </label>  
                  
          <div class="accordeon__excerpt">${article.excerpt.rendered}
            <a href="${article.link}">Lire plus</a>
          </div>
          `;
          destinationList.appendChild(articleElement);
        });
        
        const accordionContent = document.querySelector(".destination__accordion-content");
        accordionContent.style.maxHeight = "none";
        accordionContent.style.padding = "2rem";
      })
      .catch((error) =>
        console.error("Erreur lors de la récupération des articles:", error)
      );
  }
})();
