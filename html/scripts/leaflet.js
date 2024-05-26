let map = L.map('map').setView([51.16246190252133, 4.143708183967079], 13);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);


let OGKitIcon = L.icon({
    iconUrl: "./assets/fitkaptan-logo-transparant.png",
  
    iconSize: [200, 100], 
    iconAnchor: [0, 40], 
  });
  L.marker([51.16246190252133, 4.143708183967079], { icon: OGKitIcon }).addTo(map);