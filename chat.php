<div class="page-part__chat-module">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6" style="padding: 0;">
                <div class="chats_sidebar">
                    <div class="searchblock">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="user_logo"></div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group" style="width: 100%">
                                    <input type="text" class="form-control" placeholder="Zoeken naar een groep of persoon...">
                                    <div class="input-group-append">
                                        <button class="btn nav__search-icon" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="contact_person person_1" id="contactperson">
                        <div class="row" style="margin-left: 5%; margin-top: 15px;">
                            <div class="col-md-2">
                                <div class="contact_logo"></div>
                            </div>

                            <div class="col-md-8">
                                <h5 style="margin-top: 15px;" id="person" onclick="changeText()">Mees Postma</h5>
                            </div>
                        </div>
                    </div>

                    <div class="contact_person person_2" id="contactperson">
                        <div class="row" style="margin-left: 5%; margin-top: 15px;">
                            <div class="col-md-2">
                                <div class="contact_logo"></div>
                            </div>

                            <div class="col-md-8">
                                <h5 style="margin-top: 15px;" id="person" onclick="changeText()">Cornell van der Straaten</h5>
                            </div>
                        </div>
                    </div>

                    <div class="contact_person person_3" id="contactperson">
                        <div class="row" style="margin-left: 5%; margin-top: 15px;">
                            <div class="col-md-2">
                                <div class="contact_logo"></div>
                            </div>

                            <div class="col-md-8">
                                <h5 style="margin-top: 15px;" id="person" onclick="changeText()">Mitchel Westerwaal</h5>
                            </div>
                        </div>
                    </div>

                    <div class="contact_person person_4" id="contactperson">
                        <div class="row" style="margin-left: 5%; margin-top: 15px;">
                            <div class="col-md-2">
                                <div class="contact_logo"></div>
                            </div>

                            <div class="col-md-8">
                                <h5 style="margin-top: 15px;" id="person" onclick="changeText()">Larissa van Rijn</h5>
                            </div>
                        </div>
                    </div>

                    <div class="contact_person person_5" id="contactperson">
                        <div class="row" style="margin-left: 5%; margin-top: 15px;">
                            <div class="col-md-2">
                                <div class="contact_logo"></div>
                            </div>

                            <div class="col-md-8">
                                <h5 style="margin-top: 15px;" id="person" onclick="changeText()">Jan van Dijk</h5>
                            </div>
                        </div>
                    </div>

                    <div class="contact_person person_6" id="contactperson" ">
                        <div class=" row" style="margin-left: 5%; margin-top: 15px;">
                        <div class="col-md-2">
                            <div class="contact_logo"></div>
                        </div>

                        <div class="col-md-8">
                            <h5 style="margin-top: 15px;" id="person" onclick="changeText()">Sabrina van Block</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="padding: 0">
            <div class="active_person">
                <div class="row" style="margin-left: 2%">
                    <div class="col-md-2">
                        <div class="contact_logo"></div>
                    </div>

                    <div class="col-md-8">
                        <h5 style="margin-top: 15px;" id="changingName">Jan van Dijk</h5>
                    </div>
                </div>
            </div>

            <div class="chat">
                <div class="box sb1">
                    <p>Hallo, hoe gaat het met u?</p>
                    <span>13:17</span>
                </div>

                <div class="box sb2" style="float: right;">
                    <p>Bedankt dat u het vraagt. Het gaat prima! Met u?</p>
                    <span>13:19</span>
                </div>
            </div>

            <div class="send_chat">
                <div class="row">
                    <div class="col-md-2">
                        <i class="fas fa-folder-plus"></i>
                    </div>

                    <div class="col-md-9">
                        <div class="input-group send" style="width: 100%; margin-top: 0">
                            <input style="background-color: #EBF0F2;" type="text" class="form-control" placeholder="Zoeken naar een groep of persoon...">
                            <div class="input-group-append">
                                <button class="btn nav__search-icon" type="button" style="background: #EBF0F2;">
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const person = document.getElementById('person');

    document.getElementById('contactperson').addEventListener('click', () => {
        console.log('test');
        document.getElementById('changingName').innerHTML = 'test';
    });
</script>