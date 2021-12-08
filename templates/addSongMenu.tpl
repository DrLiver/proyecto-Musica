<article class="section-content">
    <h1 class="display-6 subtitle">Añadir Una Cancion Nueva</h1>

    <form action="api/addSong" class="form">
        <div class="label-input-container">
            <label for="titulo_cancion" class="form-label">Título: </label>
            <input type="text" name="titulo_cancion" class="form-control" id="songTitle">
        </div>

        <div id="titleWarning" class="form-text text-danger">
        </div>

        <div class="label-input-container">
            <label for="album" class="form-label">Albúm: </label>
            <select name="album" id="songAlbum" class="form-control">
                <option value="">Selecciona un album</option>
                {foreach from=$albums item=$item}
                    <option value="{$item->id}">{$item->titulo_album} - {$item->artista}</option>    
                {/foreach}
            </select>
        </div>

        <div id="albumWarning" class="form-text text-danger">
        </div>

        <div class="form-text-album text-secondary message">
            ¿El albúm que buscas no está entre las opciones? <a href="{BASE_URL}addAlbum">Crea uno ahora</a>
        </div>

        <div class="label-input-container submit-container">
            <input type="button" value="Crear" class="btn btn-outline-dark submit-btn" id="add-song-submit">
        </div>

    </form>

</article>