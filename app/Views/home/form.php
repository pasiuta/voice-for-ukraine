<form id="accordion">

    <div class="list-group">

        <!-- Step 1 -->
        <div class="list-group-item py-3" data-acc-step>
            <h5 class="mb-0" data-acc-title>Organisation</h5>
            <div data-acc-content>
                <div class="my-3">
                    <div class="form-group">
                        <label>Which organisation do you want to address:</label>
                        <select name="organisation" class="form-control">
                            <option value="un">UN</option>
                            <option value="nato">NATO</option>
                            <option value="eu">Representatives of EU parliament</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="list-group-item py-3" data-acc-step>
            <h5 class="mb-0" data-acc-title>Personal Data</h5>
            <div data-acc-content>
                <div class="my-3">
                    <div class="form-group form-row">
                        <div class="col-sm-6">
                            <label>Firstname:</label>
                            <input type="text" required name="firstname" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label>Lastname:</label>
                            <input type="text" required name="lastname" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nationality / Language:</label>
                        <select name="nationality" required class="form-control">
                            <option value="">-- select one --</option>
                            <option value="de">germany (german)</option>
                            <option value="at">austria (german)</option>
                            <option value="ch_de">switzerland (german)</option>
                            <option value="ch_fr">switzerland (french)</option>
                            <option value="uk">united kingdom (english)</option>
                            <option value="us">united states (english)</option>
                            <option value="ca">canada (english)</option>
                            <option value="ca">canada (french)</option>
                            <option value="fr">france (french)</option>
                            <option value="es">spain (spanish)</option>
                            <option value="pl">poland (polish)</option>
                            <option value="it">italy (english)</option>
                            <option value="nl">netherlands (english)</option>
                            <option value="dk">denmark (english)</option>
                            <option value="be">belgium (english)</option>
                            <option value="be">belgium (french)</option>
                            <option value="be">belgium (german)</option>
                            <option value="no">norway (english)</option>
                            <option value="is">iceland (english)</option>
                            <option value="po">portugal (english)</option>
                            <option value="ro">romania (english)</option>
                            <option value="hu">hungary (english)</option>
                            <option value="hu">luxembourg (english)</option>
                            <option value="hu">greece (english)</option>
                            <option value="hu">türkiye (english)</option>
                            <option value="hu">the czech republic (english)</option>
                            <option value="hu">bulgaria (english)</option>
                            <option value="hu">estonia (english)</option>
                            <option value="hu">latvia (english)</option>
                            <option value="hu">lithuania (english)</option>
                            <option value="hu">romania (english)</option>
                            <option value="hu">slovakia (english)</option>
                            <option value="hu">slovenia (english)</option>
                            <option value="hu">albania (english)</option>
                            <option value="hu">croatia (english)</option>
                            <option value="hu">montenegro (english)</option>
                            <option value="hu">north macedonia (english)</option>
                            <option value="en">english default template</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

    </div>

</form>

<a href="/" class="mt-3 btn btn-primary btn-block" role="button">Create another template</a>