"use strict";

console.log("prueba");

const URL = "api/songs";

async function loadSongs() {
    try {
        let query = await fetch(URL);

        if (query.ok) {
            let songs = await query.json();
            showSongs(songs);
        }
        else {
            let contenedorTabla = document.getElementById("songManage-table");
            let title = document.createElement("h1");
            title.classList.add("display-6 subtitle");
            title.innerHTML = "no se pudieron cargar las canciones...";
            contenedorTabla.appendChild(title);
        }
    } 
    catch (error) {
        console.log("NO SE PUDO CONTACTAR CON EL SERVIDOR" + error);
    }
}
loadSongs();

function showSongs(songs) {

    let tbodyTabla = document.getElementById("songManage-table-tbody");
    tbodyTabla.innerHTML = "";

    for (const song of songs) {
        let tr = document.createElement("tr");
        let idRow = document.createElement("th");
        idRow.scope = "row";
        idRow.innerHTML = song.id;
        tr.appendChild(idRow);
        let titleRow = document.createElement("td");
        titleRow.innerHTML = song.titulo_cancion;
        tr.appendChild(titleRow);
        let artistRow = document.createElement("td");
        artistRow.innerHTML = song.artista;
        tr.appendChild(artistRow);
        let albumRow = document.createElement("td");
        albumRow.innerHTML = song.titulo_album;
        tr.appendChild(albumRow);
        let actionRow = document.createElement("td");
        actionRow.innerHTML = ' <a href="editSong/' + song.id + '" class="btn btn-dark">Editar</a> <button id="deleteSong' + song.id + '" class="btn btn-dark">Eliminar</button>';
        tr.appendChild(actionRow);

        tbodyTabla.appendChild(tr);

        document.getElementById("deleteSong" + song.id).addEventListener("click", function () {
            deleteSong(song.id);
        });
    }
}

async function deleteSong(id) {
    try {
        let query = await fetch(URL + "/" + id, {
            method: "DELETE"
        });
        if (query.ok) {
            loadSongs();
        }
        else {
            console.log("NO SE PUDO ELIMINAR LA CANCION");
        }
    } 
    catch (error) {
        console.log("NO SE PUDO CONTACTAR CON EL SERVIDOR" + error);
    }


}