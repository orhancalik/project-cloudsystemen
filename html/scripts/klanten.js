// Maak een fetch naar de Random User Generator API om klantgegevens op te halen
fetch('https://randomuser.me/api/?results=20') // Hier kun je het aantal gewenste klanten aanpassen (bijv. 5 klanten)
  .then(response => response.json())
  .then(data => {
    const klanten = data.results; // 'results' bevat de lijst met klantgegevens

    const klantContainer = document.querySelector('.klant');

    klanten.forEach(klant => {
      const { title, first, last } = klant.name;
      const country = klant.location.country;
      const picture = klant.picture.large;

      const klantDiv = document.createElement('div');
      klantDiv.classList.add('klant-item');

      const klantImg = document.createElement('img');
      klantImg.classList.add('klant-img');
      klantImg.src = picture;
      klantImg.alt = `${first} ${last}`;

      const klantNaam = document.createElement('p');
      klantNaam.textContent = `${title} ${first} ${last}`;

      const klantLand = document.createElement('p');
      klantLand.textContent = country;

      klantDiv.appendChild(klantImg);
      klantDiv.appendChild(klantNaam);
      klantDiv.appendChild(klantLand);

      klantContainer.appendChild(klantDiv);
    });
  })
  .catch(error => {
    console.log('Er is een fout opgetreden bij het ophalen van klantgegevens:', error);
  });