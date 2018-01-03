<!--        prescription-->
<div id="uplpres_tab" class="myc_cont" style="display:block;">
    <div class="col-sm-12 form-horizontal" id="uplodspit">
        <div class="row">
            <div class="form-group">
                <label class="col-sm-2 text-right notes_req">Order ID</label>
                <div class="col-sm-5">
                    <div class="ords_in7">
                        <label>
                            <select name="ddlOrder"  id="ddlOrder">
                                <option selected="selected" value="0">No Orders Placed Yet</option>

                            </select>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group" id="presup_error">
                <label class="col-sm-2 text-right notes_req">Upload</label>
                <div class="col-sm-10 parentdivelement">
                    <label class="file-upload file-upload-con">
                        <input type="file" name="file_upload" id="file_upload" title="Select File" >
<!--                        <input type="file" name="file_upload" value="Upload image" title="Select File" id="btnUpload" class="ords_btns_upload">-->
                    </label>
                    <span style="font-size: 11px;" class="file_allowed">(Only upload .jpeg, .jpg, .gif or .png Image size is less than 10MB)</span>
                    <div>
                        <div>
                            <div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <label class="col-sm-2"></label>
            <div class="col-sm-3">
                <input type="submit" name="btnUpload" value="Upload Now" id="btnUpload" class="ords_btns_upload">
            </div>

            <div class="clear_h"></div>
        </div>
    </div>
    <div class="clear_h"></div>
    <div class="ords_in3">
        <div>

        </div>
    </div>
</div>

<!--        /prescription-->