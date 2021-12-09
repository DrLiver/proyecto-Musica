"use strict";

const URL = "https://api.deezer.com/album/";
const addAlbumURL = "api/addAlbum";

document.getElementById("add-album-submit").addEventListener("click", async function () {
    event.preventDefault();
    let albumCode = document.getElementById("albumCode").value;

    if (albumCode == "") {
        let codeWarning = document.getElementById("codeWarning").innerHTML = "Falta introducir el código de álbum";
    }
    else {
        getDataAlbum(albumCode);
    }
});

async function getDataAlbum(albumCode) {

    console.log(URL + albumCode);

    try {
        let respuesta = await fetch(URL + albumCode, {
            'mode': 'cors',
            'headers': {
                'Access-Control-Allow-Origin': 'localhost',
                "X-Requested-With": "XMLHttpRequest"
            }
        });
        if (respuesta.ok) {
            let albumApi = await respuesta.json();
            console.log(albumApi);
            let id = await albumApi.id;
            let url_cover = await albumApi.cover_big;
            let titulo_album = await albumApi.title;
            let artista = await albumApi.artist.name;
            let id_artista = await albumApi.artist.id;
            let generos = await albumApi.genres.data[0].name;
            let anio = albumApi.release_date;
        
            document.getElementById("load-spinner").innerHTML = '<div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div>';
            addAlbum(id, url_cover, titulo_album, artista, id_artista, generos, anio);
        }
        else {
            document.getElementById("codeWarning").innerHTML = "El codigo del albúm no existe o la API está fallando";
        }
    }

    catch (error) {
        console.log(error);
        document.getElementById("codeWarning").innerHTML = "No pudimos comunicarnos con la API";
    }
}

async function addAlbum(id, url_cover, titulo_album, artista, id_artista, genero, anio) {
    let album = {
        'id': id,
        'url_cover': url_cover,
        'titulo_album': titulo_album,
        'artista': artista,
        'id_artista': id_artista,
        'genero': genero,
        'año': anio
    }

    try {
        let enviarApi = await fetch(addAlbumURL, {
            'method': 'POST',
            'headers': {"Content-type": "application/JSON"},
            'body': JSON.stringify(album)
        });
        if (enviarApi.ok || enviarApi.status == 201) {
            window.location.href = "manageAlbums";
        }
        else {
            console.log("Error en la petición");
        }

    } 
    catch (error) {
        console.log("NO SE PUDO CONTACTAR CON EL SERVIDOR" + error);
    }
}



