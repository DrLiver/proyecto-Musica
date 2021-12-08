"use strict";

const URL = 'api/addSong';

document.getElementById("add-song-submit").addEventListener("click", async function () {
    event.preventDefault();

    let title = document.getElementById("songTitle").value;
    let id_album = document.getElementById("songAlbum").value;

    if (title == "") {
        document.getElementById("titleWarning").innerHTML = "El título no puede estar vacío";
    }else {
        document.getElementById("titleWarning").innerHTML = "";
    }
    if (id_album == "") {
        document.getElementById("albumWarning").innerHTML = "El albúm no puede estar vacío";
    }else {
        document.getElementById("albumWarning").innerHTML = "";
    }

    if (title != "" && id_album != "") {
        let song = {
            'titulo_cancion': title,
            'id_album': id_album,
        }

        try {
            let enviarApi = await fetch(URL, {
                'method': 'POST',
                'headers': {"Content-type": "application/JSON"},
                'body': JSON.stringify(song)
            });
            if (enviarApi.ok || enviarApi.status == 201) {
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
});