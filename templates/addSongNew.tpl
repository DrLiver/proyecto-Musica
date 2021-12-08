<article class="section-content">
    <h1 class="display-6 subtitle">Añadir una canción Nueva</h1>

    <form action="api/addAlbum" class="form">

    <div class="label-input-container">
        <label for="codigo_album" class="form-label">Código Deezer: </label>
        <input type="text" name="codigo_album" class="form-control" id="songCode">
    </div>
    
    <div id="codeWarning" class="form-text text-danger">
    </div>
    
        <div class="form-text-album text-primary" id="load-spinner">
            Los códigos de las canciones de Deezer son los que aparecen en la URL de la página de la canción. Por Ejemplo: 502723.
        </div>

        <div class="form-text-album text-secondary">
            ¿Quieres crear una canción de forma manual? <a href="{BASE_URL}addSongOldMethod">Crea una ahora</a>
        </div>

        <div class="label-input-container submit-container">
            <input type="button" value="Crear" class="btn btn-outline-dark submit-btn" id="add-song-submit">
        </div>

    </form>

</article>