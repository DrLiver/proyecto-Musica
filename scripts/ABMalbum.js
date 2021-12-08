"use strict";

const url = 'api/albums';

async function loadAlbums() {
    try {
       let respuesta = await fetch(url);
       
       if (respuesta.ok) {
           let albums = await respuesta.json();
           showALbums(albums);
       }
       else {
           console.log("hubo un problema con la consulta a la API");
       }
    } 
    catch (error) {
        console.log("NO SE PUDO CONTACTAR CON EL SERVIDOR/API" + error);
    }
}
loadAlbums();

function showALbums(albums) {
    let tbodyTabla = document.getElementById("albumManage-table-tbody");
    tbodyTabla.innerHTML = "";

    for (const album of albums) {

        let tr = document.createElement("tr");

        let coverRow = document.createElement("td");
        coverRow.innerHTML = '<img src="' + album.url_cover + '" class="album-image">';
        tr.appendChild(coverRow);
    

        let idRow = document.createElement("th");
        idRow.scope = "row";
        idRow.innerHTML = album.id;
        tr.appendChild(idRow);

        let titleRow = document.createElement("td");
        titleRow.innerHTML = album.titulo_album;
        tr.appendChild(titleRow);

        let artistRow = document.createElement("td");
        artistRow.innerHTML = album.artista;
        tr.appendChild(artistRow);

        let actionRow = document.createElement("td");
        actionRow.innerHTML = '<button id="deleteAlbum' + album.id + '" class="btn btn-dark">Eliminar</button>';
        tr.appendChild(actionRow);

        tbodyTabla.appendChild(tr);

        document.getElementById("deleteAlbum" + album.id).addEventListener("click", async function () {
            deleteAlbum(album.id);
        });
    }
}

async function deleteAlbum(id) {
    try {
        let query = await fetch(url + "/" + id, {
            'method': "DELETE"
        });
        if (query.ok) {
            loadAlbums();
        }
        else {
            loadAlbums();
        }
    } 
    catch (error) {
        console.log("NO SE PUDO CONTACTAR CON EL SERVIDOR" + error);
    }  
}