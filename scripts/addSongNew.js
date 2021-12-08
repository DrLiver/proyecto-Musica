"use strict";

const URL = "https://cors-anywhere.herokuapp.com/https://api.deezer.com/track/";
const addSongURL = "api/addSongNew";

document.getElementById("add-song-submit").addEventListener("click", async function () {
    event.preventDefault();
    let songCode = document.getElementById("songCode").value;

    if (songCode == "") {
        let codeWarning = document.getElementById("codeWarning").innerHTML = "Falta introducir el código de la canción";
    }
    else {
        getDataSong(songCode);
    }
});

async function getDataSong(songCode) {

    try {
        let respuesta = await fetch(URL + songCode, {
            'mode': 'cors',
            'headers': {
                'Access-Control-Allow-Origin': 'localhost',
                "X-Requested-With": "XMLHttpRequest"
            }
        });
        if (respuesta.ok) {
            let songApi = await respuesta.json();
            let id = await songApi.id;
            let titulo_cancion = await songApi.title;
            let id_album = await songApi.album.id;
            let id_artista = await songApi.artist.id;

            if (await isTheAlbumAvaiable(id_album) == true) {
                document.getElementById("load-spinner").innerHTML = '<div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div>';
                addSong(id, titulo_cancion, id_album, id_artista);
            }
            else {
                document.getElementById("codeWarning").innerHTML = "Esta canción no pertenece a ningún albúm del sistema";
            }
        }
        else {
            document.getElementById("codeWarning").innerHTML = "El codigo de la canción no existe o la API está fallando";
        }
    }

    catch (error) {
        console.log(error);
        document.getElementById("codeWarning").innerHTML = "El codigo introducido no pertenece a una canción";
    }
}

async function addSong(id, titulo_cancion, id_album, id_artista) {
    let song = {
        'id': id,
        'titulo_cancion': titulo_cancion,
        'id_album': id_album,
        'id_artista': id_artista
    }

    try {
        let enviarApi = await fetch(addSongURL, {
            'method': 'POST',
            'headers': {"Content-type": "application/JSON"},
            'body': JSON.stringify(song)
        });
        if (enviarApi.ok || enviarApi.status == 201) {
            setTimeout(function(){}, 2000); 
            window.location.href = "manageSongs";
        }
        else {
            console.log("Error en la petición");
        }

    } 
    catch (error) {
        console.log("NO SE PUDO CONTACTAR CON EL SERVIDOR" + error);
    }
}

async function isTheAlbumAvaiable(id_album) {
    try {
        let apiAlbums = await fetch("api/idAlbums");
        if (apiAlbums.ok) {
            let albumsID = await apiAlbums.json();

            let isAvaiable = false;
            let pos = 0;
            console.log(albumsID[pos].id == id_album);
            while (albumsID[pos].id != id_album) {
                pos++;
            }
            if (albumsID[pos].id == id_album) {
                isAvaiable = true;
            }
            return isAvaiable;

        }
        else {
            console.log("Error en la petición");
            return false;
        }
    } 
    catch (error) {
        console.log("NO SE PUDO CONTACTAR CON EL SERVIDOR" + error);
        return false;
    }
}