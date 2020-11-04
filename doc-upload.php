<div class="page-part__upload-module">
    <form action="#" class="upload-form">
        <textarea name="textarea" id="textarea" cols="30" rows="10" class="upload-form__text-area" placeholder="Typ uw bericht hier"></textarea>
        <div class="upload-form__small-inputs">
            <div class="upload-input upload-input-bestand">
                <input type="text" class="upload-input__text" placeholder="Uploaden naar map">
                <img src="#" alt="Pijltje naar beneden icoon" id="arrowIcon">
            </div>
            <div class="upload-input upload-input-bestand bestand-input">
                <label for="fileInput">
                    <input type="file" name="file-input" id="fileInput" hidden>
                    <input type="text" class="upload-input__text" placeholder="Kies bestand">
                    <img src="#" alt="Document icoon" id="documentIcon">
                </label>
            </div>
            <div class="upload-input-submit-div">
                <button onclick="getNotification()" class="upload-input-submit">Uploaden</button>
            </div>
            <div class="notification" style="display: none;" id="notification">
                <div class="notification-content">
                    <i class="notification-check fas fa-check"></i>
                    <p class="notification-text">Het bestand is succesvol toegevoegd</p>
                </div>
            </div>
        </div>

    </form>
</div>